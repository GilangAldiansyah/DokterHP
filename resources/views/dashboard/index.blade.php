<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOKTER HP</title>
    <link rel="stylesheet" href="Dashboard/style.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body>
    <input type="checkbox" name="" id="menu-toggle" />
    <div class="overlay">
      <label for="menu-toggle"> </label>
    </div>
    <div class="sidebar">
      <div class="sidebar-container">
        <div class="brand">
          <h2><i class="las la-cog"></i>Dokter HP</h2>
        </div>

        <div class="sidebar-avartar">
          <div>
            <img src="Dashboard/profile.png" alt="" />
          </div>
          <div class="avartar-info">
            <div class="avartar-text">
              <h4>Gilang Aldiansyah</h4>
              <small>089670971581</small>
            </div>
          </div>
        </div>

        <div class="sidebar-menu">
          <ul>
            <li class="nav-item">
              <a href="/dash_board">
                <span class="las la-adjust"></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/handphone">
                <span class="las la-phone"></span>
                <span>Data Handphone</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="sparepart">
                <span class="las la-chart-bar"></span>
                <span>Sparepart</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/pelanggan">
                <span class="las la-user"></span>
                <span>Data Pengguna</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="log-out">
          <a href="../About/index.html"><button class="btn btn-main">Log Out</button></a>
        </div>
      </div>
    </div>

    <div class="main-content">
      <header>
        <div class="header-title-wrapper">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>
          <div class="header-title">
            <h1>DASHBOARD</h1>
          </div>
        </div>
      </header>

      <main>
        <div class="dashboard">
          <h2 class="">Selamat Datang di Dokter HP <span class="las la-chart-line"></span></h2>
          <span>Semoga anda bahagia</span>
        </div>
        <div class="analytics">
          <a href="fastservice.html"
            ><div class="analytic">
              <div class="analytic-icon">
                <span class="las la-user-ninja"></span>
              </div>
              <div class="analytic-info">
                <h2>Fast Service</h2>
              </div>
            </div></a
          >

          <div class="analytic">
            <div class="analytic-icon">
              <span class="las la-phone"></span>
            </div>
            <div class="analytic-info">
              <a href="booking.html"><h2>Booking Service</h2></a>
            </div>
          </div>

          <a href="status.html">
            <div class="analytic">
              <div class="analytic-icon">
                <span class="las la-wrench"></span>
              </div>
              <div class="analytic-info">
                <h2>Status Perbaikan</h2>
              </div>
            </div>
          </a>

          <a href="harga.html"
            ><div class="analytic">
              <div class="analytic-icon">
                <span class="las la-dollar-sign"></span>
              </div>
              <div class="analytic-info">
                <h2>Daftar harga</h2>
              </div>
            </div></a
          >
        </div>
      </main>
    </div>
    <script src="Dashboard/script.js"></script>
  </body>
</html>
