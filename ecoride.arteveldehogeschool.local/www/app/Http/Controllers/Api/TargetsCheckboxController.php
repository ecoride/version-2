<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter as FractalPaginatorAdapter;
use League\Fractal\Resource as FractalResource;
use StartMeUp\Http\Requests;
use StartMeUp\Http\Requests\UpdateTargetCheckboxRequest;
use StartMeUp\Transformers\GenericNewTransformer;
use StartMeUp\Transformers\GenericTransformer;
use StartMeUp\Models\TargetCheckbox;

class TargetsCheckboxController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return TargetCheckbox::all();
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
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return TargetCheckbox::find($id);
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
	 * @param Request $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		// Validation through type hinting cannot be used here, because it is not a form post, but JSON data.
		$updateTargetCheckboxRequest = new UpdateTargetCheckboxRequest();
		$rules = $updateTargetCheckboxRequest->rules();

		$data = $this->getRequestData($request);
		$targetData = $data['target'];

		$validator = \Validator::make($targetData, $rules);
		if ($validator->fails()) {
			dd($validator->errors()->all());
			return response()
				->json([
					'errors' => $validator->errors()->all(),
				])
				->setStatusCode(Response::HTTP_BAD_REQUEST);
		}

		$target = TargetCheckbox::find($id);
		if (!$target) {
			return response()
				->json([
					'errors' => [
						['message' => "TargetCheckbox with ID '${id}' does not exist."]
					]
				])
				->setStatusCode(Response::HTTP_NOT_FOUND);
		}
		$target->achieved_at = $targetData['achieved_at'];
		$target->save();

		return response()
			->json()
			->setStatusCode(Response::HTTP_NO_CONTENT);
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
