;(function () { 'use strict';

	angular.module('smuApplication')

		.constant('incrementTypes', {
			a: {
				value: 'QUARTER_HOUR',
				label: 'Quarter hour',
				minutes: 15
			},
			b: {
				value: 'HOUR',
				label: 'Hour',
				minutes: 60
			},
			c: {
				value: 'DAY',
				label: 'Day',
				minutes: 480
			}
		})

		.constant('priorityTypes', {
			a: {
				value: 'HIGHEST',
				label: 'Highest priority'
			},
			b: {
				value: 'HIGH',
				label: 'High priority'
			},
			c: {
				value: 'NORMAL',
				label: 'Normal priority'
			},
			d: {
				value: 'LOW',
				label: 'Low priority'
			},
			e: {
				value: 'LOWEST',
				lable: 'Lowest priority'
			}
		})

		.constant('repeatTypes', {
			a: {
				value: 'DAILY',
				label: 'Every day'
			},
			b: {
				value: 'WEEKLY',
				label: 'Every week'
			},
			c: {
				value: 'FORTNIGHTLY',
				label: 'Every 2 weeks'
			},
			d: {
				value: 'MONTHLY',
				label: 'Every month'
			}
		})

		.constant('targetTypes', {
			a: {
				value: 'TargetCheckbox',
				label: 'Checkbox'
			},
			b: {
				value: 'TargetRecurringCheckbox',
				label: 'Recurring Checkbox'
			},
			c: {
				value: 'TargetDuration',
				label: 'Duration'
			}
		})

		.constant('configApi', {
			protocol: null,
			host    : null,
			path    : '/api/v1/'
		})

		.constant('configChart', {
			bar: {
				//Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
				scaleBeginAtZero : true,

				//Boolean - Whether grid lines are shown across the chart
				scaleShowGridLines : true,

				//String - Colour of the grid lines
				scaleGridLineColor : "rgba(0,0,0,.05)",

				//Number - Width of the grid lines
				scaleGridLineWidth : 1,

				//Boolean - Whether to show horizontal lines (except X axis)
				scaleShowHorizontalLines: true,

				//Boolean - Whether to show vertical lines (except Y axis)
				scaleShowVerticalLines: true,

				//Boolean - If there is a stroke on each bar
				barShowStroke : true,

				//Number - Pixel width of the bar stroke
				barStrokeWidth : 2,

				//Number - Spacing between each of the X value sets
				barValueSpacing : 5,

				//Number - Spacing between data sets within X values
				barDatasetSpacing : 1,

				//String - A legend template
				legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
			},
			line: {

				//Boolean - Whether grid lines are shown across the chart
				scaleShowGridLines : true,

				//String - Colour of the grid lines
				scaleGridLineColor : "rgba(0,0,0,.05)",

				//Number - Width of the grid lines
				scaleGridLineWidth : 1,

				//Boolean - Whether to show horizontal lines (except X axis)
				scaleShowHorizontalLines: true,

				//Boolean - Whether to show vertical lines (except Y axis)
				scaleShowVerticalLines: true,

				//Boolean - Whether the line is curved between points
				bezierCurve : true,

				//Number - Tension of the bezier curve between points
				bezierCurveTension : 0.4,

				//Boolean - Whether to show a dot for each point
				pointDot : true,

				//Number - Radius of each point dot in pixels
				pointDotRadius : 4,

				//Number - Pixel width of point dot stroke
				pointDotStrokeWidth : 1,

				//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
				pointHitDetectionRadius : 20,

				//Boolean - Whether to show a stroke for datasets
				datasetStroke : true,

				//Number - Pixel width of dataset stroke
				datasetStrokeWidth : 2,

				//Boolean - Whether to fill the dataset with a colour
				datasetFill : true,

				//String - A legend template
				legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
			}
		})

		.constant('configMap', {
			tile: {
				urlTemplate: 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
				options: {
					attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
				}
			},
			icon: {
				company: {
					iconUrl:   '/images/nearby/icon.svg',
					shadowUrl: '/images/nearby/icon-shadow.svg',

					iconSize:     [50, 50], // size of the icon
					shadowSize:   [50, 50], // size of the shadow
					iconAnchor:   [50, 50], // point of the icon which will correspond to marker's location
					shadowAnchor: [ 5,  5], // the same for the shadow
					popupAnchor:  [ 0,  0]  // point from which the popup should open relative to the iconAnchor
				},
				you: {
					iconUrl:   '/images/nearby/icon.svg',
					shadowUrl: '/images/nearby/icon-shadow.svg',

					iconSize:     [50, 50], // size of the icon
					shadowSize:   [50, 50], // size of the shadow
					iconAnchor:   [50, 50], // point of the icon which will correspond to marker's location
					shadowAnchor: [ 5,  5], // the same for the shadow
					popupAnchor:  [ 0,  0]  // point from which the popup should open relative to the iconAnchor
				}
			}
		});

})();
