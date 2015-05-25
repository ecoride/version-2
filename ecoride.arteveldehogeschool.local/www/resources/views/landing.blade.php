@extends('layouts.frontoffice')

@section('content')
    <body>
    <md-content class="md-padding" layout="column" layout-align="center center">
        <style>
            section {
                max-width: 60em;
                padding: 1em;
                width: 100%;
            }

            section > h1,
            section > p {
                margin: auto;
                max-width: 30em;
                padding-bottom: 1em;
            }

            section > h1 {
                max-width: 15em;
                width: 100%;
            }

            footer > p {
                text-align: center;
            }

            footer > p > a > img {
                max-width: 15em;
            }

            .md-button + .md-button {
                margin-left: 1em;
            }
        </style>

        <div class="content">

            <div class="col col-12">
                <section class="login box">
                    <h1>Log in</h1>
                    <img src="images/default-avatar.png" alt="user's avatar" title="user's avatar">

                    <form action="" name="login_form" id="login-form" method="post">
                        <div layout layout-sm="column">
                            <md-input-container flex>
                                <label for="username"><i class="fa fa-user"></i> username</label>
                                <input ng-model="user.account.username" type="text" name="username"
                                       placeholder="username" required>

                                <div ng-messages="login_form.username.$error"
                                     ng-messages-include="templates/partials/validation-messages.html">
                                    <div ng-message="required">This field is required.</div>
                                </div>
                            </md-input-container>
                        </div>
                        <div layout layout-sm="column">
                            <md-input-container flex>
                                <label for="password"><i class="fa fa-lock"></i> password</label>
                                <input ng-model="user.account.password" type="password" name="password" required>

                                <div ng-messages="login_form.password.$error"
                                     ng-messages-include="templates/partials/validation-messages.html">
                                    <div ng-message="required">This field is required.</div>
                                </div>
                            </md-input-container>

                        </div>
                        <div layout="row" layout-align="space-between end">
                            <md-button class="md-raised md-accent" href="./rides">Log in</md-button>
                        </div>
                        <div layout="row" layout-align="space-between end">
                            <md-button class="md-raised md-accent" href="./styleguide">Forgot password?</md-button>
                        </div>
                        {{--<p>
                            {!! Html::linkRoute('frontoffice.home', 'LOGIN' , [], ['class' => 'md-button md-raised
                            md-accent md-default-theme']) !!}
                            --}}{{--<input type="submit" name="submit" id="submit" value="Login">--}}{{--
                        </p>--}}
                        <p class="register-link">Nog geen account?</p>
                        <div layout="row" layout-align="space-between end">
                            <md-button class="md-raised md-accent" href="./register">Register</md-button>
                        </div>


                        {{--<p class="register-link">Nog geen account? --}}{{--<a href="">Registreer</a>--}}
                        {{--{!! Html::linkRoute('styleguide.home', 'REGISTER' , [], ['class' => 'md-button md-raised--}}
                        {{--md-accent md-default-theme']) !!}--}}
                        {{--</p>--}}
                    </form>

                </section>
            </div>
        </div>

        {{--		<section layout="row" layout-sm="column" layout-align="center center">

                    {!! Html::linkRoute('backoffice.home' , 'Admin'      , [], ['class' => 'md-button md-raised md-default-theme']) !!}
                    {!! Html::linkRoute('styleguide.home' , 'Style Guide', [], ['class' => 'md-button md-raised md-default-theme']) !!}
                </section>--}}

    </md-content>
    </body>
@stop
