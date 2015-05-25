;(function () { 'use strict';

	angular.
		module('smuFactories').
		factory('RegistrationFormStateFactory', RegistrationFormStateFactory);

	RegistrationFormStateFactory.$inject = [
		'$resource',
		'configApi'
	];

	function RegistrationFormStateFactory($resource, configApi) {

		return {
			address: {},
			company: {},
			settings: {},
			user: {}
		};

	}

})();
