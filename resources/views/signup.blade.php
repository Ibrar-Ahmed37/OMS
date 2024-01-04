<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <title>User Signup</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-5  hero-heading">
                <div class="signup-form">
                    <div class="main-heading">Every new supporter is a fresh journey, bringing hope and love to orphaned
                        lives.</div>
                    <div class="sub-heading">Let's get connected</div>
                </div>
            </div>
            <div class="col-md-6 signup-right-section">
                <div class="signup-form  form-section">
                    <div class="title h5">{{ request('user_type') }} Signup</div>
                    <hr class="mt-2 pt-1 w-25 text-info" />
                    <form action="{{ route('registeruser') }}" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}
                            You can <a href="{{ route('login', ['user_type' =>  request('user_type')]) }}">Login now</a>
                        </div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf
                        <div class="mb-1">
                            <i class="fas fa-user"></i>
                            <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-user"></i>
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                            @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-calendar"></i>
                            <input type="date" name="date_of_birth" class="form-control" required>
                            @error('date_of_birth')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter Your email" class="form-control"
                                required>
                            @error('email')
                            <div class="alert message alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your Password"
                                class="form-control" required>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Enter your Password"
                                class="form-control" required>
                            @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <i class="fas fa-phone"></i>
                            <input type="tel" name="phone_number" placeholder="Enter your Phone No."
                                class="form-control" required>
                            @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="text sign-up-text text-center">Already have an account? <a
                                href="{{ route('login', ['user_type' =>  request('user_type')]) }}">Login now</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eW5oW1qD5MgDgiZ1Y6I4xIzrlEKHWdQGMbYASWdUhpX3enzNuItGgMzN9bsglGTE"
        crossorigin="anonymous"></script>
</body>

</html>