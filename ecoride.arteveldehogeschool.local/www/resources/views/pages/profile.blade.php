@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="content">

            <div class="col col-12">
                <section class="user">
                    <div class="user-profile">
                        <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">

                        <div class="user-details">
                            <h1>Jeroen Knockaert</h1>

                            <ul>
                                <li>Leeftijd: 21 jaar</li>
                                <li>Provincie: West-Vlaanderen, Wervik</li>
                                <li>Geslacht: <i class="fa fa-male"></i></li>
                                <li>Ratings: <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></li>
                                <li>Aantal ritten: 65</li>
                            </ul>
                        </div>
                        <a href="messagedetail"><i class="fa fa-envelope message"></i></a>
                    </div>
                </section>
            </div> <!-- end col-12 -->

            <div class="col col-6 left">
                <section class="ritten box">

                    <h1>Recente ritten</h1>
                    <table>
                        <thead>
                        <tr><th>ritnaam</th><th>Tijdstip</th><th class="time-left">Time left</th></tr>
                        </thead>
                        <tbody>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>

                        </tbody>
                    </table>
                    <div class="table-nav">
                        <a href="" class="prev left"><i class="fa fa-angle-left"></i></a>
                        <div class="table-nav-buttons">
                            <a href="">8</a>
                            <a href="">9</a>
                            <a href="" class="active">10</a>
                            <a href="">11</a>
                            <a href="">...</a>
                        </div>
                        <a href="" class="next right"><i class="fa fa-angle-right"></i></a>
                    </div>
                </section>
            </div> <!-- end col-6 -->

            <div class="col col-6 right">
                <section class="ritten box">

                    <h1>Geplande ritten</h1>
                    <table>
                        <thead>
                        <tr><th>ritnaam</th><th>Tijdstip</th><th class="time-left">Time left</th></tr>
                        </thead>
                        <tbody>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail2.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        </tbody>
                    </table>
                    <div class="table-nav">
                        <a href="" class="prev left"><i class="fa fa-angle-left"></i></a>
                        <div class="table-nav-buttons">
                            <a href="">8</a>
                            <a href="">9</a>
                            <a href="" class="active">10</a>
                            <a href="">11</a>
                            <a href="">...</a>
                        </div>
                        <a href="" class="next right"><i class="fa fa-angle-right"></i></a>
                    </div>
                </section>

            </div> <!-- end col-6 -->

            <section class="col col-12 user">
                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
                    <div id="gmap_canvas" style="height:33vh; width:100%;"></div>

                    <script type="text/javascript">function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(41.8839927,-87.61970559999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.8839927, -87.61970559999997)}); infowindow = new google.maps.InfoWindow({content:"<span style='height:auto !important; display:block; white-space:nowrap; overflow:hidden !important;'><strong style='font-weight:400;'>Grant park</strong><br>Chicago IL 60601<br> United States</span>" }); google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);}); infowindow.open(map,marker);}google.maps.event.addDomListener (window, "load", init_map);
                    </script>
                </div>
            </section>
        </div> <!-- class content -->
        <footer>
            <p>&copy; 2014 Ecoride - <a href="">Disclaimer</a></p>
        </footer>
    </md-content>
@stop
