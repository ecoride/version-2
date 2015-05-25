;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('UserGoalResourceFactory', UserGoalResourceFactory);

	UserGoalResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function UserGoalResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('users/:userId/goals/:goalId'),
			{
				userId: '@userId',
				goalId: '@goalId'
			},
			{
				'getWithGoals':   { method: 'GET', params: { 'include[target]': true } },
				'queryWithGoals': { method: 'GET', params: { 'include[target]': true, 'sort[order]': '@order' }, isArray: false }
			}
		);

	}

})();
