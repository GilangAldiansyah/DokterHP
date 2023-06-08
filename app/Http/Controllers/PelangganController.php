<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PelangganController extends Controller
{
    public function index(): View
    {
        //get data Pelanggan
        $data_pelanggan = Pelanggan::latest()->paginate(5);

        //render view with data Handphone
        return view('pelanggan.index', compact('data_pelanggan'));
    }
    public function create(): view
    {
        return view('pelanggan.create');
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

        return redirect()->route('pelanggan.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function edit(string $id): View
    {
        $data_pelanggan = Pelanggan::FindOrFail($id);

        return view('pelanggan.edit', compact('data_pelanggan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|min:1',
            'password' => 'required|min:1',
            'alamat' => 'required|min:1',
            'no_hp' => 'required|min:1'
        ]);

        $data_pelanggan = Pelanggan::FindOrFail($id);

        $data_pelanggan->update( [
            'username'      => $request->username,
            'password'    => $request->password,
            'alamat'    => $request->alamat,
            'no_hp'    => $request->no_hp
        ]);

        return redirect()->route('pelanggan.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function destroy($id): RedirectResponse
    {
    $data_pelanggan = Pelanggan::FindOrFail($id);

    $data_pelanggan ->delete();

    return redirect()->route('pelanggan.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
}
