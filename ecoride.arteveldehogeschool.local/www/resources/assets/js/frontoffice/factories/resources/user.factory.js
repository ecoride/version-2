;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('UserResourceFactory', UserResourceFactory);

	UserResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function UserResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('users/:userId'),
			{
				userId: '@userId'
			}
		);

	}

})();
