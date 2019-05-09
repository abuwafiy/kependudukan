<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use Carbon\Carbon;
use DB;

class GaleriController extends Controller
{
    function readgaleri(Request $request){
		$data = Galeri::get();
		return view('blog.galeri.index',compact('data'));
	}

	function index()
	{
		$data = Galeri::get();
		return view('pages.galeri.index', compact('data'));
	}


	function create(){
		return view('pages.galeri.create');
	}

	public function store(Request $request) {
		$statement = DB::select("SHOW TABLE STATUS LIKE 'galeri'");
		$id = $statement[0]->Auto_increment;

		$data = new Galeri();
		$data->nama_galeri = $request->nama_galeri;
		$data->id_profil = '1';
		$data->tanggal_upload = Carbon::now();

		$dokumen=$request->file('foto_galeri');
		$upload='foto_galeri';
		$filename='Galeri-'.$id.'.'.$dokumen->guessExtension();
		$success=$dokumen->move($upload,$filename);
		$data->foto_galeri = $filename;
		$data->save();
		return redirect('admin/galeri');
	}

	public function edit($id)
	{
		$data=Galeri::find($id);
		return view('pages.galeri.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Galeri::where('id_galeri', $id)->first();
		$data->nama_galeri = $request->nama_galeri;
		$data->nama_kegiatan = $request->nama_kegiatan;
		$data->tgl_galeri = $request->tgl_galeri;
		$data->skala = $request->skala;
		$data->penyelenggara = $request->penyelenggara;
		$data->id_profil = '1';
		$data->save();
		return redirect('admin/galeri');
	}

	public function destroy($id){
		$dataku = Galeri::find($id);
		unlink('foto_galeri/'.$dataku->foto_galeri);
		$data = Galeri::find($id)->delete();
		if($data){
			return redirect('admin/galeri');
		}

	}
}
