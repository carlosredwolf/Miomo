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
    <div class="container">
            <footer>
                    <div class="container">
                        <a href="/"><img src="/images/secondary-logo.svg" /></a>
                        <ul>
                            {{-- <li><a href="/terminos">Términos y condiciones</a></li>
                            <li><a href="/privacidad">Política de privacidad</a></li> --}}
                        </ul>
                        <p>Copyright © miomo.net</p>
                        <p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">Contact us at contact@miomo.net</a></p>
                    </div>
                </footer>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/index.js" type="text/javascript" ></script>
	<script src="/js/intereses.js" defer></script>
	<script src="/js/videoScript.js" type="text/javascript" ></script>
	<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</body>
</html>
