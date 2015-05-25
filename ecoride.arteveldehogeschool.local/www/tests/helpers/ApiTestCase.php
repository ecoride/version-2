<?php
// "tests/helpers" must be added to `composer.json` and then run `$ composer dump-autoload` to make them autoload!

use Illuminate\Http\Request;

abstract class ApiTestCase extends TestCase {

	/**
	 * URI of the API.
	 *
	 * @var string
	 */
	protected $uri = 'api/v1/';

	/**
	 * @param $path
	 * @return \Illuminate\Http\Response
	 */
	protected function apiCallGET($path)
	{
		$response = $this->call(Request::METHOD_GET, $this->uri . $path);

		return $response;
	}

	/**
	 * @param $path
	 * @param $parameters
	 * @param $content
	 * @return \Illuminate\Http\Response
	 */
	protected function apiCallPOST($path, $parameters, $content)
	{
		$response = $this->call(Request::METHOD_POST, $this->uri . $path, $parameters, $cookies = [], $files = [], $server = [], json_encode($content));

		return $response;
	}

	/**
	 * @param $path
	 * @param $parameters
	 * @param $content
	 * @return \Illuminate\Http\Response
	 */
	protected function apiCallPUT($path, $parameters, $content)
	{
		$response = $this->call(Request::METHOD_PUT, $this->uri . $path, $parameters, $cookies = [], $files = [], $server = [], json_encode($content));

		return $response;
	}
}
