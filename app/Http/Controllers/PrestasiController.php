<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;
use DB;

class PrestasiController extends Controller
{

	function readprestasi(Request $request){
		$data = Prestasi::get();
		return view('blog.prestasi.index',compact('data'));
	}

	function index()
	{
		$data = Prestasi::get();
		return view('pages.prestasi.index', compact('data'));
	}

	function create(){
		return view('pages.prestasi.create');
	}

	public function store(Request $request) {
		$data = new Prestasi();
		$data->nama_prestasi = $request->nama_prestasi;
		$data->nama_kegiatan = $request->nama_kegiatan;
		$data->tgl_prestasi = $request->tgl_prestasi;
		$data->skala = $request->skala;
		$data->penyelenggara = $request->penyelenggara;
		$data->id_profil = '1';
		$data->save();
		return redirect('admin/prestasi');
	}

	public function edit($id)
	{
		$data=Prestasi::find($id);
		return view('pages.prestasi.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Prestasi::where('id_prestasi', $id)->first();
		$data->nama_prestasi = $request->nama_prestasi;
		$data->nama_kegiatan = $request->nama_kegiatan;
		$data->tgl_prestasi = $request->tgl_prestasi;
		$data->skala = $request->skala;
		$data->penyelenggara = $request->penyelenggara;
		$data->id_profil = '1';
		$data->save();
		return redirect('admin/prestasi');
	}

	public function destroy($id){
		$data = Prestasi::find($id)->delete();
		if($data){
			return redirect('admin/prestasi');
		}

	}
}
