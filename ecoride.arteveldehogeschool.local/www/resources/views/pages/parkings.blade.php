@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="content parking">

            <div class="col col-12 parking">
                <h1>Zoek een parking</h1>

                <form id="search-form">
                    <md-input-container flex>
                        <label for="zoeken"><i class="fa fa-location-arrow fa-left"></i>Zoek een plaats</label>
                        <input ng-model="parkings.zoeken" type="text" name="zoeken"
                               placeholder="zoek een plaats">
                    </md-input-container>
                    <md-button class="md-raised md-accent" href="#">Zoek Parkings</md-button>
                    {{--<input type="text" name="zoeken" id="zoeken" placeholder="zoek een plaats">--}}

                    {{--<input type="submit" name="search-btn" id="search-btn" value="Zoek Parking">--}}
                </form>
            </div>
            <!-- end col-12 -->

            <div class="col col-12">
                <section class="ritten">

                    <h1>Parking</h1>
                    <table>
                        <thead>
                        <tr>
                            <th>Plaats</th>
                            <th class="time">Openingsuren</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="plaats"><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td class="time"><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td class="plaats"><a href="parkingdetail">Mediacampus Mariaddkddddddcrverke</a></td>
                            <td class="time"><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td class="plaats"><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td class="time"><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td class="plaats"><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td class="time"><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>
                        <tr>
                            <td class="plaats"><a href="parkingdetail">Mediacampus Mariakerke</a></td>
                            <td class="time"><a href="parkingdetail">
                                    <time>08:00 - 19:00</time>
                                </a></td>
                        </tr>

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

            </div>
            <!-- end col-6 -->

        </div>
        <!-- class content -->
        <footer>
            <p>&copy; 2014 Ecoride - <a href="">Disclaimer</a></p>
        </footer>
    </md-content>
@stop