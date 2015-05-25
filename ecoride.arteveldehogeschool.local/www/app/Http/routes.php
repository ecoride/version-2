<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Landing Page
// ============
Route::get('/', function() {
	return view('landing');
});

// Application Programming Interface Routes
// ========================================
Route::group(['prefix' => 'api'], function() {
	\Debugbar::disable();

	// API version 1
	// -------------
	Route::group(['prefix' => 'v1'], function() {
		Route::get('/', function() {
			return [
				Request::root() . ' API' =>  [
					'version' => 1
				]
			];
		});
		Route::options('/', function() {
			return ['X-CSRF-TOKEN' => csrf_token()];
		});

		Route::resource('companies'       , 'Api\CompaniesController');
		Route::resource('goals'           , 'Api\GoalsController');
		Route::resource('locations'       , 'Api\LocationsController');
		Route::resource('targets/checkbox', 'Api\TargetsCheckboxController');
		Route::resource('users'           , 'Api\UsersController');
		Route::resource('users.categories', 'Api\UsersCategoriesController');
		Route::resource('users.goals'     , 'Api\UsersGoalsController');
		Route::get('interests', function () {
			return [
				'interests' => StartMeUp\Models\Interest::all(),
			];
		});
		Route::get('targets', function () {
			$targetsCheckbox = StartMeUp\Models\TargetCheckbox::all();
			$targetsRecurringCheckbox = StartMeUp\Models\TargetRecurringCheckbox::all();
			$targetsRecurringCheckbox->load('updates');
			$targetsDuration = StartMeUp\Models\TargetDuration::all();
			$targetsDuration->load('updates');
			return [
				'targets' => array_merge($targetsCheckbox->toArray(), $targetsRecurringCheckbox->toArray(), $targetsDuration->toArray()),
			];
		});
	});

});

// Back Office Routes
// ==================
Route::group(['prefix' => 'backoffice'], function() {
	Route::get('/', [
		'as'   => 'backoffice.home',
		'uses' => 'BackofficeController@index',
	]);
});

// Front Office Routes
// ===================
Route::group(['prefix' => 'frontoffice'], function() {
	Route::get('/', [
		'as'   => 'frontoffice.home',
		'uses' => 'FrontofficeController@index',
	]);
});

// Style Guide Routes
// ------------------
Route::get('/styleguide', [
	'as' => 'styleguide.home',
	function() {
		\Debugbar::disable();
		return view('styleguide');
	}
]);

Route::get('rides', 'FrontofficeController@rides');
Route::get('ride', 'FrontofficeController@ride');
Route::get('ridedetail', 'FrontofficeController@ridedetail');
Route::get('parkings', 'FrontofficeController@parkings');
Route::get('parkingdetail', 'FrontofficeController@parkingdetail');
Route::get('messages', 'FrontofficeController@messages');
Route::get('messagedetail', 'FrontofficeController@messagedetail');
Route::get('badges', 'FrontofficeController@badges');
Route::get('profile', 'FrontofficeController@profile');


