<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailAnggota;
use App\Rumah;
use App\KartuAnggota;
use DB;

class DetailAnggotaController extends Controller
{
	function index()
	{
		
	}

	function create(){
		
	}

	public function store(Request $request) {
		
	}

	public function edit($id)
	{
		$data=Rumah::find($id);
		$anggota=DB::select("SELECT id_kartu as id, nama_kartu, (select 'checked' from detail_anggota where id_kartu in (SELECT id from detail_anggota where id_kartu=id and id_rumah=1)) as stat FROM kartu_anggota");
		$kartu = DB::select("SELECT * from kartu_keluarga where id_rumah = '$id' and no_kk not in (select no_kk from detail_arsip where id_rumah = '$id') order by id_rumah desc");
		return view('pages.detailanggota.index',compact('data','kartu','anggota'));
	}

	public function update(Request $request, $id)
	{
		$datas = DetailAnggota::find($id);
		if($datas != null){
			$datas->delete();
		}
		if($request->detail != null){
			for($i=0;$i<count($request->detail);$i++){
				$data = new DetailAnggota();
				$data->id_rumah = $request->id_rumah;
				$data->id_kartu = $request->detail[$i];
				$data->save();
			}
		}
		
		return redirect('admin/detailanggota/'.$request->id_rumah.'/edit');
	}

	public function destroy($id){
		$data = DetailAnggota::find($id)->delete();
		if($data){
			return redirect('admin/detailanggota');
		}

	}
}
