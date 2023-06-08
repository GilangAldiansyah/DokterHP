<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DOKTER HP</title>
    <link rel="stylesheet" href="../Dashboard/style.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
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
                    <img src="../Dashboard/profile.png" alt="" />
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
                        <a href="sparepart.html">
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
                    <h1>Masukan Data Anda</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="formbold-main-wrapper">
                <div class="formbold">
                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="formbold-mb-5">
                            <label for="merk" class="formbold-form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="masukan username"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="tipe" class="formbold-form-label">Password</label>
                            <input type="password" name="password" id="password" 
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="kerusakan" class="formbold-form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="masukan alamat"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="nama_pelanggan" class="formbold-form-label">Nomor Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" placeholder="masukan nomor handphone"
                                class="formbold-form-input" />
                        </div>
                        <div>
                            <button class="formbold-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="../Dashboard/script.js"></script>
</body>

</html>
