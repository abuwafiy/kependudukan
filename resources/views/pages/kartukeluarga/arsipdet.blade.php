@extends('layouts.app')
@section('content')
<section class="panel">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
		</div>
		<h2 class="panel-title">Arsip Anggota Keluarga</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<table id="datatable-default" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Tanggal Arsip</th>
							<th>NIK</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Agama</th> 
							<th>Pendidikan</th> 
							<th>Pekerjaan</th> 
							<th>Perkawinan</th> 
							<th>Keluarga</th> 
							<th width="80px" class="text-center">Aksi</th>  
						</tr>
					</thead>
					<tbody>
						@foreach($data as $d)
						<tr >
							<td>{{ $d->tanggal_arsip }}</td>
							<td>{{ $d->nik }}</td>
							<td>{{ $d->nama_lengkap }}</td>
							<td>{{ $d->jkel }}</td>
							<td>{{ $d->tempat_lahir }}</td>
							<td>{{ $d->tanggal_lahir }}</td>
							<td>{{ $d->agama }}</td>
							<td>{{ $d->pendidikan }}</td>
							<td>{{ $d->pekerjaan }}</td>
							<td>{{ $d->status_kawin }}</td>
							<td>{{ $d->status_keluarga }}</td>
							<td class="text-center" style="width: 100px;">  
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-caret-square-o-down"></i>&nbsp; Pilih Aksi</button>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li>
												<a style="cursor:pointer" href="{{route('kartukeluarga.edit',$d->nik)}}"><i class="fa fa-pencil"></i> Edit
												</a>
											</li>
											<li>
												<a  style="cursor:pointer" href="{{url('admin/detailkeluarga/arsip/delete/'.$d->id_detail_arsip)}}" onclick='return confirm("Apakah anda yakin?");'><i class="fa fa-trash"></i> Kembalikan</a> 

											</li>
										</ul>
									</div>
								</td>
							</tr> 
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	@stop