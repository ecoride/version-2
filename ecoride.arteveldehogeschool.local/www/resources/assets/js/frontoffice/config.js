;(function () { 'use strict';

	angular.module('smuApplication')
		.config(Config);

	Config.$inject = [
		'$compileProvider',
		'$mdThemingProvider',
		'$resourceProvider'
	];

	function Config($compileProvider, $mdThemingProvider, $resourceProvider) {
		$compileProvider.debugInfoEnabled(true); // Set to `false` for production

		$resourceProvider.defaults.actions.query.isArray = false; // Allow { 'data': [ … ] } rather than [ … ]
		//console.info($resourceProvider.defaults.actions);

		// @link: http://www.google.com/design/spec/style/color.html
		$mdThemingProvider.theme('default').
			primaryPalette('brown', {
				'default':  '50',
				'hue-1':    '50',
				'hue-2':   '600',
				'hue-3':  'A100'
			}).
			accentPalette('teal', {
				'default': '500',
				'hue-1':    '50',
				'hue-2':   '600',
				'hue-3':  'A100'
			}).
			warnPalette('red');
	}

})();
