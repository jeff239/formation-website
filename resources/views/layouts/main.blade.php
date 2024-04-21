<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Minior | It Solution HTML Template | Home Page 01</title>
    <!-- Stylesheets -->
    <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet">
    <link href={{ asset("css/style.css") }} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset("css/slick-theme.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("css/slick.css") }}>

    <link rel="shortcut icon" href={{ asset("images/favicon.png") }} type="image/x-icon">
    <link rel="icon" href={{ asset("images/favicon.png") }} type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('features.main.Header')

    @yield('content')

    @include('features.main.Footer', [])


</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src={{ asset("js/jquery.js") }}></script>
<script src={{ asset("js/popper.min.js") }}></script>
<script src={{ asset("js/bootstrap.min.js") }}></script>
<script src={{ asset("js/slick.min.js") }}></script>
<script src={{ asset("js/slick-animation.min.js") }}></script>
<script src={{ asset("js/jquery.fancybox.js") }}></script>
<script src={{ asset("js/jquery-ui.js") }}></script>
<script src={{ asset("js/gsap.min.js") }}></script>
<script src={{ asset("js/ScrollTrigger.min.js") }}></script>
<script src={{ asset("js/splitType.js") }}></script>
<script src={{ asset("js/select2.min.js") }}></script>
<script src={{ asset("js/wow.js") }}></script>
<script src={{ asset("js/appear.js") }}></script>
<script src={{ asset("js/knob.js") }}></script>
<script src={{ asset("js/owl.js") }}></script>
<script src={{ asset("js/script.js") }}></script>
</body>
</html>
