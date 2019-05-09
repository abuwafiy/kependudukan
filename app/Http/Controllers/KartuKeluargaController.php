<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah;
use App\KartuKeluarga;
use DB;

class KartuKeluargaController extends Controller
{
    function index(Request $request)
	{
		$data = Rumah::where('id_rumah',$request->id)->get();
		$kartu = DB::select("SELECT * from kartu_keluarga where id_rumah = '$request->id' and no_kk not in (select no_kk from detail_arsip where id_rumah = '$request->id') order by id_rumah desc");
		return view('pages.rumah.index', compact('data'));
	}

	public function store(Request $request) {
		
	}

	public function edit($id)
	{
		$data=Rumah::find($id);
		return view('pages.rumah.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Rumah::where('tipeid', $id)->first();
		$data->tipename = $request->tipename;
		$data->save();
		return redirect('rumah');
	}

	public function destroy($id){
		$datas = KartuKeluarga::find($id);
		$data = KartuKeluarga::find($id)->delete();
		if($data){
			return redirect('admin/rumah'.$datas->id_rumah.'/edit');
		}

	}
}
