@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="content detail">
            <div class="col col-12">
                <h1>Gent Sint-Pieters - Mariakerke</h1>
            </div>
            <!-- end col-12 -->
            <div class="col col-4 left">

                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
                    <div id="gmap_canvas" style="height:33vh; width:90%; margin:auto; margin-bottom: 50px;"></div>

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
            <div class="col col-8 left">
                <section class="rit-detail">
                    <ul>
                        <li>Aangemaakt door <a href="profile">Jeroenknockaert (65)</a></li>
                        <li>Aantal plaatsen: 3 (nog 1 plaats)</li>
                        <li>Tarief: Gratis</li>
                        <hr>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at facilisis sem, vitae dictum
                            leo. Sed velit risus, consequat et tempus a, ornare et purus. Quisque nisl augue, vestibulum
                            rhoncus dui et, auctor ultricies nibh. Quisque vel placerat nisi. Maecenas lobortis eleifend
                            sapien eget euismod. Morbi eu convallis nisi. Integer in est purus. Praesent pulvinar lacus
                            nisi, semper volutpat ipsum consectetur imperdiet. Vivamus ac eros in elit pulvinar
                            tincidunt congue vitae dui. Aenean ullamcorper non ante eu fermentum. Pellentesque ut diam
                            eget turpis tincidunt tincidunt sed et dolor. Integer condimentum est nec ullamcorper
                            vehicula. Integer eget mi felis.
                        </li>
                        <hr>
                    </ul>
                    <form class="col-1 right">
                        <md-button class="md-raised md-accent" href="#">Join ride</md-button>
                    </form>
                </section>
            </div>
            <!-- end col-8 -->
            <div class="col col-12">


                <section class="ritten parking">
                    <table>
                        <thead>
                        <tr>
                            <th>vertrek</th>
                            <th>Tijd</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>

                        </tbody>
                    </table>
                    <table>
                        <thead>
                        <tr>
                            <th>Aankomst</th>
                            <th>Tijd</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        </tr>

                        </tbody>
                    </table>
                </section>
            </div>
            <!-- end col-12 -->


        </div>
        <!-- class content -->
        <footer>
            <p>&copy; 2014 Ecoride - <a href="">Disclaimer</a></p>
        </footer>
    </md-content>
@stop