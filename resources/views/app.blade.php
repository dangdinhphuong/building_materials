<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document222</title>

    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900;1000&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    @vite(['resources/js/app.js','resources/css/variable.css'])
</head>
<body>
    <div id="app"></div>
</body>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script><!-- Swiper -->
<script src="{{asset('assets/js/dz.carousel.js')}}"></script><!-- Swiper -->
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('index.js')}}"></script>
</html>
