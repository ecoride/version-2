;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('InterestResourceFactory', InterestResourceFactory);

	InterestResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function InterestResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('interest/:interestId'),
			{
				interestId: '@interestId'
			}
		);

	}

})();
