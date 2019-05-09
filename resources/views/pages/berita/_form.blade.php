<div class="form-group">
  <label class="control-label col-md-2">Judul Berita</label>
  <div class="col-md-10">
    <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita" value="">
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-2">Foto Berita</label>
  <div class="col-md-10">
      <input type="hidden" name="id_berita" value="">
      <input type="file" name="foto_berita" accept="image/*">
      <small>Max Upload 1MB (25cm x 15cm)</small>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-md-2">Kategori Berita</label>
  <div class="col-md-4">
    <select class="form-control" name="id_kategori_berita">
        @foreach($kategori as $k)
        <option value="{{ $k->id_kategori_berita }}">{{ $k->nama_kategori }}</option>
        @endforeach
    </select>
</div>
</div>
<div class="form-group">
     <label class="control-label col-md-2">Isi Berita</label>
  <div class="col-md-10">
      <textarea cols="20" class="summernote" name="isi_berita" data-plugin-summernote data-plugin-options='{ "height": 600, "codemirror": { "theme": "ambiance" } }'></textarea>                                                
  </div>
</div>