;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('StatisticResourceFactory', StatisticResourceFactory);

	StatisticResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function StatisticResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('statistics/:statisticId'),
			{
				statisticId: '@statisticId'
			}
		);

	}

})();
