@extends('layout.mainUser')

@section('container')
      <header>
        <div class="header-title-wrapper">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>
          <div class="header-title">
            <h1>Data Pengguna</h1>
            <!-- <p>Display analytics about your channer <span class="las la-chart-line"></span></p> -->
          </div>
        </div>
        
        <div class="header-action">
            <button class="btn btn-main">
              <span class="las la-plus"></span>
              <a href="{{ route('pelanggan.create') }}" class="btn btn-main">Tambahkan</a>
            </button>
          </div>
      </header>

      <main>
        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_pelanggan as $pelanggan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelanggan->username }}</td>
                <td>{{ $pelanggan->no_hp }}</td>
                <td>{{ $pelanggan->alamat }}</td>
              </tr>  
              @endforeach
            </tbody>
          </table>
        </div>
      </main>
@endsection
