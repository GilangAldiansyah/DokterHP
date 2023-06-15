<?php

namespace App\Http\Controllers;

//import model Handphone
use App\Models\Handphone;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HandphoneController extends Controller
{
    public function index(): View
    {
        //get data Handphone
        $data_handphone = Handphone::latest()->paginate(5);

        //render view with data Handphone
        return view('handphone.index', compact('data_handphone'));
    }

    public function indexUser(){
        return view('handphonepelanggan.indexUser');
    }
    public function create(): view
    {
        return view('handphone.create');
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

        return redirect()->route('handphone.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function edit(string $id): View
    {
        $data_handphone = Handphone::FindOrFail($id);

        return view('handphone.edit', compact('data_handphone'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'merk' => 'required|min:1',
            'tipe' => 'required|min:1',
            'kerusakan' => 'required|min:1',
            'nama_pelanggan' => 'required|min:1',
            'status_perbaikan' => 'required|min:1'
        ]);

        $data_handphone = Handphone::FindOrFail($id);

        $data_handphone->update( [
            'merk'      => $request->merk,
            'tipe'    => $request->tipe,
            'kerusakan'    => $request->kerusakan,
            'nama_pelanggan'    => $request->nama_pelanggan,
            'status_perbaikan'    => $request->status_perbaikan
        ]);

        return redirect()->route('handphone.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function destroy($id): RedirectResponse
    {
    $data_handphone = Handphone::FindOrFail($id);

    $data_handphone ->delete();

    return redirect()->route('handphone.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
}
