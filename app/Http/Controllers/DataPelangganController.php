<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class DataPelangganController extends Controller
{
    public function index(): View
    {
        //get data Pelanggan
        $data_pelanggan = Pelanggan::latest()->paginate(5);

        //render view with data Handphone
        return view('datapelanggan.index', compact('data_pelanggan'));
    }
    public function create(): view
    {
        return view('datapelanggan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|min:1',
            'password' => 'required|min:1',
            'alamat' => 'required|min:1',
            'no_hp' => 'required|min:1'
        ]);

        Pelanggan::create([
            'username'      => $request->username,
            'password'    => $request->password,
            'alamat'    => $request->alamat,
            'no_hp'    => $request->no_hp
        ]);

        return redirect()->route('datapelanggan.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
}
