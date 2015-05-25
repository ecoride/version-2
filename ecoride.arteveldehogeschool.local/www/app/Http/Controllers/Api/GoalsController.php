<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter as FractalPaginatorAdapter;
use League\Fractal\Resource as FractalResource;
use StartMeUp\Http\Requests;
use StartMeUp\Http\Requests\StoreGoalRequest;
use StartMeUp\Http\Requests\StoreTargetCheckboxRequest;
use StartMeUp\Http\Requests\StoreTargetDurationRequest;
use StartMeUp\Http\Requests\StoreTargetRecurringCheckboxRequest;
use StartMeUp\Repositories\Eloquent\Goal as GoalRepository;
use StartMeUp\Transformers\GenericNewTransformer;
use StartMeUp\Transformers\GenericTransformer;
use StartMeUp\Models\Category;
use StartMeUp\Models\Goal;
use StartMeUp\Models\TargetCheckbox;
use StartMeUp\Models\TargetDuration;
use StartMeUp\Models\TargetRecurringCheckbox;
use StartMeUp\User;

class GoalsController extends Controller {

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
		$goalRepository = new GoalRepository();

		$goals     = $goalRepository->getCollection();
		$paginator = $goalRepository->getPaginator();

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

		$categoryId = (int) $goalData['category_id'];
		$userId = (int) $goalData['user_id'];
		$targetClass = $goalData['target_class'];

		$category = Category::find($categoryId);
		$user = User::find($userId);

		switch ($targetClass) {
			case 'TargetCheckbox':
				$storeTargetCheckboxRequest = new StoreTargetCheckboxRequest();
				$rulesTargetCheckbox = $storeTargetCheckboxRequest->rules();
				$validatorTargetCheckbox = \Validator::make($goalData['target'], $rulesTargetCheckbox);
				if ($validatorTargetCheckbox->fails()) {
					return response()
						->json([
							'errors' => $validator->errors()->all(),
						])
						->setStatusCode(Response::HTTP_BAD_REQUEST);
				}
				$target = new TargetCheckbox($goalData['target']);
				break;
			case 'TargetRecurringCheckbox':
				$storeTargetRecurringCheckboxRequest = new StoreTargetRecurringCheckboxRequest();
				$rulesTargetRecurringCheckbox = $storeTargetRecurringCheckboxRequest->rules();
				$validatorTargetRecurringCheckbox = \Validator::make($goalData['target'], $rulesTargetRecurringCheckbox);
				if ($validatorTargetRecurringCheckbox->fails()) {
					return response()
						->json([
							'errors' => $validator->errors()->all(),
						])
						->setStatusCode(Response::HTTP_BAD_REQUEST);
				}
				$target = new TargetRecurringCheckbox($goalData['target']);
				break;
			case 'TargetDuration':
				$storeTargetDurationRequest = new StoreTargetDurationRequest();
				$rulesTargetDuration = $storeTargetDurationRequest->rules();
				$validatorTargetDuration = \Validator::make($goalData['target'], $rulesTargetDuration);
				if ($validatorTargetDuration->fails()) {
					return response()
						->json([
							'errors' => $validator->errors()->all(),
						])
						->setStatusCode(Response::HTTP_BAD_REQUEST);
				}
				$target = new TargetDuration($goalData['target']);
				break;
			default:
				break;
		}
		$target->save();

		$goal->user()->associate($user);
		$goal->category()->associate($category);
		$goal->target()->associate($target);

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
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goalRepository = new GoalRepository();
		$goal = $goalRepository->find((int) $id);

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
