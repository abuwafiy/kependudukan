@extends('layouts.app')
@section('content')
<section class="panel">
	<header class="panel-heading">
		<div class="panel-actions">
			<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
		</div>
		<h2 class="panel-title">Arsip Kartu Keluarga</h2>
	</header>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<table id="datatable-default" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No. KK</th>
				            <th>Alamat</th>
				            <th>Kode Pos</th>
				            <th>RT/RW</th>
				            <th>Status</th>  
							<th>Tanggal Arsip/Pindah</th>  
							<th width="80px" class="text-center">Aksi</th>  
						</tr>
					</thead>
					<tbody>
						@foreach($data as $d)
						<tr >
							<td>{{ $d->no_kk }}</td>
							<td>{{ $d->alamat }}</td>
							<td>{{ $d->kode_pos }}</td>
							<td>{{ $d->rtrw }}</td>
							<td>{{ $d->status_kk }}</td>
							<td>{{ $d->tanggal_arsip }}</td>
							<td class="text-center" style="width: 100px;">  
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" style="font-size:10px">
										<i class="fa fa-caret-square-o-down"></i>&nbsp; Pilih Aksi</button>
										<ul class="dropdown-menu dropdown-menu-right" role="menu">
											<li>
												 <a style="cursor:pointer" href="{{ url('admin/detailkeluarga/'.$d->no_kk) }}"><i class="fa fa-pencil"></i> Kelola Anggota Keluarga</a>
											</li>
											<li>
												<a  style="cursor:pointer" href="{{url('admin/rumah/arsip/delete/'.$d->id_arsip)}}" onclick='return confirm("Apakah anda yakin?");'><i class="fa fa-trash"></i> Kembalikan</a> 

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