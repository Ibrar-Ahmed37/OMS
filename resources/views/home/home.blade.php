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
        @include('home.sideBar')
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".nav-link");
            const contentAreas = document.querySelectorAll(".tab-pane");

            tabs.forEach((tab) => {
                if (tab.getAttribute("data-role") === "tab") {
                    tab.addEventListener("click", function (event) {
                        event.preventDefault();

                        tabs.forEach((t) => t.classList.remove("active"));

                        contentAreas.forEach((c) => {
                            c.classList.add("d-none");
                            c.classList.remove("show", "active");
                        });

                        this.classList.add("active");

                        const activeContent = document.querySelector(
                            this.getAttribute("href")
                        );
                        if (activeContent) {
                            activeContent.classList.remove("d-none");
                            activeContent.classList.add("show", "active");
                        }
                    });
                }
            });
        });
    </script>
    <!-- Cstom js link-->
    <script src="Javascript/script.js"></script>
    <!--js lightbox link-->
    <script src="Javascript/lightbox-plus-jquery.min.js"></script>
</body>

</html>