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
                    <!-- resources/views/your-blade-view.blade.php -->
                    <a href="{{ route('logout') }}" class="btn btn-primary"> logout</a>
                </ul>
            </div>
        </div>
    </nav>
</header>