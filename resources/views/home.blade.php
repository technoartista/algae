<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <title>Algae IoT - CIT ECE</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://algae.technoartista.com/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="http://algae.technoartista.com/starter-template.css" type="text/css" rel="stylesheet" media="screen,projection" />
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo">Algae IoT</a>
                <ul class="right hide-on-med-and-down">
                    <li>
</li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                     @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                @else
                    <li><a href="{{ url(config('laraadmin.adminRoute')) }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br>
                <br>
                <h1 class="header center orange-text">ALGAE IOT</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Algae IoT modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row center">
                    <a href="http://algae.artista.tech/login" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
                </div>
                <br>
                <br>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>
                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>
                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy to work with</h5>
                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="section">
                <h1 id="readings">Daylight Readings</h1>
                <iframe width="100%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/209067/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=100&title=Daylight&type=line&yaxis=Time+%2F+Date"></iframe>
                <div class="row">
</div>
            </div>
            <div id="readings" class="section">
                <h1>Night Readings</h1>
                <iframe width="100%" height="250" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/209067/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=100&title=Night&type=line&xaxis=Night&yaxis=Time+%2F+Date"></iframe>
                <div class="row">
</div>
            </div>
            <div id="readings" class="section">
                <h1>Algae Readings</h1>
                <iframe width="100%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/209067/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=100&title=Algae+Presence&type=line&xaxis=Algae&yaxis=Time+%2F+Date"></iframe>
                <div class="row">
</div>
            </div>
        </div>
        <footer class="page-footer orange">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Algae IoT</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li>
                                <a class="white-text" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li>
                                <a class="white-text" href="#!">Link 1</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 2</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 3</a>
                            </li>
                            <li>
                                <a class="white-text" href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by 
                    <a class="orange-text text-lighten-3" href="http://technoartista.com">CIT ECE</a>
                </div>
            </div>
        </footer>
        <!--  Scripts-->
        <script src="http://algae.technoartista.com/assets/js/jquery.min.js"></script>
        <script src="http://algae.technoartista.com/materialize/js/materialize.js"></script>
        <script src="http://algae.technoartista.com/starter-template.js"></script>
    </body>
</html>
