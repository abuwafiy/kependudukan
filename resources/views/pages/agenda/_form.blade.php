<div class="form-group">
  <label class="control-label col-md-2">Nama Agenda</label>
  <div class="col-md-10">
    <input type="text" class="form-control" name="nama_agenda" placeholder="Nama Agenda" value="">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-2">Tanggal</label>
  <div class="col-md-4">
    <input type="date" class="form-control" name="tgl_agenda">
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Mulai</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-clock-o"></i>
      </span>
      <input type="text" name="mulai" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label">Selesai</label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">
        <i class="fa fa-clock-o"></i>
      </span>
      <input type="text" name="selesai" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
    </div>
  </div>
</div>
<div class="form-group">
 <label class="control-label col-md-2">Isi Agenda</label>
 <div class="col-md-10">
  <textarea cols="20" class="summernote" name="isi_agenda" data-plugin-summernote data-plugin-options='{ "height": 200, "codemirror": { "theme": "ambiance" } }'></textarea>                                                
</div>
</div>