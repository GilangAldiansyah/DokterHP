@extends('layout.mainUser')

@section('container')
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-title">
                    <h1>Status Perbaikan</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_handphone as $handphone)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $handphone->merk }}</td>
                                <td>{{ $handphone->tipe }}</td>
                                <td>{{ $handphone->nama_pelanggan }}</td>
                                <td>{{ $handphone->kerusakan }}</td>
                                <td>{{ $handphone->status_perbaikan }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                    <tbody></tbody>
                </table>
            </div>
        </main>
@endsection
