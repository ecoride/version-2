;(function () { 'use strict';

	angular.module('smuFactories')
		.factory('CompanyResourceFactory', CompanyResourceFactory);

	CompanyResourceFactory.$inject = [
		'$resource',
		'ApiUriFactory'
	];

	function CompanyResourceFactory($resource, ApiUriFactory) {

		// https://code.angularjs.org/1.3.15/docs/api/ngResource/service/$resource
		return $resource(
			ApiUriFactory.make('companies/:companyId'),
			{
				companyId: '@companyId'
			}
		);

	}

})();
