;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('GoalResourceFactory', GoalResourceFactory);

	GoalResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function GoalResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('goals/:goalId'),
			{
				goalId: '@id'
			}
		);

	}

})();
