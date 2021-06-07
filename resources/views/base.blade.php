<html>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name="viewport" content="width=device-width" />

        <!-- CSS -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <!-- Favicon and title -->
        <link rel="icon" href="/favicon.ico">
    </head>
    <body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-set-preferred-mode-onload="true">
        <noscript>
            <strong>We're sorry but {{config('app.name')}} doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
        </noscript>
        <div id="app"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>