<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
    	$listkategoripengumuman=KategoriPengumuman::all();
    	return view ('kategori_pengumuman.index',compact('listkategoripengumuman'));
    }

    public function show($id){
    	$KategoriPengumuman=KategoriPengumuman::find($id);
    	return view ('kategori_pengumuman.show',compact('KategoriPengumuman'));
    }

    public function create(){
    	return view ('kategori_pengumuman.create');
    }

    public function store(Request $request){
    	$input= $request->all();
    	KategoriPengumuman::create($input);
    	
        return redirect('/KategoriPengumuman');
    }

}
