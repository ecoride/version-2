<?php namespace StartMeUp\Http\Controllers\Api;

use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Serializer;
use League\Fractal\Resource\ResourceInterface;
use StartMeUp\Http\Controllers\Controller as BaseController;

abstract class Controller extends BaseController {

	const API_RESULT_LIMIT_DEFAULT =  10;
	const API_RESULT_LIMIT_MAX     = 100;

	/**
	 * @var Manager
	 */
	protected $fractal;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->fractal = new Manager();
		$this->fractal->setSerializer(new Serializer\DataArraySerializer);
//		$this->fractal->setSerializer(new Serializer\JsonApiSerializer);
	}

	/**
	 * @param Request $request
	 * @return mixed
	 */
	public function getRequestData(Request $request)
	{
		return json_decode($request->getContent(), true);
	}

	/**
	 * @param ResourceInterface $resource
	 * @return array
	 */
	public function getResponseData(ResourceInterface $resource)
	{
		return $this->fractal->createData($resource)->toArray();
	}
}
