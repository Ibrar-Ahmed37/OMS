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
    <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donateModalLabel">Donate Now</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your donation form goes here -->
                    <form>
                        <!-- Form fields (amount, name, description, etc.) go here -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount" required>
                        </div>
                        <!-- Add other form fields as needed -->

                        <button type="submit" class="btn btn-primary">Submit Donation</button>
                    </form>
                </div>
                <!-- Add other modal components as needed -->
            </div>
        </div>
    </div>

    @include('home.navbar')
    @include('home.heroSection')
    <div class="text-center">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#donateModal">
            Donate
        </button>
    </div>
    @if(session('user.user_type') === 'admin')
    <h1>Welcome, Admin!</h1>
    {{-- Add admin-specific content here --}}
    @elseif(session('user.user_type') === 'ngoadmin')
    <h1>Welcome, NGO Admin!</h1>
    {{-- Add NGO admin-specific content here --}}
    @else
    <h1>Welcome, User!</h1>
    {{-- Add default user-specific content here --}}
    @endif

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