@extends('layouts.profile')
@section('content')

<section class="panel">
	<div class="panel-body">
		<h1 style="text-align:center;">{{ $data->judul_berita }}</h1>
		<div class="text-center" style="margin-bottom: 20px">
			<div style="font-size:12px">Diunggah pada : {{ $data->tgl_berita }} | Kategori : {{ $kategori[0]->nama_kategori }} | Oleh : Admin</div>
			<br>
			<img class="rounded mx-auto d-block" width="70%" src="{{ asset('foto_berita/'.$data->foto_berita) }}">
		</div>
		{!! $data->isi_berita !!}
	</div>
</section>
@stop