<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah;
use App\KartuKeluarga;
use DB;

class RumahController extends Controller
{
	function index()
	{
		$data = Rumah::where('id_rt',session('id'))->get();
		return view('pages.rumah.index', compact('data'));
	}

	function addKeluarga(Request $request){
		$provinsi = DB::select('select * from wilayah where length(kode) = 2');
		$param['id'] = $request->id;
		$html = view('pages.rumah.kk',['provinsi'=> $provinsi,'param'=>$param])->render();
		return response()->json( array('success' => true, 'html'=>$html,'provinsi'=>$provinsi,'param'=>$param) );
	}

	function getkota(Request $request){
		$wilayah = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 5 AND left(kode,2) = '$request->id'");
		return response()->json( array('success' => true,'wilayah'=>$wilayah) );
	}

	function getkecamatan(Request $request){
		$wilayah = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 8 AND left(kode,5) = '$request->id'");
		return response()->json( array('success' => true,'wilayah'=>$wilayah) );
	}

	function getkelurahan(Request $request){
		$wilayah = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 13 AND left(kode,8) = '$request->id'");
		return response()->json( array('success' => true,'wilayah'=>$wilayah) );
	}

	function create(){
		return view('pages.rumah.create');
	}

	public function store(Request $request) {
		$statement = DB::select("SHOW TABLE STATUS LIKE 'rumah'");
		$id = $statement[0]->Auto_increment;
		$data = new Rumah();
		$data->id_rt = session('id');
		$data->alamat = $request->alamats;
		$data->no_blok = $request->no_blok;
		$data->telp_rumah = $request->telp_rumah;
		$data->status_rumah = $request->status_rumah;
		$data->save();
		if($request->no_kk != null){
			for($i=0;$i<count($request->no_kk);$i++){
				$data = new KartuKeluarga();
				$no = $request->idform[$i];
				$data->no_kk = $request->no_kk[$i];
				$data->id_rumah = $id;
				$data->alamat = $request->alamat[$i];
				$data->kode_pos = $request->kode_pos[$i];
				$data->rtrw = $request->rtrw[$i];
				$data->provinsi = $request->provinsi[$i];
				$data->kota = $request->kota[$i];
				$data->kecamatan = $request->kecamatan[$i];
				$data->kelurahan = $request->kelurahan[$i];
				$data->status_kk = $request->status_kk[$no];
				$data->save();
			}
		}
		return redirect('admin/rumah');
	}

	public function edit($id)
	{
		$data=Rumah::find($id);
		$kartu = DB::select("SELECT * from kartu_keluarga where id_rumah = '$id' and no_kk not in (select no_kk from detail_arsip where id_rumah = '$id') order by id_rumah desc");
		return view('pages.rumah.edit',compact('data','kartu'));
	}

	public function update(Request $request, $id)
	{
		$data = Rumah::where('id_rumah', $id)->first();
		$data->id_rt = session('id');
		$data->alamat = $request->alamats;
		$data->no_blok = $request->no_blok;
		$data->telp_rumah = $request->telp_rumah;
		$data->status_rumah = $request->status_rumah;
		$data->save();
		if($request->no_kk != null){
			for($i=0;$i<count($request->no_kk);$i++){
				$data = new KartuKeluarga();
				$no = $request->idform[$i];
				$data->no_kk = $request->no_kk[$i];
				$data->id_rumah = $id;
				$data->alamat = $request->alamat[$i];
				$data->kode_pos = $request->kode_pos[$i];
				$data->rtrw = $request->rtrw[$i];
				$data->provinsi = $request->provinsi[$i];
				$data->kota = $request->kota[$i];
				$data->kecamatan = $request->kecamatan[$i];
				$data->kelurahan = $request->kelurahan[$i];
				$data->status_kk = $request->status_kk[$no];
				$data->save();
			}
		}
		return redirect('admin/rumah/'.$id.'/edit');
	}

	public function destroy($id){
		$data = Rumah::find($id)->delete();
		if($data){
			return redirect('admin/rumah');
		}

	}

	public function delete(Request $request){
		$datas = KartuKeluarga::find($request->id);
		$data = KartuKeluarga::find($request->id)->delete();
		if($data){
			return redirect('admin/rumah/'.$datas->id_rumah.'/edit');
		}

	}
}
