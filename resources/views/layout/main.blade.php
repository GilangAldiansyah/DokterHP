<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOKTER HP</title>
    <link rel="stylesheet" href="/Dashboard/style.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <input type="checkbox" name="" id="menu-toggle" />
    <div class="overlay">
      <label for="menu-toggle"> </label>
    </div>
    @include('navbar.navbarAdmin')

    <div class="main-content">
        @yield('container')
    </div>
    <script src="/Dashboard/script.js"></script>
  </body>
</html>
