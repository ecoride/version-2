;(function () { 'use strict';

	angular.module('smuControllers')
		.controller('SettingsCtrl', SettingsCtrl);

	SettingsCtrl.$inject = [
		'$scope'
	];

	function SettingsCtrl(
		$scope
	) {

		$scope.menu = [
			{
				label: "User account",
				uri: "#/settings/user-account"
			}, {
				label: "Personal profile",
				uri: "#/settings"
			}, {
				label: "Company profile",
				uri: "#/settings/"
			}, {
				label: "Privacy",
				uri: "#/settings"
			}
		];

	}

})();
