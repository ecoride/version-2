;(function () { 'use strict';

	// StartMeUpBuddy.io application
	// -----------------------------

	angular.module('smuApplication', [
		// Angular module dependencies
		'ngMaterial',
		'ngMessages',
		'ngResource',
		'ngRoute',

		// StartMeUp.io module dependencies
		'smuControllers',
		'smuDirectives',
		'smuFactories',
		'smuFilters',
		'smuServices'
	]);

	// StartMeUpBuddy.io module declarations
	// -------------------------------------

	angular.module('smuControllers', []);
	angular.module('smuDirectives' , []);
	angular.module('smuFactories'  , []);
	angular.module('smuFilters'    , []);
	angular.module('smuServices'   , []);

})();
