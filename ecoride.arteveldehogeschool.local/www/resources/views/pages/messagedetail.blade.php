@extends('layouts.frontoffice')

@section('content')
    <md-content class="md-padding view ritten-detail" layout="column" layout-align="center center">
        <div class="responsive">
            <h1>Jeroen Knockaert</h1>

            <div class="detail-message">
                <div class="single-detail-message">


                    <section class="message-screen">
                        <div class="message-content bubble left">
                            <div class="user-profile-picture left">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble right">
                            <div class="user-profile-picture right">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box left">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrfffffrgfrgr gr grgrgrg rgrgrgr
                                    grgrgrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble left">
                            <div class="user-profile-picture left">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble right">
                            <div class="user-profile-picture right">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box left">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>

                            <div class="message-box left">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble left">
                            <div class="user-profile-picture left">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble right">
                            <div class="user-profile-picture right">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box left">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>

                            <div class="message-box left">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->

                        <div class="message-content bubble left">
                            <div class="user-profile-picture left">
                                <img src="./images/default-avatar.png" alt="user's avatar" title="user's avatar">
                            </div>
                            <div class="message-box">
                                <p>ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg
                                    ehjrbgfrgkjrngkjerg erjgggh rtjgrbthhrjrg ehjrbgfrgkjrngkjerg erjgggh
                                    rtjgrbthhrjrg</p>
                            </div>
                        </div>
                        <!-- end bubble -->
                    </section>
                    <form id="message-form">
                        <div class="col-11 left">
                            <md-input-container flex class="message-to">
                                <input ng-model="text.message" type="text" name="message" id="message"
                                       placeholder="Type your message">
                            </md-input-container>
                        </div>
                        {{--<input type="text" name="message" id="message">--}}
                        <div class="col-1 right">
                            <md-button flex class="md-raised md-accent" href="" value="send">Send</md-button>
                        </div>

                        {{--<input type="submit" name="button" id="button" value="Send">--}}
                    </form>
                </div>
                <!-- single detail message -->
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end col-12 -->
    </md-content>
@stop