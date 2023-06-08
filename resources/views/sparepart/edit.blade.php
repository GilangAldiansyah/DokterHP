@extends('layout.main')

@section('container')
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-title">
                    <h1>Edit Data Sparepart</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="formbold-main-wrapper">
                <div class="formbold">
                    <form action="{{ route('sparepart.update', $data_sparepart->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="formbold-mb-5">
                            <label for="merk" class="formbold-form-label">merk</label>
                            <input type="text" name="merk" id="merk" placeholder="masukan nama merk" value="{{ $data_sparepart->merk }}"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="tipe" class="formbold-form-label">tipe</label>
                            <input type="tipe" name="tipe" id="tipe" placeholder="masukan tipe" value="{{ $data_sparepart->tipe }}"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="kerusakan" class="formbold-form-label">nama</label>
                            <input type="text" name="nama" id="nama" placeholder="masukan nama" value="{{ $data_sparepart->nama }}"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="nama_sparepart" class="formbold-form-label">stok</label> 
                            <input type="text" name="stok" id="stok" placeholder="masukan stok" value="{{ $data_sparepart->stok }}"
                                class="formbold-form-input" />
                        </div>
                        <div>
                            <button class="formbold-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
@endsection
