<?php

namespace App\Http\Controllers;
use App\Models\Hardware;

use App\Models\Kategori;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function create(){
        $kategori = Kategori::get();
        return view('hardware.create',compact('kategori'));
    }

    public function edit($id){
        $hardware = Hardware::find($id);
        return view('hardware.edit',compact('hardware'));
    }

    public function update(Request $request,$id){
        $hardware = Hardware::find($id);
        $hardware->update($request->all());
        return redirect()->route('kategoris.index');
    }

    public function store(Request $request){
        Hardware::create($request->all());
        return redirect()->route('kategoris.index');
    }

    public function destroy($id){
        $hardware = Hardware::findOrFail($id);
        $hardware->delete();
        return redirect()->route('kategoris.index');
    }
}
