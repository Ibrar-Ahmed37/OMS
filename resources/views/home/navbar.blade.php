<!--Navbar section-->
<header class="header_wrapper fixed-top ">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')  }}">
                <img src="images/logo-1.png" class="img-fluid" alt="logo">
            </a>
            <h2>Orphan Care</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-stream navbar-toggler-icon"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ngo">Our NGO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact now</a>
                    </li>

                    <!-- Show if no user is there -->
                    @if(!session('user'))
                    <li class="nav-item dropdown mt-3 mt-lg-0">
                        <a class="main-btn dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Logins
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('login', ['user_type' => 'user'])}}">User
                                    Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('login', ['user_type' => 'ngoadmin'])}}">NGO
                                    Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('login', ['user_type' => 'admin'])}}">Admin
                                    Login</a></li>
                        </ul>
                    </li>
                    @endif

                    <!-- only shown to the user -->
                    @if(session('user.user_type') === 'user')
                    <li class="nav-item dropdown mt-3 mt-lg-0">
                        <a class="main-btn dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#guardianRegistrationModal">
                                    Guardian Form</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#userRegistrationModal">
                                    User Form</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"> Event </a></li>
                    @endif

                    <!-- only for ngo  -->
                    @if(session('user.user_type') === 'ngoadmin' )
                        <li class="nav-item"> <a class="nav-link" href="{{ route('orphan.registration') }}"> Register Orphan</a></li>
                    @endif

                    <!-- These two are common for ngo and user -->
                    @if(session('user.user_type') === 'ngoadmin' || session('user.user_type') === 'user')
                        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#donationModal">Donate Now</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}"> Complaints & Feedback</a></li>
                    @endif

                    <!-- only shown to the user if session is there  -->
                    @if(session('user'))
                    <li class="nav-item"> <a class="nav-link logout-btn" href="{{ route('logout') }}"> Logout</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>