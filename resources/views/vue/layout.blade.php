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



    <title>Jemina Capital Dashboard </title>

{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />--}}

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

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "106211111884379");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v13.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>






<div id="app">
    <App></App>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{--    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>--}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.5/fc-4.0.1/fh-3.2.0/kt-2.6.4/rg-1.1.4/rr-1.2.8/sp-1.4.0/sl-1.3.3/datatables.min.js"></script>


<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Frozen.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Spirited.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Dark.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Kelly.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Material.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Responsive.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Moonrise.js"></script>


<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script src="{{ mix('js/app.js') }}"></script>


</body>
</html>
