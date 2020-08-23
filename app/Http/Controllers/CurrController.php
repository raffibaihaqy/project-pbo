<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curr;

class CurrController extends Controller
{
    public function index()
    {
        $curr = Curr::all();
        return view('master.curr.index', compact('curr'));
    }

    public function create()
    {
        $curr = new Curr();
        return view('master.curr.create', compact('curr'));
    }

    public function store(Request $request)
    {
        $curr = Curr::all();

        $request->validate([
            'curr' => 'required'
        ]);

        Curr::create([
            'curr' => $request->curr
        ]);

        return redirect()->action('CurrController@index')->with('errors','Invalid data');
    }

    public function edit($id)
    {
        $curr = Curr::find($id);
        return view('master.curr.edit', compact('curr'));
    }

    public function update(Request $request, $id)
    {
        $curr = Curr::find($id);

        $request->validate([
            'curr' => 'required'
        ]);

        $curr->update([
            'curr' => $request->curr
        ]);

        return redirect('curr-produk');
    }

    public function destroy($id)
    {
        Curr::delete($id);

        return redirect()->back();
    }
}
