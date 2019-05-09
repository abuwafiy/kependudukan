<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KartuAnggota;

class KartuAnggotaController extends Controller
{
    function index()
	{
		$data = KartuAnggota::get();
		return view('pages.kartuanggota.index', compact('data'));
	}

	function create(){
		return view('pages.kartuanggota.create');
	}

	public function store(Request $request) {
		$data = new KartuAnggota();
		$data->nama_kartu = $request->nama_kartu;
		$data->save();
		return redirect('admin/kartuanggota');
	}

	public function edit($id)
	{
		$data=KartuAnggota::find($id);
		return view('pages.kartuanggota.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = KartuAnggota::where('id_kartu', $id)->first();
		$data->nama_kartu = $request->nama_kartu;
		$data->save();
		return redirect('admin/kartuanggota');
	}

	public function destroy($id){
		$data = KartuAnggota::find($id)->delete();
		if($data){
			return redirect('admin/kartuanggota');
		}

	}
}
