@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="content parking">

            <div class="col col-12 left">
                <h1>Parking: Mediacampus Mariakerke</h1>
            </div>
            <!-- end col-12 -->
            <div class="col col-7 left">
                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
                    <div id="gmap_canvas" style="height:30vh; width:90%; margin:auto;"></div>

                    <script type="text/javascript">function init_map() {
                            var myOptions = {
                                zoom: 14,
                                center: new google.maps.LatLng(51.087262, 3.670342),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(51.087262, 3.670342)
                            });
                            infowindow = new google.maps.InfoWindow({content: "<span style='height:auto !important; display:block; white-space:nowrap; overflow:hidden !important;'>" +
                            "<strong style='font-weight:400;'>Mediacampus Mariakerke</strong><br>Industrieweg 232<br>9030 Mariakerke</span>"});
                            google.maps.event.addListener(marker, "click", function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, "load", init_map);
                    </script>
                </div>
            </div>
            <!-- end col-6 -->

            <div class="col col-5 right">

                <div class="parking-details">
                    <h2>Info:</h2>
                    <ul>
                        <li>Mediacampus Mariakerke</li>
                        <li>Industrieweg 232</li>
                        <li>9030 Mariakerke</li>
                        <li>09 234 86 00</li>
                    </ul>
                    <h2>Rating:</h2>

                    <div class="rating">
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i>
                    </div>
                </div>

            </div>
            <!-- end col-6 -->

            <div class="col col-12">
                <h1>Komende ritten</h1>
                <section class="ritten">
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
            <!-- end col-12 -->
        </div>
    </md-content>
@stop