<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/html5reset-1.6.1.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/videoMedia.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="icon" href="/images/favicon@2x.png">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
            <!-- Menu Overlay -->
            <div id="bloqueoDiv"></div>
            <!-- Menu Overlay -->
            <div id="bloqueoDiv"></div>
            <section class="sidenav" id="sidenav">
                    <div onclick="closeNav()" class="close-menu">
                        <img src="/images/cross.svg" />
                    </div>
                    <div class="mini-container">
                        <ul>
                            <li>
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/register#formRegistro">
                                    Register
                                </a>
                            </li>
                            <li>
                                <a href="/#aboutMiomo">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="/quiniela">
                                    Pool
                                </a>
                            </li>
                            <li>
                                <!--<a href="/terminos">
                                    Términos <span>y Condiciones</span>
                                </a>-->
                            </li>
                        </ul>
                    </div>
            </section>
            <section class="nav-left">
                    <a href="/" class="main-logo main-logo-sizeone">
                        <img src="/images/main-logo.svg" />
                    </a>

                    <ul>

                        <li><a href="/register#formRegistro">Register</a></li>
                        <li><a href="/login"><span id="login-btn">Sign in </span></a></li>
                    </ul>
                </section>

                <section class="nav-right">
                    <div class="menu" onclick="openNav()">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </div>

                    <ul>
                        <li><a href="https://www.facebook.com/Miomo2/">Facebook</a></li>
                    </ul>
                </section>
                <section class="earn">
                        <div class="container">
                            <ul>
                                <li>
                                    <h2><span class="tam1" >FIND A WAY TO MAKE SOME MONEY THIS SUMMER!

                                    </h2>
                                </li>
                                <li>
                                    <p>If you register now you can join the World Cup pool and win a price up to:</p>
                                </li>
                                <li>
                                    <h3>1.5 ETH</h3>
                                </li>
                                <li>
                                    <p>Consult terms and conditions of the World Cup pool</p>
                                </li>
                            </ul>
                        </div>
                    </section>

            <section class="quiniela-form">
                    <div class="container">
                            <div class="quiniela-form-info">
                                    <h2>REGISTER
                                        <span>TO THE WORLD CUP POOL</span></h2>
                                        <p>Compete in our World Cup pool to win up to 1.5 ETH.</p>
                                        <p>The only thing you have to do right now is to register, choose who you think the winners will be and that's it. If you win we will add it to your balance.</p>
                                        <p class="tam2">Participate for free! </p>
                                        <p>(for more information consult terms and conditions).</p>
                            </div>
                            <div class="quiniela-form-form" id="formRegistro">
                                @yield('content')

                            </div>
                        </div>
            </section>
            @yield('footer')


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/js/index.js" type="text/javascript" ></script>
	<script src="/js/intereses.js" defer></script>
	<script src="/js/videoScript.js" type="text/javascript" ></script>
	<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</body>
</html>
