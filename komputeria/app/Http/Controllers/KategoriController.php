<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $all_kategori = Kategori::withCount('hardwares')->get();
        return view('index',compact('kategori','all_kategori'));
    }
}
