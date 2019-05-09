@extends('layouts.app')
@section('content')
{!! Form::model($data,['method' => 'PATCH', 'enctype'=>'multipart/form-data', 'class' => 'form-horizontal', 'route'=>['rumah.update',$data->id_rumah]]) !!}
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!} &nbsp
      <button type="button" onclick="window.location='{{ url('admin/rumah/arsip/'.$data->id_rumah) }}'" class="btn btn-success"><i class="fa fa-archive"></i> Arsip Kartu Keluarga</button>
    </div>

    <h2 class="panel-title">Add Rumah dan Kartu Keluarga</h2>
  </header>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No/Blok</label>
          <div class="col-sm-10">
            <input type="text" name="no_blok" class="form-control" value="{{ $data->no_blok }}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="alamats">{{ $data->alamat }}</textarea>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Telp</label>
          <div class="col-sm-10">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" name="telp_rumah" value="{{ $data->telp_rumah }}">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" name="status_rumah" id="radio1" value="Isi" @if($data->status_rumah=='Isi') checked @endif  >
                Isi
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="status_rumah" id="radio2" value="Kosong" @if($data->status_rumah=='Kosong') checked @endif>
                Kosong
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="panel" id="kk">
 <div class="panel-body">
  <h5>Form Kartu Keluarga</h5 >

  <div class="row">
    <div class="col-md-12">
      <table  class="table table-bordered">
        <thead>
          <tr>
            <th>No. KK</th>
            <th>Alamat</th>
            <th>Kode Pos</th>
            <th>RT/RW</th>
            <th>Status</th>  
            <th class="text-center" width="100">Aksi</th>  
          </tr>
        </thead>
        <tbody>
          @foreach($kartu as $k)
          <tr>
            <td>{{ $k->no_kk }}</td>
            <td>{{ $k->alamat }}</td>
            <td>{{ $k->kode_pos }}</td>
            <td>{{ $k->rtrw }}</td>
            <td>{{ $k->status_kk }}</td>
            <td class="text-center" style="width: 120px;">  
             <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown" style="font-size: 12px;color:grey;background-color: white">
                <i class="fa fa-caret-square-o-down"></i>&nbsp; Pilih Aksi</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                  <li>
                   <a style="cursor:pointer" href="{{ url('admin/detailkeluarga/'.$k->no_kk) }}"><i class="fa fa-pencil"></i> Kelola Anggota Keluarga</a>
                 </li>
                 <li>
                  <a  style="cursor:pointer;" data-toggle="modal" data-target="#modal_arsip1" data-whatever="{{ $k->no_kk }}" data-rumah="{{ $k->id_rumah }}"><i class="fa fa-archive"></i> Pindah dan Arsip</a>
                </li>
                <li>
                  <a  style="cursor:pointer" href="{{ url('admin/rumah/delete/'.$k->no_kk) }}" onclick='return confirm("Apakah anda yakin?");'><i class="fa fa-trash"></i> Hapus</a> 
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
    <a style="margin-top: 15px;" href="#" type="button" id="addKK">
      <i class="fa fa-plus"></i> Tambah Kartu Keluarga
    </a>
    <div id="lis" style="margin-top: 20px"></div>
  </div>
</div>
</div>
</section>
{!! Form::close() !!}

<div class="modal  modal-success" id="modal_arsip1" tabindex="-1" role="dialog">
 <div class="modal-dialog modal-400" style="margin-top: 200.5px;">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="exampleModalLabel">Apakah and yakin Kartu Keluarga ini akan diarsipkan?</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="POST" action="{{route('arsipkeluarga.store')}}">
        @csrf
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">No. KK</label>
          <div class="col-sm-10">
           <input type="text" name="no_kk" id="no_kks" class="form-control" readonly>
           <input type="hidden" name="id_rumah" id="id_rumahs" class="form-control" readonly>
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
              <button type="submit" name="tambah" class="btn btn-primary" style="width: 100px">Iya</button> &nbsp
      <button type="button" class="btn btn-danger" style="width: 100px" data-dismiss="modal">Batal</button>
       </div>
     </div>

    </form>
    
</div>
</div>
</div>
</div>
@endsection