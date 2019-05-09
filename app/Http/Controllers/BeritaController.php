<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Agenda;
use DB;
use App\rt;
use Carbon\Carbon;

class BeritaController extends Controller
{
	function getberita(){
		$slider = DB::select("SELECT id_slider,gambar, @rn := @rn + 1 AS row FROM slider CROSS JOIN (SELECT @rn := -1) AS var_init_subquery ORDER BY id_slider asc");
		$data = Berita::where('id_profil','1')->take(5)->orderBy('tgl_berita', 'desc')->get();
		$agenda = Agenda::where('id_profil','1')->take(5)->orderBy('tgl_agenda', 'desc')->get();
		return view('blog.index',compact('data','agenda','slider'));
	}

	function readberita(Request $request){
		$data = Berita::find($request->id);
		$kategori = DB::select("select * from kateogri_berita where id_kategori_berita = '$data->id_kategori_berita'");
		return view('blog.berita.index',compact('data','kategori'));
	}

	function allberita(Request $request){
		$data = Berita::where('id_profil','1')->orderBy('tgl_berita', 'desc')->paginate(8);;
		return view('blog.berita.all',compact('data'));
	}

	function index()
	{
		$data = DB::select("select a.*,b.nama_kategori from berita a join kateogri_berita b on a.id_kategori_berita=b.id_kategori_berita where a.id_profil = 1 order by a.tgl_berita desc");
		return view('pages.berita.index', compact('data'));
	}


	function create(){
		$kategori = DB::select("select * from kateogri_berita");
		return view('pages.berita.create',compact('kategori'));
	}

	public function store(Request $request) {
		$statement = DB::select("SHOW TABLE STATUS LIKE 'berita'");
		$id = $statement[0]->Auto_increment;
		$data = new Berita();
		$data->judul_berita = $request->judul_berita;
		$data->isi_berita = $request->isi_berita;
		$data->id_kategori_berita = $request->id_kategori_berita;
		$data->tgl_berita = Carbon::now();
		$data->status_berita = 'Aktif';
		$data->id_profil = '1';

		$dokumen=$request->file('foto_berita');
		$upload='foto_berita';
		$filename=$id.'.'.$dokumen->guessExtension();
		$success=$dokumen->move($upload,$filename);
		$data->foto_berita = $filename;
		$data->save();
		return redirect('admin/berita');
	}

	public function edit($id)
	{
		$data=Berita::find($id);
		$kategori = DB::select("select * from kateogri_berita");
		return view('pages.berita.edit',compact('data','kategori'));
	}

	public function update(Request $request, $id)
	{
		$data = Berita::where('id_berita', $id)->first();
		$data->judul_berita = $request->judul_berita;
		$data->isi_berita = $request->isi_berita;
		$data->id_kategori_berita = $request->id_kategori_berita;
		$data->tgl_berita = Carbon::now();
		$data->status_berita = 'Aktif';
		$data->id_profil = '1';
		if($request->foto_berita != null){
			unlink('foto_berita/'.$data->foto_berita);
			$dokumen=$request->file('foto_berita');
			$upload='foto_berita';
			$filename=$id.'.'.$dokumen->guessExtension();
			$success=$dokumen->move($upload,$filename);
			$data->foto_berita = $filename;
		}
		$data->save();
		return redirect('admin/berita');
	}

	public function destroy($id){
		$data = Berita::find($id);
		unlink('foto_berita/'.$data->foto_berita);
		$data = Berita::find($id)->delete();
		if($data){
			return redirect('admin/berita');
		}

	}

}
