<div id="{{ $param['id'] }}">
  <hr style="border-top: 1px solid #ccc;">
  <div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">No. KK</label>
        <div class="col-sm-10">
          <input type="number" name="no_kk[]" class="form-control">
          <input type="hidden" name="idform[]" class="form-control" value="{{ $param['id'] }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Status KK</label>
        <div class="col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="status_kk[{{ $param['id'] }}]" value="Asli" checked="">
              Asli
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="status_kk[{{ $param['id'] }}]" value="Pendatang">
              Pendatang
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="alamat[]"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">RT/RW</label>
        <div class="col-sm-10">
          <input type="text" name="rtrw[]" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
        <div class="col-sm-10">
          <select class="form-control" name="provinsi[]" id="provinsi{{ $param['id'] }}" onchange="changeKotas({{ $param['id'] }})">
            <option value="">-- Silahkan Pilih Provinsi --</option>
            @foreach($provinsi as  $p)
            <option  value="{{ $p->kode }}">{{ $p->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kota</label>
        <div class="col-sm-10">
          <select class="form-control" name="kota[]" id="kota{{ $param['id'] }}" onchange="changeKecamatans({{ $param['id'] }})">
            <option value="">-- Silahkan Pilih Kota/Kabupaten --</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Kecamatan</label>
        <div class="col-sm-10">
          <select class="form-control" name="kecamatan[]" id="kecamatan{{ $param['id'] }}" onchange="changeKelurahans({{ $param['id'] }})">
            <option value="">-- Silahkan Pilih Kecamatan --</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" >Kelurahan</label>
        <div class="col-sm-10">
          <select class="form-control" name="kelurahan[]" id="kelurahan{{ $param['id'] }}">
            <option value="">-- Silahkan Pilih Kelurahan --</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kode Pos</label>
        <div class="col-sm-10">
          <input type="number" name="kode_pos[]" class="form-control">
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <button style="cursor:pointer;" class="btn btn-danger" type="button"  onclick='hapusPeng({{ $param['id'] }})'><i class="fa fa-trash"></i> Hapus Form</button>
    </div>
  </div>
</div>