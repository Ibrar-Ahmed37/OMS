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
    @if(session('user.user_type')!== 'admin')
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
        @include('home.orphanRegistrationForm')
    @else
        <!-- make four tabs of nav that covers the left side of the page and it gets 30% width of the page , the nav items should have 
        Maintain Orphan Details
        Orphan Gallery
        User Request
        Other Ngo Request
        And on the right show respective data linked to these nav items

        Note: THis should be responsive in design for mobile too -->
        
        <div class="container-fluid">
        <!-- Navigation Sidebar -->
        <nav class="sidebar">
            <ul class="nav flex-column nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="maintain-tab" data-toggle="pill" href="#maintainOrphanDetails">Maintain Orphan Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gallery-tab" data-toggle="pill" href="#orphanGallery">Orphan Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="request-tab" data-toggle="pill" href="#userRequest">User Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ngo-tab" data-toggle="pill" href="#otherNgoRequest">Other Ngo Request</a>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <main role="main" class="tab-content">
            <div class="tab-pane fade show active" id="maintainOrphanDetails">
                <h2>Maintain Orphan Details</h2>
                <!-- Content specific to Maintain Orphan Details -->
            </div>
            <div class="tab-pane fade" id="orphanGallery">
                <h2>Orphan Gallery</h2>
                <!-- Content specific to Orphan Gallery -->
            </div>
            <div class="tab-pane fade" id="userRequest">
                <h2>User Request</h2>
                <!-- Content specific to User Request -->
            </div>
            <div class="tab-pane fade" id="otherNgoRequest">
                <h2>Other Ngo Request</h2>
                <!-- Content specific to Other Ngo Request -->
            </div>
        </main>
    </div>

    @endif
    <!-- Cstom js link-->
    <script src="Javascript/script.js"></script>
    <!--js lightbox link-->
    <script src="Javascript/lightbox-plus-jquery.min.js"></script>
</body>

</html>