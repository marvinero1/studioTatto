<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Club Del Tatuaje Cochabamba</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="https://use.fontawesome.com/43b1b9da3e.js"></script>
</head>

<body>
  <!--   <div id="loader_wrapper">
        <div class="loader"></div>
    </div> -->
    @include('paginalayouts.header')


        @yield('content')

    @include('paginalayouts.footer')
	<script>
		function initMap() {
            var uluru = {
                lat: -17.385092,
                lng: -66.154725


            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                scrollwheel: false,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
	</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLoTMwoX7Q9e6-gEHOpXqeZyRpOsWcbPg&callback=initMap">
</script>
</body>
</html>
