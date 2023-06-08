@extends('layout.main')

@section('container')
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-title">
                    <h1>Edit Data Handphone
                    </h1>
                </div>
            </div>
        </header>

        <main>
           <form action="{{ route('handphone.update', $data_handphone->id) }}" method="POST">
                        @csrf
                        @method('PUT')
            <div class="formbold-mb-5">
                <label for="merk" class="formbold-form-label">Merk</label>
                <input type="text" name="merk" id="merk" placeholder="merk" value="{{ $data_handphone->merk }}"
                    class="formbold-form-input" />
            </div>
            <div class="formbold-mb-5">
                <label for="tipe" class="formbold-form-label">Tipe</label>
                <input type="text" name="tipe" id="tipe" placeholder="Masukan Nomor Telepon Anda" value="{{ $data_handphone->tipe }}"
                    class="formbold-form-input" />
            </div>
            <div class="formbold-mb-5">
                <label for="kerusakan" class="formbold-form-label">Kerusakan</label>
                <input type="text" name="kerusakan" id="kerusakan" placeholder="kerusakan" value="{{ $data_handphone->kerusakan }}"
                    class="formbold-form-input" />
            </div>
            <div class="formbold-mb-5">
                <label for="nama_pelanggan" class="formbold-form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="nama" value="{{ $data_handphone->nama_pelanggan }}"
                    class="formbold-form-input" />
            </div>
            <div class="formbold-mb-5">
                <label for="status_perbaikan" class="formbold-form-label">Status Perbaikan</label>
                <select name="status_perbaikan" id="status_perbaikan" class="formbold-form-input" value="{{ $data_handphone->status_perbaikan }}">
                    <option value="proses">Dalam Proses</option>
                    <option value="cancel">Cancel</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div>
                <button class="formbold-btn">Submit</button>
            </div>
                    </form>
                </div>
            </div>
        </main>
@endsection
