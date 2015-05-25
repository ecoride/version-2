<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter as FractalPaginatorAdapter;
use League\Fractal\Resource as FractalResource;
use StartMeUp\Http\Requests;
use StartMeUp\Repositories\Eloquent\Goal as GoalRepository;
use StartMeUp\Transformers\GenericNewTransformer;
use StartMeUp\Transformers\GenericTransformer;

class UsersGoalsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($userId)
	{
		/*
		 * filter[attribute]
		 * limit=100
		 * sort[attribute]=desc
		 * include[table_name]
		 */

		// Laravel Eloquent
		$additionalInput = [
			'filter' => [
				'users' => (int) $userId,
			]
		];
		$goalRepository = new GoalRepository($additionalInput);

		$goals = $goalRepository->getCollection();
		$paginator  = $goalRepository->getPaginator();

		// Fractal
		$resource = new FractalResource\Collection($goals, new GenericTransformer);
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
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Validation through type hinting cannot be used here, because it is not a form post, but JSON data.
		$storeGoalRequest = new StoreGoalRequest();
		$rules = $storeGoalRequest->rules();

		$data = $this->getRequestData($request);
		$goalData = $data['goal'];

		$validator = \Validator::make($goalData, $rules);
		if ($validator->fails()) {
			return response()
				->json([
					'errors' => $validator->errors()->all(),
				])
				->setStatusCode(Response::HTTP_BAD_REQUEST);
		}

		$goal = new Goal($goalData);
		if ($goal->save()) {
			$resource = new FractalResource\Item($goal, new GenericNewTransformer);

			return response()
				->json($this->getResponseData($resource))
				->setStatusCode(Response::HTTP_CREATED);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param $userId
	 * @param $goalId
	 * @return Response
	 */
	public function show($userId, $goalId)
	{
		/*
		 * filter[attribute]
		 * include[table_name]
		 */

		// Laravel Eloquent
		$additionalInput = [
			'filter' => [
				'users' => (int) $userId,
			]
		];
		$goalRepository = new GoalRepository($additionalInput);
		$goal = $goalRepository->find((int) $goalId);

		if (!$goal) {
			return response()
				->json([
					'errors' => [
						['message' => "Goal with ID '${id}' does not exist."]
					]
				])
				->setStatusCode(Response::HTTP_NOT_FOUND);
		}

		// Fractal
		$resource = new FractalResource\Item($goal, new GenericTransformer);

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
