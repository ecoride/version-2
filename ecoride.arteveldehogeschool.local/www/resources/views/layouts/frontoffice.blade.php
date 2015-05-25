<!DOCTYPE html>
<html lang="en" ng-app="smuApplication">
<head>
	<meta charset="UTF-8">
	<title>EcoRide</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
@section('head-styles')
	{!! Html::style('styles/css/angular.css') !!}
	{!! Html::style('styles/css/leaflet.css') !!}
	{!! Html::style('styles/css/frontoffice.css') !!}
@show
@section('head-scripts')
	{!! Html::script('scripts/js/angular.js') !!}
	{!! Html::script('scripts/js/chart.js') !!}
	{!! Html::script('scripts/js/leaflet.js') !!}
	{!! Html::script('scripts/js/lodash.js') !!}
	{!! Html::script('scripts/js/moment.js') !!}
	{!! Html::script('scripts/js/frontoffice.js') !!}
@show
</head>
<div class="wrapper">
    <div class="container">

        <!--- LOGO --->

        <div id="logo">
            <i class="fa fa-info-circle"></i>
            <h1><a href="http://www.ecoride.arteveldehogeschool.local" title="Back to the homepage"></a></h1>
        </div> <!-- end id logo -->

        <!--- NAVIGATION --->


        <nav class="nav">
            <ul id="menu-navigation" >
                <li><a href="./rides"><i class="fa fa-car"></i><span>Rides</span></a></li>
                <li><a href="./parkings"><i class="fa fa-map-marker"></i><span>Parkings</span></a></li>
                <li><a href="./messages"><i class="fa fa-envelope"></i><span>Messages</span></a></li>
                <li><a href="./badges"><i class="fa fa-certificate"></i><span>Badges</span></a></li>
                <li><a href="./profile"><i class="fa fa-user"></i><span>Profile</span></a></li>
            </ul>
        </nav>

    </div> <!-- end class container -->
</div> <!-- end class wrapper -->
@yield('content')
</html>
