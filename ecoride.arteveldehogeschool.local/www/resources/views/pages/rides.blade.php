@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view splash" layout="column" layout-align="center center">
        <!--- CONTENT --->
        <div class="content">

            <div class="col col-4 left">
                <section class="zoek-ritten box">
                    <form id="ritten-form" action="" method="post">
                        <h1>Zoek een Rit</h1>
                        <div layout layout-sm="column">
                            <md-input-container flex>
                                <label for="startpunt"><i class="fa fa-location-arrow fa-left"></i>Startpunt</label>
                                <input ng-model="user.account.startpunt" type="text" name="startpunt" id="startpunt" required>
                            </md-input-container>
                        </div>
                        <div layout layout-sm="column">
                            <md-input-container flex>
                                <label for="eindpunt"><i class="fa fa-location-arrow fa-left"></i>Eindpunt</label>
                                <input ng-model="user.account.eindpunt" type="text" name="eindpunt" id="eindpunt" required>
                            </md-input-container>
                        </div>
                        <div layout="row" layout-align="space-between end">
                            <md-button href="ride" class="md-raised md-accent">Rit zoeken</md-button>
                        </div>
                        <p class="rit-toevoegen-link">Bent u bestuurder?</p>
                        <div layout="row" layout-align="space-between end">
                            <md-button class="md-raised md-accent">Rit toevoegen</md-button>
                        </div>
                    </form>

                </section>
            </div> <!-- end col-4 -->
            <div class="col col-8 right">
                <section class="ritten box">
                    <h1>Geplande ritten</h1>
                    <table>
                        <thead>
                        <tr><th>ritnaam</th><th class="tijdstip">Tijdstip</th><th class="time-left">Time left</th></tr>
                        </thead>
                        <tbody>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
                        <tr><td><a href="ridedetail">Gent - Oudenaarde</a></td><td><a href="ridedetail"><i class="fa fa-clock-o"></i><time>08:00</time></a></td><td class="time-left"><a href="ritten-detail.html"><i class="fa fa-clock-o"></i><time>00:30</time></a></td></tr>
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
            </div> <!-- end col-8 -->

        </div> <!-- class content -->
        <footer>
            <p>&copy; 2014 Ecoride - <a href="">Disclaimer</a></p>
        </footer>
    </md-content>

@stop
