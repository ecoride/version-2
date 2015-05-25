;(function () { 'use strict';

	angular.module('smuApplication')
		.config(Routes)
		.run(Preloads);

	// Preload Templates
	// -----------------
	Routes.$inject = [
		'$routeProvider'
	];

	function Routes($routeProvider) {
		$routeProvider.
			when('/gamification', {
				templateUrl: getView("gamification/shoot")
			}).
			when('/gamification/leaderboard', {
				templateUrl: getView("gamification/leaderboard")
			}).
			when('/gamification/trophies', {
				templateUrl: getView("gamification/trophies")
			}).
			when('/goals', {
				templateUrl: getView("goals/overview")
			}).
			when('/goals/category/:categoryId/edit', {
				templateUrl: getView("goals/category/edit")
			}).
			when('/goals/category/:categoryId/goal/create', {
				templateUrl: getView("goals/goal/create"),
				controller: "GoalsCtrl",
				controllerAs: 'vm'
			}).
			when('/goals/category/:categoryId/goal/:goalId/edit', {
				templateUrl: getView("goals/goal/edit"),
				controller: "GoalsCtrl",
				controllerAs: 'vm'

			}).
			when('/goals/category/:categoryId/goal/:goalId/target/update/create', {
				templateUrl: getView("goals/goal/target/update/create"),
				controller: "GoalsCtrl",
				controllerAs: 'vm'
			}).
			when('/goals/statistics', {
				templateUrl: getView("goals/statistics"),
				controller: "GoalsStatisticsCtrl"
			}).
			when('/goals/category/:categoryId/goal/:goalId/statistics', {
				templateUrl: getView("goals/goal/statistics"),
				controller: "GoalsStatisticsCtrl"
			}).
			when('/goals/category/add', {
				templateUrl: getView("goals/category/add")
			}).
			when('/goals/statistics', {
				templateUrl: getView("goals/statistics"),
				controller: "GoalsStatisticsGlobalCtrl"
			}).
			when('/nearby', {
				templateUrl: getView("nearby/map")
			}).
			when('/registration/step/1/of/4', {
				templateUrl: getView("registration/1-user-account"),
				controller: "RegistrationCtrl",
				step:  1,
				steps: 4
			}).
			when('/registration/step/2/of/4', {
				templateUrl: getView("registration/2-personal-profile"),
				controller: "RegistrationCtrl",
				step:  2,
				steps: 4
			}).
			when('/registration/step/3/of/4', {
				templateUrl: getView("registration/3-company-profile"),
				controller: "RegistrationCtrl",
				step:  3,
				steps: 4
			}).
			when('/registration/step/4/of/4', {
				templateUrl: getView("registration/4-completed"),
				controller: "RegistrationCtrl",
				step:  4,
				steps: 4
			}).
			when('/settings', {
				templateUrl: getView("settings/menu")
			}).
			when('/log-in', {
				templateUrl: getView("log-in")
			}).
			when('/splash', {
				templateUrl: getView("splash")
				//controller: "StartCtrl"
			}).
			otherwise({
				redirectTo: '/splash'
			});
	}

	// Preload Templates
	// -----------------
	Preloads.$inject = [
		'$http',
		'$templateCache'
	];

	function Preloads($http, $templateCache) {
		var partials = [
				'validation-messages'
			],
			views = [
				'registration/1-user-account',
				'registration/2-personal-profile',
				'registration/3-company-profile',
				'registration/4-completed'
			];

		partials.forEach(function (template) {
			$http.get(getPartialView(template), { cache: $templateCache });
		});

		views.forEach(function (template) {
			$http.get(getView(template), { cache: $templateCache });
		});
	}

	function getView(uri) {
		return '/templates/views/' + uri + '.html';
	}

	function getPartialView(uri) {
		return '/templates/partials/' + uri + '.html';
	}

})();
