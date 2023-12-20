<?php

namespace App\Http\Controllers;

use App\Models\LombaMenari;
use Illuminate\Http\Request;

class LombaMenariController extends Controller
{
    public function index()
    {
        $lombamenari = LombaMenari::all();
        return view('lombamenari.index',compact(['lombamenari']));
    }

    public function create()
    {
        return view('lombamenari.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        LombaMenari::create($request->except(['_token','submit']));
        return redirect('/lombamenari');
    }

    public function edit($id)
    {
        $lombamenari = LombaMenari::find($id);
        return view('lombamenari.edit',compact(['lombamenari']));
    }

    public function update($id, Request $request)
    {
        $lombamenari = LombaMenari::find($id);
        $lombamenari->update($request->except(['_token','submit']));
        return redirect('/lombamenari');
    }

    public function destroy($id)
    {
        $lombamenari = LombaMenari::find($id);
        $lombamenari->delete();
        return redirect('/lombamenari');
    }
   
}
