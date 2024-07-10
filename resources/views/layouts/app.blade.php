<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Digital Marketing</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{ asset('public/frontend') }}/assets/images/logo/kaizen-favicon.png" type="image/x-icon">
    <!-- fontawesome.offline.css.link  -->
     <link rel="stylesheet" href="{{ asset('public/frontend') }}/resources/css/all.min.css">
     <link rel="stylesheet" href="{{ asset('public/frontend') }}/resources/css/fontawesome.min.css">
    <!-- google.material.icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/resources/css/bootstrap.min.css">
    <!-- owl.carousel.css  -->
     <link rel="stylesheet" href="{{ asset('public/frontend') }}/resources/dist/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="{{ asset('public/frontend') }}/resources/dist/assets/owl.theme.default.min.css">
    <!-- custom.style.css -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/style.css">
    <!-- custom.responsive.css  -->
    <link rel="stylesheet" href="{{ asset('public/frontend') }}/assets/css/responsive.css">
</head>
<body id="home" >
    <div class="">

        @include('layouts.front-partial.navbar')
        @yield('content')
        @include('layouts.front-partial.footer')
    


    </div>
    

<!-- jquery & bootstrap js  -->
<script src="{{ asset('public/frontend') }}/resources/js/jquery.min.js"></script>
<script src="{{ asset('public/frontend') }}/resources/js/bootstrap.min.js"></script>
<!-- owl.carousel.js -->
 <script src="{{ asset('public/frontend') }}/resources/dist/owl.carousel.min.js"></script>
<!-- custom.index.js  -->
<script src="{{ asset('public/frontend') }}/assets/js/index.js"></script>
<script>
    
</script>

</body>
</html>