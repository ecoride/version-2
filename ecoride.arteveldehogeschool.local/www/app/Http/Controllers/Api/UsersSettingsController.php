<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter as FractalPaginatorAdapter;
use League\Fractal\Resource as FractalResource;
use StartMeUp\Http\Requests;
use StartMeUp\Models\Category;
use StartMeUp\Transformers\GenericTransformer;

class UsersSettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @param $userId
	 * @return Response
	 */
	public function index($userId)
	{
		//
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
	 * @param $userId
	 * @param $settingsId
	 * @return Response
	 */
	public function show($userId, $settingsId)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param $userId
	 * @param $settingsId
	 * @return Response
	 */
	public function edit($userId, $settingsId)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param $userId
	 * @param $settingsId
	 * @return Response
	 */
	public function update($userId, $settingsId)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $userId
	 * @param $settingsId
	 * @return Response
	 */
	public function destroy($userId, $settingsId)
	{
		//
	}

}
