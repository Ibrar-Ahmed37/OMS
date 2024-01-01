@extends('app.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orphanage Management System</title>
    <!--Css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivestyle.css') }}">
    <link rel="stylesheet" href="CSS/lightbox.min.css">
</head>
<body>
    @include('home.navbar')
    @include('home.heroSection')
    @include('home.aboutSection')
    @include('home.ngoSection')
    @include('home.ngoGallerySection')
    @include('home.servicesSection')
    @include('home.contactSection')
    @include('home.footerSection')

    <!-- Cstom js link-->
    <script src="Javascript/script.js"></script>

    <!--js lightbox link-->
    <script src="Javascript/lightbox-plus-jquery.min.js"></script>
</body>

</html>