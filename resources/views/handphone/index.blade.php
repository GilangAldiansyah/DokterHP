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
              <a href="index.html">
                <span class="las la-adjust"></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="handphone.html">
                <span class="las la-phone"></span>
                <span>Data Handphone</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="sparepart.html">
                <span class="las la-chart-bar"></span>
                <span>Sparepart</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="pengguna.html">
                <span class="las la-user"></span>
                <span>Data Pengguna</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- <div class="sidebar-card">
          <img src="" alt="" />
          <div>
            <h4>Make Adsense</h4>
            <p>Tambahkan Iklan Anda</p>
          </div>
          <button class="btn btn-main">Create now</button>
        </div> -->
      </div>
    </div>

    <div class="main-content">
      <header>
        <div class="header-title-wrapper">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>
          <div class="header-title">
            <h1>Data Handphone</h1>
            <!-- <p>Display analytics about your channer <span class="las la-chart-line"></span></p> -->
          </div>
        </div>

        <div class="header-action">
          <button class="btn btn-main">
            <span class="las la-plus"></span>
            <a href="{{ route('handphone.create') }}" class="btn btn-main">Tambahkan</a>
          </button>
        </div>
      </header>

      <main>
        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Pemilik</th>
                <th>Kerusakan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Apple</td>
                <td>Iphone 11</td>
                <td>Gilang</td>
                <td>LCD</td>
                <td>Dalam Proses</td>
                <td>
                  <button class="btn-success">Hapus</button> <br />
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Xiaomi</td>
                <td>Redmi Note 11 Pro</td>
                <td>Mahen</td>
                <td>Baterai</td>
                <td>Dalam Proses</td>
                <td>
                  <button class="btn-success">Hapus</button> <br />
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Apple</td>
                <td>Iphone 13 Mini</td>
                <td>Bimo</td>
                <td>Backdoor</td>
                <td>Selesai</td>
                <td>
                  <button class="btn-success">Hapus</button> <br />
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Samsung</td>
                <td>S22</td>
                <td>Syifa</td>
                <td>LCD</td>
                <td>Cancel</td>
                <td>
                  <button class="btn-success">Hapus</button> <br />
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Oppo</td>
                <td>Reno 8</td>
                <td>Khusnun Nisa</td>
                <td>Kamera</td>
                <td>Dalam Proses</td>
                <td>
                <button type="submit" class="btn-success">Hapus</button>
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
            </tbody>

            <tbody></tbody>
          </table>
        </div>
      </main>
    </div>
    <script src="Dashboard/script.js"></script>
  </body>
</html>
