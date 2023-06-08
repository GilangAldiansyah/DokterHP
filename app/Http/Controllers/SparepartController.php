<?php

namespace App\Http\Controllers;

//import model Sparepart
use App\Models\Sparepart;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SparepartController extends Controller
{
    public function index(): View
    {
        //get data Sparepart
        $data_sparepart = Sparepart::latest()->paginate(5);

        //render view with data Sparepart
        return view('sparepart.index', compact('data_sparepart'));
    }

    public function create(): view
    {
        return view('sparepart.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'merk' => 'required|min:1',
            'tipe' => 'required|min:1',
            'nama' => 'required|min:1',
            'stok' => 'required|min:1',
        ]);

        Sparepart::create([
            'merk'      => $request->merk,
            'tipe'    => $request->tipe,
            'nama'    => $request->nama,
            'stok'    => $request->stok,
        ]);

        return redirect()->route('sparepart.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function edit(string $id): View
    {
        $data_sparepart = Sparepart::FindOrFail($id);

        return view('sparepart.edit', compact('data_sparepart'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'merk' => 'required|min:1',
            'tipe' => 'required|min:1',
            'nama' => 'required|min:1',
            'stok' => 'required|min:1',
        ]);

        $data_sparepart = Sparepart::FindOrFail($id);

        $data_sparepart->update( [
            'merk'    => $request->merk,
            'tipe'    => $request->tipe,
            'nama'    => $request->nama,
            'stok'    => $request->stok,
        ]);

        return redirect()->route('sparepart.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
    public function destroy($id): RedirectResponse
    {
    $data_sparepart = Sparepart::FindOrFail($id);

    $data_sparepart ->delete();

    return redirect()->route('sparepart.index')->with(['success'=> 'Data Berhasi Disimpan!'] );
    }
}
