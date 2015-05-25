;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('CategoryResourceFactory', CategoryResourceFactory);

	CategoryResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function CategoryResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('categories/:categoryId'),
			{
				categoryId: '@categoryId'
			},
			{
				'queryWithGoals': { method: 'GET', params: { 'include[goals]': true, 'sort[order]': '@order' }, isArray: false }
			}
		);

	}

})();
