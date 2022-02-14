<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta name="user-id" content="{{ Auth::user()->id }}">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />



    <title>DeedScan</title>

    <style>
        html {
            scroll-behavior: smooth;
        }
        * {
            scroll-behavior: smooth;
        }
    </style>

    <script src="https://kit.fontawesome.com/fc66d9dbd5.js" crossorigin="anonymous"></script>
</head>
<body>

<div id="app">
    <App></App>
</div>

<script src="{{ mix('js/app.js') }}"></script>


</body>
</html>
