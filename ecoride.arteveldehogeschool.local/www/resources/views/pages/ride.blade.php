@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="content">

            <div class="col col-4 left">
                <h1>Gent - Oudenaarde</h1>

                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
                    <div id="gmap_canvas" style="height:33vh; width:90%; margin:auto;"></div>

                    <script type="text/javascript">function init_map() {
                            var myOptions = {
                                zoom: 14,
                                center: new google.maps.LatLng(41.8839927, -87.61970559999997),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(41.8839927, -87.61970559999997)
                            });
                            infowindow = new google.maps.InfoWindow({content: "<span style='height:auto !important; display:block; white-space:nowrap; overflow:hidden !important;'><strong style='font-weight:400;'>Grant park</strong><br>Chicago IL 60601<br> United States</span>"});
                            google.maps.event.addListener(marker, "click", function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, "load", init_map);
                    </script>
                </div>

            </div>
            <!-- end col-4 -->
            <div class="col col-8 right">
                <section class="ritten parking">
                    <table>
                        <thead>
                        <tr>
                            <th>Plaats</th>
                            <th>Openingsuren</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="ridedetail">Gent Sint-Pieters - Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td><a href="ridedetail">Gent Sint-Pieters - Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td><a href="ridedetail">Gent Sint-Pieters - Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td><a href="ridedetail">Gent Sint-Pieters - Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>

                        </tbody>
                    </table>
                </section>
            </div>
            <!-- end col-8 -->

        </div>
        <!-- class content -->
        <footer>
            <p>&copy; 2014 Ecoride - <a href="">Disclaimer</a></p>
        </footer>
    </md-content>
@stop