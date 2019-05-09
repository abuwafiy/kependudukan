<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rt;

class rtController extends Controller
{
	function index()
	{
		$data=rt::find(session('id'));
		return view('pages.pengaturan.index', compact('data'));
	}

	function create(){
		return view('pages.prestasi.create');
	}

	public function store(Request $request) {
		if($request->password == $request->cpassword){
			$data = rt::where('id_rt', session('id'))->first();
			$data->nama_rt = $request->nama_rt;
			$data->username =  $request->username;
			$data->password =  $request->password;
			$data->alamat =  $request->alamat;
			$data->email =  $request->email;
			$data->telepon =  $request->telepon;
			$data->deskripsi =  $request->deskripsi;
			$data->save();
			session(['name' => $request->nama_rt]);
			return redirect()->back()->with('msg', 'Sukses! Pengaturan Berhasil Disimpan');
		}else{
			return redirect()->back()->with('msg', 'Gagal! Password Tidak Sama');
		}
		
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
