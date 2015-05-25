!function(){"use strict";function e(e,o,a,t,r){var i=this;i.checkboxes={cb0:!0,cb1:"yes",cb2:!1,cb3:!0,cb4:!0},i.switches={sw0:"Yes I do want to collaborate with others",sw1:"public",sw2:"public"},i.user={firstName:"Jane",lastName:"Doe"},i.goals=[{category:"Category A",name:"Goal 01"},{category:"Category A",name:"Goal 02"},{category:"Category A",name:"Goal 03"},{category:"Category A",name:"Goal 04"},{category:"Category B",name:"Goal 05"},{category:"Category B",name:"Goal 06"},{category:"Category B",name:"Goal 07"},{category:"Category B",name:"Goal 08"}],function(){var e=document.getElementById("style-guide-chart-0").getContext("2d"),a={labels:["January","February","March","April","May","June","July"],datasets:[{label:"My First dataset",fillColor:"rgba(220,220,220,0.5)",strokeColor:"rgba(220,220,220,0.8)",highlightFill:"rgba(220,220,220,0.75)",highlightStroke:"rgba(220,220,220,1)",data:[12,10,11,9,5,3,2]}]},t=o.bar;new Chart(e).Bar(a,t)}(),function(){var e=document.getElementById("style-guide-chart-1").getContext("2d"),a={labels:["January","February","March","April","May","June","July"],datasets:[{label:"My First dataset",fillColor:"rgba(220,220,220,0.2)",strokeColor:"rgba(220,220,220,1)",pointColor:"rgba(220,220,220,1)",pointStrokeColor:"#fff",pointHighlightFill:"#fff",pointHighlightStroke:"rgba(220,220,220,1)",data:[65,59,80,81,56,55,40]},{label:"My Second dataset",fillColor:"rgba(151,187,205,0.2)",strokeColor:"rgba(151,187,205,1)",pointColor:"rgba(151,187,205,1)",pointStrokeColor:"#fff",pointHighlightFill:"#fff",pointHighlightStroke:"rgba(151,187,205,1)",data:[28,48,40,19,86,27,90]}]},t=o.line;new Chart(e).Line(a,t)}(),function(){var o={company:"<b>{{ name }}</b><i><br>{{ strapline }}</i><br>{{ address.street }}<br>{{ address.locality }}",you:"<b>You</b><br>You are here!"},t=e(o.company),r={companies:[{name:"Arteveldehogeschool",strapline:"Mediacampus Mariakerke",address:{street:"Industrieweg 232",locality:"9030 Mariakerke"},point:[51.0950244,3.6716606]},{name:"Arteveldehogeschool",strapline:"Campus Hoogpoort",address:{street:"Hoogpoort 15",locality:"9000 Gent"},point:[51.0555987,3.7229698]},{name:"Arteveldehogeschool",strapline:"Campus Kantienberg",address:{street:"Voetweg 66",locality:"9000 Gent"},point:[51.0406693,3.7271024]}]},i=L.map("style-guide-map-0").setView(r.companies[2].point,10);L.tileLayer(a.tile.urlTemplate,a.tile.options).addTo(i);var l=L.icon(a.icon.company);r.companies.forEach(function(e){var o=L.marker(e.point,{icon:l}).addTo(i);o.bindPopup(t(e)).openPopup()}),navigator.geolocation.getCurrentPosition(function(e){var t=[e.coords.latitude,e.coords.longitude],r=L.icon(a.icon.you),l=L.marker(t,{icon:r}).addTo(i);l.bindPopup(o.you).openPopup()})}()}angular.module("smuControllers").controller("StyleGuideCtrl",e),e.$inject=["$interpolate","configChart","configMap","LocationResourceFactory","StatisticResourceFactory"]}();