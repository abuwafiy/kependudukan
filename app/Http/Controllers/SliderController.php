<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller
{
    function index()
	{
		$data = Slider::get();
		return view('pages.slider.index', compact('data'));
	}

	function create(){
		return view('pages.slider.create');
	}

	public function store(Request $request) {
		$statement = DB::select("SHOW TABLE STATUS LIKE 'slider'");
		$id = $statement[0]->Auto_increment;

		$data = new Slider();
		$data->id_rt = session('id');

		$dokumen=$request->file('gambar');
		$upload='foto_slider';
		$filename='Slider-'.$id.'.'.$dokumen->guessExtension();
		$success=$dokumen->move($upload,$filename);
		$data->gambar = $filename;
		$data->save();
		return redirect('admin/slider');
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
		$dataku = Slider::find($id);
		unlink('foto_slider/'.$dataku->gambar);
		$data = Slider::find($id)->delete();
		if($data){
			return redirect('admin/slider');
		}

	}
}
