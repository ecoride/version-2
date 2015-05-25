<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter as FractalPaginatorAdapter;
use League\Fractal\Resource as FractalResource;
use StartMeUp\Http\Requests;
use StartMeUp\Http\Requests\StoreUserRequest;
use StartMeUp\Repositories\Eloquent\User as UserRepository;
use StartMeUp\Transformers\GenericNewTransformer;
use StartMeUp\Transformers\GenericTransformer;
use StartMeUp\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*
		 * filter[attribute]
		 * limit=100
		 * sort[attribute]=desc
		 * include[table_name]
		 */

		// Laravel Eloquent
		$userRepository = new UserRepository();

		$users     = $userRepository->getCollection();
		$paginator = $userRepository->getPaginator();

		// Fractal
		$resource = new FractalResource\Collection($users, new GenericTransformer);
		$resource->setPaginator(new FractalPaginatorAdapter($paginator));

		return response()
			->json($this->getResponseData($resource))
			->setStatusCode(Response::HTTP_OK);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Validation through type hinting cannot be used here, because it is not a form post, but JSON data.
		$storeUserRequest = new StoreUserRequest();
		$rules = $storeUserRequest->rules();

		$data = $this->getRequestData($request);
		$userData = $data['user'];

		$validator = \Validator::make($userData, $rules);
		if ($validator->fails()) {
			return response()
				->json([
					'errors' => $validator->errors()->all(),
				])
				->setStatusCode(Response::HTTP_BAD_REQUEST);
		}

		$user = new User($userData);
		$user->password = \Hash::make($userData['password']);

		if ($user->save()) {
			$resource = new FractalResource\Item($user, new GenericNewTransformer);

			return response()
				->json($this->getResponseData($resource))
				->setStatusCode(Response::HTTP_CREATED);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		if (!$user) {
			return response()
				->json([
					'errors' => [
						['message' => "User with ID '${id}' does not exist."]
					]
				])
				->setStatusCode(Response::HTTP_NOT_FOUND);
		}

		$resource = new FractalResource\Item($user, new GenericTransformer);

		return response()
			->json($this->getResponseData($resource))
			->setStatusCode(Response::HTTP_OK);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
