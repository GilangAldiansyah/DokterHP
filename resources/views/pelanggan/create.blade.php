@extends('layout.main')

@section('container')
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-title">
                    <h1>Masukan Data Anda</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="formbold-main-wrapper">
                <div class="formbold">
                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf
                        <div class="formbold-mb-5">
                            <label for="merk" class="formbold-form-label">Username</label>
                            <input type="text" name="username" id="username" placeholder="masukan username"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="tipe" class="formbold-form-label">Password</label>
                            <input type="password" name="password" id="password" 
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="kerusakan" class="formbold-form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="masukan alamat"
                                class="formbold-form-input" />
                        </div>
                        <div class="formbold-mb-5">
                            <label for="nama_pelanggan" class="formbold-form-label">Nomor Handphone</label>
                            <input type="text" name="no_hp" id="no_hp" placeholder="masukan nomor handphone"
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
