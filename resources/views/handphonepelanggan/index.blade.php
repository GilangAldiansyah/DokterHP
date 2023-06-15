@extends('layout.main')

@section('container')
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
