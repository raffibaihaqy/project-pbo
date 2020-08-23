<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\InventoryProduk;
use PhpOffice\PhpWord\TemplateProcessor;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        $inventory = InventoryProduk::all();

        return view('master.transaksi.index', compact('transaksi','inventory'));
    }

    public function create()
    {
        $transaksi = new Transaksi();
        $inventory = InventoryProduk::all();

        return view('master.transaksi.create', compact('transaksi','inventory'));
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::all();

        $request->validate([
            'kode_transaksi' => 'required'
        ]);

        Transaksi::create([
            'kode_transaksi' => $request->kode_transaksi
        ]);

        return redirect()->action('TransaksiController@semuaTransaksi')->with('error','Invalid data');
    }

    public function destroy($id)
    {
        Transaksi::destroy($id);

        return redirect()->back();
    }

    public function exportWord($id)
    {
        $transaksi = Transaksi::find($id);

        $templateProcessor = new TemplateProcessor('word-template/transaksi.docx');
        $templateProcessor->setValue('kode_transaksi', $transaksi->kode_transaksi);
        $templateProcessor->setValue('created_at', $transaksi->created_at);
        $templateProcessor->saveAs('Transaksi.docx');

        return response()->download('Transaksi.docx')->deleteFileAfterSend(true);
    }

    public function semuaTransaksi()
    {
        $transaksi = Transaksi::all();

        return view('master.transaksi.print', compact('transaksi'));
    }
}
