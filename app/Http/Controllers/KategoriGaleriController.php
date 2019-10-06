<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
     public function index(){
    	$listkategorigaleri=KategoriGaleri::all();
    	return view ('kategori_galeri.index',compact('listkategorigaleri'));
    }

    public function show($id){
    	$KategoriGaleri=KategoriGaleri::find($id);
    	return view ('kategori_galeri.show',compact('KategoriGaleri'));
    }

    public function create(){
    	return view ('kategori_galeri.create');
    }

    public function store(Request $request){
    	$input= $request->all();
    	KategoriGaleri::create($input);
    	
        return redirect('/KategoriGaleri');
    }
}
}
