<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    function index()
	{
		$data = Kategori::get();
		return view('pages.kategori.index', compact('data'));
	}

	function create(){
		return view('pages.kategori.create');
	}

	public function store(Request $request) {
		$data = new Kategori();
		$data->nama_kategori = $request->nama_kategori;
		$data->save();
		return redirect('admin/kategori_berita');
	}

	public function edit($id)
	{
		$data=Kategori::find($id);
		return view('pages.kategori.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Kategori::where('id_kategori_berita', $id)->first();
		$data->nama_kategori = $request->nama_kategori;
		$data->save();
		return redirect('admin/kategori_berita');
	}

	public function destroy($id){
		$data = Kategori::find($id)->delete();
		if($data){
			return redirect('admin/kategori_berita');
		}

	}
}
