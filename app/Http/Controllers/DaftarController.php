<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;

class DaftarController extends Controller
{
    public function index()
    {
        $daftar = Daftar::all();
        return view('master.daftar.index', compact('daftar'));
    }

    public function create()
    {
        $daftar = new Daftar();
        return view('master.daftar.create', compact('daftar'))->with('errors','Invalid Data.');
    }

    public function store(Request $request)
    {
        $daftar = Daftar::all();

        $request->validate([
            'nama' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $daftar->image = $request->image->getClientOriginalName();
        }

        Daftar::create([
            'nama' => $request->nama,
            'image' => $daftar->image,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => $request->password,
            'hak_akses' => $request->hak_akses
        ]);

        $request->session()->flash('msg', 'User berhasil ditambahkan');

        return redirect()->action('DaftarController@index')->with('errors','Invalid Data');
    }

    public function edit($id)
    {
        $daftar = Daftar::find($id);
        return view('master.daftar.edit', compact('daftar'));
    }

    public function update(Request $request, $id)
    {
        $daftar = Daftar::find($id);

        $request->validate([
            'nama' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $daftar->image)) {
                unlink(public_path('uploads/') . $daftar->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $daftar->image = $request->image->getClientOriginalName();
        }

        $daftar->update([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $request->passsword,
            'hak_akses' => $request->hak_akses,
            'image' => $daftar->image
        ]);

        $request->session()->flash('msg', 'User telah berhasil diupdate');

        return redirect('daftar-user');
    }

    public function destroy($id)
    {
        // Delete the category
        Daftar::destroy($id);

        // Store a message
        session()->flash('msg','User berhasil dihapus');

        // Redirect back
        return redirect()->back();
    }
}
