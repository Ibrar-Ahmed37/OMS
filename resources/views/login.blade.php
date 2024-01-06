<!DOCTYPE html>
<html lang="en">

<head>
  <!--bootstrap link-->
  <!--CSS link-->
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>User Login</title>
</head>

<body>
  <div class="container overlay">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/loginpic1.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new supporter is a fresh journey,<br> bringing hope and love to orphaned
            lives.</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/loginpic2.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    

    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">{{ request('user_type') }} Login</div>
          <form action="{{ route('validateLogin') }}">
            @if(Session::has('fail'))
            <div class="mt-4 text-large alert alert-danger">{{ Session::get('fail') }} or
              <a href="{{ route('signup', ['user_type' =>  request('user_type')]) }}">Sigup now</a>
            </div>
            @endif
            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              @error('email')
              <div>{{ $message }}</div>
              @enderror
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" value="{{ old('email') }}"
                  required>
              </div>
              @error('password')
              <div>{{ $message }}</div>
              @enderror
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" >
              </div>
              <div class="text sign-up-text">Don't have an account? <a
                  href="{{ route('signup', ['user_type' =>  request('user_type')]) }}">Sigup now</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>