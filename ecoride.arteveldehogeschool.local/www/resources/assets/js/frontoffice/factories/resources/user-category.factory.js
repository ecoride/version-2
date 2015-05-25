;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('UserCategoryResourceFactory', UserCategoryResourceFactory);

	UserCategoryResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function UserCategoryResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('users/:userId/categories/:categoryId'),
			{
				userId: '@userId',
				categoryId: '@categoryId'
			},
			{
				'getWithGoals':   { method: 'GET', params: { 'include[goals]': true } },
				'queryWithGoals': { method: 'GET', params: { 'include[goals.target.updates]': true, 'sort[order]': '@order' }, isArray: false }
			}
		);

	}

})();
