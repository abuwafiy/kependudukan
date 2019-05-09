@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'admin/kartukeluarga','files'=>true, 'class' => 'form-horizontal']) !!}
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions" style="width: 100">
     {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}&nbsp
     <button type="button" onclick="window.location='{{ url('admin/detailkeluarga/arsip/'.$data->no_kk) }}'" class="btn btn-success"><i class="fa fa-archive"></i> Arsip Anggota Keluarga</button>
   </div>
   <h2 class="panel-title">Detail Kartu Keluarga</h2>
 </header>
 <div class="panel-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">No. KK</label>
        <div class="col-sm-10">
          <input type="number" name="no_kk" class="form-control" value="{{ $data->no_kk }}" readonly>
          <input type="hidden" name="kk_lama" class="form-control" value="{{ $data->no_kk }}">
          <input type="hidden" name="id_rumah" class="form-control" value="{{ $data->id_rumah }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Status KK</label>
        <div class="col-sm-10">
          <div class="radio">
            <label>
              <input  type="radio" name="status_kk" value="Asli" @if($data->status_kk=='Asli') checked @endif>
              Asli
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="status_kk" value="Pendatang" @if($data->status_kk=='Pendatang') checked @endif>
              Pendatang
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">RT/RW</label>
        <div class="col-sm-10">
          <input type="text" name="rtrw" class="form-control"  value="{{ $data->rtrw }}">
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
        <div class="col-sm-10">
          <select class="form-control" name="provinsi" id="provinsi" onchange="changeKota()">
            <option value="">-- Silahkan Pilih Provinsi --</option>
            @foreach($provinsi as $ko)
            <option value="{{ $ko->kode }}" @if($data->provinsi==$ko->kode) selected @endif>{{ $ko->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kota</label>
        <div class="col-sm-10">
          <select class="form-control" name="kota" id="kota" onchange="changeKecamatan()"> 
            <option value="">-- Silahkan Pilih Kota/Kabupaten --</option>
            @foreach($kota as $ko)
            <option value="{{ $ko->kode }}"  @if($data->kota==$ko->kode) selected @endif>{{ $ko->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Kecamatan</label>
        <div class="col-sm-10">
          <select class="form-control" name="kecamatan" id="kecamatan" onchange="changeKelurahan()">
            <option value="">-- Silahkan Pilih Kecamatan --</option>
            @foreach($kecamatan as $ko)
            <option value="{{ $ko->kode }}"  @if($data->kecamatan==$ko->kode) selected @endif>{{ $ko->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Kelurahan</label>
        <div class="col-sm-10">
          <select class="form-control" name="kelurahan" id="kelurahan">
            <option value="">-- Silahkan Pilih Kelurahan --</option>
            @foreach($kelurahan as $ko)
            <option value="{{ $ko->kode }}"  @if($data->kelurahan==$ko->kode) selected @endif>{{ $ko->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kode Pos</label>
        <div class="col-sm-10">
          <input type="number" name="kode_pos" class="form-control" value="{{ $data->kode_pos }}">
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="panel">
  <div class="panel-body">
    <div class="row">
     <div class="col-md-12">
       <table id="datatable-default" class="table table-bordered table-striped">
        <thead>
          <tr>
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
            <th width="110px" class="text-center">Aksi</th>  
          </tr>
        </thead>
        <tbody>
          @foreach($detail as $det)
          <tr >
            <td>{{ $det->nik }}</td>
            <td>{{ $det->nama_lengkap }}</td>
            <td>{{ $det->jkel }}</td>
            <td>{{ $det->tempat_lahir }}</td>
            <td>{{ $det->tanggal_lahir }}</td>
            <td>{{ $det->agama }}</td>
            <td>{{ $det->pendidikan }}</td>
            <td>{{ $det->pekerjaan }}</td>
            <td>{{ $det->status_kawin }}</td>
            <td>{{ $det->status_keluarga }}</td>
            <td class="text-center">
             <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" style="font-size: 11px;background-color: white;">
                <i class="fa fa-caret-square-o-down"></i>&nbsp; Pilih Aksi</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                  <li>
                   <a href="{{route('kartukeluarga.edit',$det->nik)}}" ><i class="fa fa-pencil"></i> Edit
                   </a>
                 </li>
                 <li>
                  <a  style="cursor:pointer;" data-toggle="modal" data-target="#modal_arsip" data-whatever="{{ $det->nik }}" data-rumah="{{ $det->no_kk }}"><i class="fa fa-archive"></i>Arsip/Meninggal</a>
                </li>
                <li>
                  <a style="cursor:pointer" href="{{url('admin/kartukeluarga/delete/'.$det->nik)}}" onclick='return confirm("Apakah anda yakin?");'><i class="fa fa-trash"></i> Hapus</a> 

                </li>
              </ul>
            </div>
          </td>
        </tr> 
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-md-12">
    <a style="margin-top: 15px;" href="#" type="button" id="addanggota">
      <i class="fa fa-plus"></i> Tambah Anggota Keluarga
    </a>
    <div id="lis" style="margin-top: 20px"></div>
  </div>
</div>
</div>
</section>
{!! Form::close() !!}

<div class="modal" id="modal_arsip" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-400" style="margin-top: 200.5px;">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="exampleModalLabel">Apakah anda yakin mengarsipkan anggota keluarga?</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="POST" action="{{ route('arsipdetkeluarga.store') }}">
        @csrf
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>
          <div class="col-sm-10">
           <input type="text" name="nik" id="niks" class="form-control" readonly>
           <input type="hidden" name="no_kk" id="no_kks" class="form-control" readonly>
         </div>
       </div>
       <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Arsip</label>
        <div class="col-sm-10">
          <input type="date" name="tanggal_arsip" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
         <textarea class="form-control" name="keterangan"></textarea>
       </div>
     </div>
     <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <button type="submit" name="tambahKK" class="btn btn-primary" style="width: 100px; margin-right: 10px">Iya</button>
           <button type="button" class="btn btn-warning" style="width: 100px" data-dismiss="modal">Batal</button>
       </div>
     </div>
    
    </form>
</div>
</div>
</div>
</div>
@stop