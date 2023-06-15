<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Login/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">

      
      <input type="checkbox" id="flip" />
      <div class="cover">
        <div class="front">
          <img src="../About/assets/img/cpu.jpg" alt="" />
          <div class="text">
            <span class="text-1">Handphone anda rusak?</span>
            <span class="text-2">kami solusinya</span>
          </div>
        </div>
        <div class="back">
          <img class="backImg" src="About/assets/img/cpu.jpg" alt="" />
          <div class="text">
            <span class="text-1"
              >Complete miles of journey <br />
              with one step</span
            >
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form action="/loginPage" method="post">
              @csrf
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Enter your email"required />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Enter your password" required />
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Login" />
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Sign up now</label></div>
              </div>
            </form>
          </div>

          <div class="signup-form">
            <div class="title">Signup</div>
            <form action="/register" method="post">
              @csrf
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" name="name" id="name" placeholder="Enter your name" required />
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Enter your email"   required />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Enter your password" required />
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sign-up" />
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
  </body>
</html>
