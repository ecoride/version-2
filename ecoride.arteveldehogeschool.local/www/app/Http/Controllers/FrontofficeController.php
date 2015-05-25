<?php namespace StartMeUp\Http\Controllers;

class FrontofficeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		\Debugbar::disable();
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('frontoffice');
	}
    public function rides()
    {
        return view('pages.rides');
    }
    public function ride()
    {
        return view('pages.ride');
    }
    public function ridedetail()
    {
        return view('pages.ridedetail');
    }
    public function parkings()
    {
        return view('pages.parkings');
    }
    public function parkingdetail()
    {
        return view('pages.parkingdetail');
    }
    public function messages()
    {
        return view('pages.messages');
    }
    public function messagedetail()
    {
        return view('pages.messagedetail');
    }
    public function badges()
    {
        return view('pages.badges');
    }
    public function profile()
    {
        return view('pages.profile');
    }

}
