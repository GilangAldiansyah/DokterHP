@extends('layout.main')

@section('container')

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
          <a href="/pelanggan"
            ><div class="analytic">
              <div class="analytic-icon">
                <span class="las la-user"></span>
              </div>
              <div class="analytic-info">
                <h2>Data Pelanggan</h2>
              </div>
            </div></a
          >

          <div class="analytic">
            <div class="analytic-icon">
              <span class="las la-phone"></span>
            </div>
            <div class="analytic-info">
              <a href="/handphone"><h2>Data Handphone</h2></a>
            </div>
          </div>

          <a href="/sparepart">
            <div class="analytic">
              <div class="analytic-icon">
                <span class="las la-wrench"></span>
              </div>
              <div class="analytic-info">
                <h2>Data Suku Cadang</h2>
              </div>
            </div>
          </a>

          <a href="/handphone"
            ><div class="analytic">
              <div class="analytic-icon">
                <span class="las la-adjust"></span>
              </div>
              <div class="analytic-info">
                <h2>Status Perbaikan</h2>
              </div>
            </div></a
          >
        </div>
      </main>
@endsection
