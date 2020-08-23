<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryProduk;
use App\Kategori;
use App\Curr;
use App\Transaksi;
use PhpOffice\PhpWord\TemplateProcessor;
use DB;

class InventoryProdukController extends Controller
{
    public function index()
    {
        $inventory = InventoryProduk::all();
        return view('master.masterproduk.index', compact('inventory'));
    }

    public function create()
    {
        $inventory = new InventoryProduk();
        $kategori = Kategori::all();
        $curr = Curr::all();

        return view('master.masterproduk.create', compact('inventory','kategori','curr'));
    }

    public function store(Request $request)
    {
        $inventory = InventoryProduk::all();

        $request->validate([
            'nama' => 'required'
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $inventory->image = $request->image->getClientOriginalName();
        }

        InventoryProduk::create([
            'nama' => $request->nama,
            'unit' => $request->unit,
            'curr' => $request->curr,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'disc' => $request->disc,
            'stok' => $request->stok,
            'barcode' => $request->barcode,
            'status' => $request->status,
            'expired' => $request->expired,
            'kategori' => $request->kategori,
            'ket' => $request->ket,
            'image' => $inventory->image
        ]);

        return redirect()->action('InventoryProdukController@index')->with('errors','Invalid data');
    }

    public function edit($id)
    {
        $inventory = InventoryProduk::find($id);
        $kategori = Kategori::all();
        $curr = Curr::all();

        return view('master.masterproduk.edit', compact('inventory','kategori','curr'));
    }

    public function update(Request $request, $id)
    {
        $inventory = InventoryProduk::find($id);

        $request->validate([
            'nama' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $inventory->image)) {
                unlink(public_path('uploads/') . $inventory->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $inventory->image = $request->image->getClientOriginalName();
        }

        $inventory->update([
            'nama' => $request->nama,
            'unit' => $request->unit,
            'curr' => $request->curr,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'disc' => $request->disc,
            'stok' => $request->stok,
            'barcode' => $request->barcode,
            'status' => $request->status,
            'expired' => $request->expired,
            'kategori' => $request->kategori,
            'ket' => $request->ket,
            'image' => $inventory->image
        ]);

        return redirect('inventory-produk');
    }

    public function destroy($id)
    {
        InventoryProduk::delete($id);

        return redirect()->back();
    }

    public function wordExport($id)
    {
        $inventory = InventoryProduk::find($id);
        $templateProcessor = new TemplateProcessor('word-template/produk.docx');
        $templateProcessor->setValue('id', $inventory->id);
        $templateProcessor->setValue('nama', $inventory->nama);
        $templateProcessor->setValue('unit', $inventory->unit);
        $templateProcessor->setValue('curr', $inventory->curr);
        $templateProcessor->setValue('harga_beli', $inventory->harga_jual);
        $templateProcessor->setValue('harga_jual', $inventory->harga_beli);
        $templateProcessor->setValue('disc', $inventory->disc);
        $templateProcessor->setValue('stok', $inventory->stok);
        $templateProcessor->setValue('barcode', $inventory->barcode);
        $templateProcessor->setValue('status', $inventory->status);
        $templateProcessor->setValue('expired', $inventory->expired);
        $templateProcessor->setValue('kategori', $inventory->kategori);
        $templateProcessor->setValue('ket', $inventory->ket);
        $templateProcessor->setValue('image', $inventory->image);
        $fileName = $inventory->nama;
        $templateProcessor->saveAs($fileName . '.docx');

        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function laporan()
    {
        $inventory = InventoryProduk::all();
        return view('master.laporan.index', compact('inventory'));
    }

    public function laporanExport($id)
    {
        $inventory = InventoryProduk::find($id);
        $templateProcessor = new TemplateProcessor('word-template/laporan.docx');
        $templateProcessor->setValue('nama', $inventory->nama);
        $templateProcessor->setValue('unit', $inventory->unit);
        $templateProcessor->setValue('stok', $inventory->stok);
        $templateProcessor->setValue('barcode', $inventory->barcode);
        $templateProcessor->setValue('created_at', $inventory->created_at);
        $templateProcessor->saveAs('Laporan.docx');

        return response()->download('Laporan.docx')->deleteFileAfterSend(true);
    }
}
