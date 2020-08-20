<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformasiToko;

class InformasiTokoController extends Controller
{
    public function index()
    {
        $informasi = InformasiToko::all();
        return view('master.informasi.index', compact('informasi'));
    }

    public function create()
    {
        $informasi = new InformasiToko();
        return view('master.informasi.create', compact('informasi'))->with('errors','Invalid Data.');
    }

    public function store(Request $request)
    {
        $informasi = InformasiToko::all();

        $request->validate([
            'nama_instansi' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $informasi->image = $request->image->getClientOriginalName();
        }

        InformasiToko::create([
            'nama_instansi' => $request->nama_instansi,
            'image' => $informasi->image,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'kode_pos' => $request->kode_pos,
            'deskripsi' => $request->deskripsi
        ]);

        $request->session()->flash('msg', 'Informasi toko berhasil ditambahkan');

        return redirect()->action('InformasiTokoController@index')->with('errors','Invalid Data');
    }

    public function edit($id)
    {
        $informasi = InformasiToko::find($id);
        return view('master.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $informasi = InformasiToko::find($id);

        $request->validate([
            'nama_instansi' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $informasi->image)) {
                unlink(public_path('uploads/') . $informasi->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $informasi->image = $request->image->getClientOriginalName();
        }

        $informasi->update([
            'nama_instansi' => $request->nama_instansi,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'deskripsi' => $request->deskripsi,
            'image' => $informasi->image
        ]);

        $request->session()->flash('msg', 'Informasi toko berhasil diupdate');

        return redirect('informasi-toko');
    }

    public function destroy($id)
    {
        // Delete the category
        InformasiToko::destroy($id);

        // Store a message
        session()->flash('msg','Informasi toko berhasil dihapus');

        // Redirect back
        return redirect()->back();
    }
}
