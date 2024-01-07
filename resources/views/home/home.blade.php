@extends('app.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Orphanage Management System</title>
    <!--Css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsivestyle.css') }}">
    <link rel="stylesheet" href="CSS/lightbox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <!-- Modal -->


    @include('home.navbar')
    @include('home.heroSection')

    @include('home.aboutSection')
    @include('home.ngoSection')
    @include('home.ngoGallerySection')
    @include('home.servicesSection')
    @include('home.contactSection')
    @include('home.footerSection')
    @include('../donationForm')
    @include('home.guardianRegistrationForm')
    @include('home.userRegistrationForm')
    <!-- Cstom js link-->
    <script src="Javascript/script.js"></script>
    <!--js lightbox link-->
    <script src="Javascript/lightbox-plus-jquery.min.js"></script>
</body>

</html>