<html>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name="viewport" content="width=device-width" />

        <!-- Primary Meta Tags -->
        <meta name="title" content="MineSocial.net">
        <meta name="description" content="Catch up with your Minecraft Friends!">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{config('app.url')}}">
        <meta property="og:title" content="MineSocial.net">
        <meta property="og:description" content="Catch up with your Minecraft Friends!">
        <meta property="og:image" content="{{config('app.url')}}/images/capes-meta.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{config('app.url')}}">
        <meta property="twitter:title" content="MineSocial.net">
        <meta property="twitter:description" content="Catch up with your Minecraft Friends!">
        <meta property="twitter:image" content="{{config('app.url')}}/images/capes-meta.jpg">

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