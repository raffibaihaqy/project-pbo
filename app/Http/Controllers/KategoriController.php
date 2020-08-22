<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('master.kategori.index', compact('kategori'));
    }

    public function create()
    {
        $kategori = new Kategori();
        return view('master.kategori.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $kategori = Kategori::all();

        $request->validate([
            'nama_kategori' => 'required'
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->action('KategoriController@index')->with('errors','Invalid data');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('master.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect('kategori-produk');
    }

    public function destroy($id)
    {
        Kategori::delete($id);

        return redirect()->back();
    }
}
