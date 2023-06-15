<?php

namespace App\Http\Controllers;
//import model Handphone
use App\Models\Handphone;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HandphonePelangganController extends Controller
{
    public function index(): View
    {
        //get data Handphone
        $data_handphone = Handphone::latest()->paginate(5);

        //render view with data Handphone
        return view('handphonepelanggan.index', compact('data_handphone'));
    }
    public function create(): view
    {
        return view('handphonepelanggan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'merk' => 'required|min:1',
            'tipe' => 'required|min:1',
            'kerusakan' => 'required|min:1',
            'nama_pelanggan' => 'required|min:1',
            'status_perbaikan' => 'required|min:1'
        ]);

        Handphone::create([
            'merk'      => $request->merk,
            'tipe'    => $request->tipe,
            'kerusakan'    => $request->kerusakan,
            'nama_pelanggan'    => $request->nama_pelanggan,
            'status_perbaikan'    => $request->status_perbaikan
        ]);

        return redirect()->route('handphonepelanggan.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
}
