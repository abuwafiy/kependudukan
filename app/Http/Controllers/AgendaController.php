<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use DB;
use Carbon\Carbon;

class AgendaController extends Controller
{
    function getagenda(){
		$data = Agenda::where('id_profil','1')->take(5)->orderBy('tgl_agenda', 'desc')->get();
		return view('blog.index',compact('data'));
	}

	function readagenda(Request $request){
		$data = Agenda::get();
		return view('blog.agenda.index',compact('data'));
	}

	function index()
	{
		$data = Agenda::get();
		return view('pages.agenda.index', compact('data'));
	}


	function create(){
		return view('pages.agenda.create');
	}

	public function store(Request $request) {
		$data = new Agenda();
		$data->nama_agenda = $request->nama_agenda;
		$data->isi_agenda = $request->isi_agenda;
		$data->tgl_agenda = $request->tgl_agenda;
		$data->mulai = $request->mulai;
		$data->selesai = $request->selesai;
		$data->id_profil = '1';
		$data->save();
		return redirect('admin/agenda');
	}

	public function edit($id)
	{
		$data=Agenda::find($id);
		return view('pages.agenda.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Agenda::where('id_agenda', $id)->first();
		$data->nama_agenda = $request->nama_agenda;
		$data->isi_agenda = $request->isi_agenda;
		$data->tgl_agenda = $request->tgl_agenda;
		$data->mulai = $request->mulai;
		$data->selesai = $request->selesai;
		$data->id_profil = '1';
		$data->save();
		return redirect('admin/agenda');
	}

	public function destroy($id){
		$data = Agenda::find($id)->delete();
		if($data){
			return redirect('admin/agenda');
		}

	}
}
