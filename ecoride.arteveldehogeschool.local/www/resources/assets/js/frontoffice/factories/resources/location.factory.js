;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('LocationResourceFactory', LocationResourceFactory);

	LocationResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function LocationResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('locations/:locationId'),
			{
				locationId: '@locationId'
			}
		);

	}

})();
