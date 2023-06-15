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
      </header>
      <main>
        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>nama</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data_sparepart as $sparepart)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sparepart->merk }}</td>
                <td>{{ $sparepart->tipe }}</td>
                <td>{{ $sparepart->nama }}</td>
                <td>{{ $sparepart->stok }}</td>
              </tr>
              @endforeach
            </tbody>

            <tbody></tbody>
          </table>
        </div>
      </main>
 @endsection
