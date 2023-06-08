<div class="sidebar">
    <div class="sidebar-container">
      <div class="brand">
        <h2><i class="las la-cog"></i>Dokter HP</h2>
      </div>

      <div class="sidebar-avartar">
        <div>
          <img src="/Dashboard/profile.png" alt="" />
        </div>
        <div class="avartar-info">
          <div class="avartar-text">
            @auth
            <h4>{{ auth()->user()->name }}</h4>
            <small>{{ auth()->user()->email }}</small>
            @endauth
      
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