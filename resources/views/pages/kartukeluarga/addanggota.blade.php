<div id="{{ $param['id'] }}">
  <hr style="border-top: 1px solid #ccc;">
  <div class="row">
    <div class="col-md-2">
      <button class="btn btn-danger" type="button"  onclick='hapusPeng({{ $param['id'] }})'><i class="fa fa-trash"></i> Hapus Form</button>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>
        <div class="col-sm-10">
          <input type="number" name="nik[]" class="form-control">
          <input type="hidden" name="idform[]" class="form-control" value="{{ $param['id'] }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
        <div class="col-sm-10">
          <input type="text" name="nama_lengkap[]" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="jkel[{{ $param['id'] }}]" value="Laki-Laki" checked="">
              Laki-Laki
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="jkel[{{ $param['id'] }}]" value="Perempuan">
              Perempuan
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>
        <div class="col-sm-10">
         <input type="text" name="tempat_lahir[]" class="form-control">
       </div>
     </div>
     <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>
      <div class="col-sm-3">
        <select class="form-control" name="tanggal[]">
        @php($x = '') @for($i = 1; $i <= 31; $i++) @if($i < 10) @php( $x = '0'.$i) @else @php($x = $i) @endif
         <option>{{ $x }}</option>
         @endfor
       </select>
     </div>
     <div class="col-sm-3">
      <select class="form-control" name="bulan[]">
        @php($x = '') @for($i = 1; $i <= 12; $i++) @if($i < 10) @php( $x = '0'.$i) @else @php($x = $i) @endif
        <option>{{ $x }}</option>
        @endfor
      </select>
    </div>
    <div class="col-sm-4">
      <select class="form-control" name="tahun[]">
        @for($i=date('Y');$i>=1700;$i--)
        <option>{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>
    <div class="col-sm-10">
      <select name="agama[]" class="form-control">
        @foreach($agama as $a)
        <option>{{ $a->nama }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pendidikan</label>
    <div class="col-sm-10">
      <select name="pendidikan[]" class="form-control">
       @foreach($pendidikan as $a)
       <option>{{ $a->nama }}</option>
       @endforeach
     </select>
   </div>
 </div>
</div>
<div class="col-md-5">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" name="pekerjaan[]" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
      <label>
        <input type="radio" name="status_kawin[{{ $param['id'] }}]" value="Kawin" checked="">
        Kawin
      </label>
    </br>
    <label>
      <input type="radio" name="status_kawin[{{ $param['id'] }}]" value="Belum Kawin">
      Belum Kawin
    </label>

  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Status Keluarga</label>
  <div class="col-sm-10">
    <select class="form-control" name="status_keluarga[]">
     @foreach($status as $a)
     <option>{{ $a->nama_keluarga }}</option>
     @endforeach
   </select>
 </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Paspor</label>
  <div class="col-sm-10">
    <input type="text" name="paspor[]" class="form-control">
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Kitas</label>
  <div class="col-sm-10">
    <input type="text" name="kitas[]" class="form-control">
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Ayah</label>
  <div class="col-sm-10">
    <input type="text" name="ayah[]" class="form-control">
  </div>
</div>
<div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Ibu</label>
  <div class="col-sm-10">
    <input type="text" name="ibu[]" class="form-control">
  </div>
</div>
</div>
</div>
</div>