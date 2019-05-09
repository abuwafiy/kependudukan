<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KartuKeluarga;
use App\Detailkk;
use App\Rumah;
use DB;

class DetailkkController extends Controller
{
	function index()
	{
		$data = KartuKeluarga::find($request->id);
		$detail =  DB::select("SELECT * from detail_kk where no_kk = $request->no_kk' and nik not in (select nik from detail_arsip_det_kk where no_kk = '$request->no_kk')");
		$provinsi = $wilayah = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 2");
		$kota = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 5 AND left(kode,2) = '$data->provinsi'");
		$kecamatan = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 8 AND left(kode,5) = '$data->kota'");
		$kelurahan = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 13 AND left(kode,8) = '$data->kecamatan'");
		return view('pages.kartukeluarga.index', compact('data','detail','provinsi','kota','kecamatan','kelurahan'));
	}

	function get(Request $request)
	{
		$data = KartuKeluarga::find($request->id);
		$detail = DB::select("SELECT * from detail_kk where no_kk = '$request->id' AND nik not in (select nik from detail_arsip_det_kk where no_kk = '$request->id')");
		$provinsi = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 2");
		$kota = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 5 AND left(kode,2) = '$data->provinsi'");
		$kecamatan = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 8 AND left(kode,5) = '$data->kota'");
		$kelurahan = DB::select("SELECT * FROM WILAYAH WHERE LENGTH(KODE) = 13 AND left(kode,8) = '$data->kecamatan'");
		return view('pages.kartukeluarga.index', compact('data','detail','provinsi','kota','kecamatan','kelurahan'));
	}

	function addAnggota(Request $request){
		$agama = DB::select('select * from agama');
		$pendidikan = DB::select('select * from pendidikan');
		$status = DB::select('select * from status_keluarga');
		$param['id'] = $request->id;
		$html = view('pages.kartukeluarga.addanggota',['agama'=> $agama,'pendidikan'=> $pendidikan,'status'=> $status,'param'=>$param])->render();
		return response()->json( array('success' => true, 'html'=>$html,'param'=>$param) );
	}

	function create(){
		return view('pages.rumah.create');
	}

	public function store(Request $request) {
		$statement = DB::select("SHOW TABLE STATUS LIKE 'rumah'");
		$id = $statement[0]->Auto_increment;
		$data = KartuKeluarga::where('no_kk', $request->kk_lama)->first();
		$data->no_kk = $request->no_kk;
		$data->id_rumah = $request->id_rumah;
		$data->alamat = $request->alamat;
		$data->kode_pos = $request->kode_pos;
		$data->rtrw = $request->rtrw;
		$data->provinsi = $request->provinsi;
		$data->kota = $request->kota;
		$data->kecamatan = $request->kecamatan;
		$data->kelurahan = $request->kelurahan;
		$data->status_kk = $request->status_kk;
		$data->save();
		if($request->nik != null){
			for($i=0;$i<count($request->nik);$i++){
				$data = new Detailkk();
				$no = $request->idform[$i];
				$data->no_kk = $request->no_kk;
				$data->nik = $request->nik[$i];
				$data->nama_lengkap = $request->nama_lengkap[$i];
				$data->jkel = $request->jkel[$no];
				$data->tempat_lahir = $request->tempat_lahir[$i];
				$tanggal = $request->tahun[$i].'-'.$request->bulan[$i].'-'.$request->tanggal[$i];
				$data->tanggal_lahir = $tanggal;
				$data->agama = $request->agama[$i];
				$data->pendidikan = $request->pendidikan[$i];
				$data->pekerjaan = $request->pekerjaan[$i];
				$data->status_kawin = $request->status_kawin[$no];
				$data->status_keluarga = $request->status_keluarga[$i];
				$data->paspor = $request->paspor[$i];
				$data->kitas = $request->kitas[$i];
				$data->ayah = $request->ayah[$i];
				$data->ibu = $request->ibu[$i];
				$data->save();
			}
		}
		return redirect('admin/detailkeluarga/'.$request->no_kk);
	}

	public function edit($id,Request $request)
	{
		$data = Detailkk::where('nik',$id)->get();
		$agama = DB::select('select * from agama');
		$pendidikan = DB::select('select * from pendidikan');
		$status = DB::select('select * from status_keluarga');
		return view('pages.kartukeluarga.edit',compact('data','agama','pendidikan','status'));
	}

	public function update(Request $request, $id)
	{
		echo $id;
		$data = Detailkk::where('nik', $id)->first();
		$data->no_kk = $request->no_kk;
		$data->nik = $request->nik;
		$data->nama_lengkap = $request->nama_lengkap;
		$data->jkel = $request->jkel;
		$data->tempat_lahir = $request->tempat_lahir;
		$tanggal = $request->tahun.'-'.$request->bulan.'-'.$request->tanggal;
		$data->tanggal_lahir = $tanggal;
		$data->agama = $request->agama;
		$data->pendidikan = $request->pendidikan;
		$data->pekerjaan = $request->pekerjaan;
		$data->status_kawin = $request->status_kawin;
		$data->status_keluarga = $request->status_keluarga;
		$data->paspor = $request->paspor;
		$data->kitas = $request->kitas;
		$data->ayah = $request->ayah;
		$data->ibu = $request->ibu;
		$data->save();
		return redirect('admin/detailkeluarga/'.$request->no_kk);
	}

	public function destroy($id){
		$data = Detailkk::find($id)->delete();
		if($data){
			return redirect('admin/detailkeluarga/'.$data->no_kk);
		}

	}
	public function delete(Request $request){
		$datas = Detailkk::find($request->id);
		$data = Detailkk::find($request->id)->delete();
		if($data){
			return redirect('admin/detailkeluarga/'.$datas->no_kk);
		}
	}
}
