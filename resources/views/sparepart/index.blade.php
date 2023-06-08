@extends('layout.main')

@section('container')
      <header>
        <div class="header-title-wrapper">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>
          <div class="header-title">
            <h1>Data Sparepart</h1>
            <!-- <p>Display analytics about your channer <span class="las la-chart-line"></span></p> -->
          </div>
        </div>

        <div class="header-action">
          <button class="btn btn-main">
            <span class="las la-plus"></span>
            Tambahkan
          </button>
        </div>
      </header>
      <main>
        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Sparepart</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_sparepart as $Sparepart)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $handphone->merk }}</td>
                <td>{{ $handphone->tipe }}</td>
                <td>{{ $handphone->nama }}</td>
                <td>{{ $handphone->stok }}</td>
                <td>
                  <button class="btn-success">Hapus</button> <br />
                  <button class="btn-success">Edit</button>
                </td>
              </tr>
              @endforeach
            </tbody>

            <tbody></tbody>
          </table>
        </div>
      </main>
 @endsection
