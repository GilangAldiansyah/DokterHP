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
            <a href="{{ route('sparepart.create') }}" class="btn btn-main">Tambahkan</a>
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
                <th>nama</th>
                <th>Stok</th>
                <th>Aksi</th>
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
                <td>
                  <form action="{{ route('sparepart.destroy', $sparepart->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="btn-success">Hapus</button> 
                  </form>
                  <br />
                  <button class="btn-success"><a href="{{ route('sparepart.edit', $sparepart->id)}}" >Edit</a></button>
                </td>
              </tr>
              @endforeach
            </tbody>

            <tbody></tbody>
          </table>
        </div>
      </main>
 @endsection
