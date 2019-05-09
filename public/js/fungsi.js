$(document).ready(function(){
  var nop = 0;
  $("#addPeng").click(function(){
    nop = nop + 1;
    $.ajax({
      type: "GET",
      url: "addkeluarga/"+nop,
      cache: false,
      success: function(data) {
       $("#lis").append(data.html);
     } 
   });
  });
});

$(document).ready(function(){
  var nop = 0;
  $("#addKK").click(function(){
    nop = nop + 1;
    $.ajax({
      type: "GET",
      url: "../addkeluarga/"+nop,
      cache: false,
      success: function(data) {
       $("#lis").append(data.html);
     } 
   });
  });
});

$('input[type=radio][name=status_rumah]').change(function() {
  if (this.value == 'Isi') {
   $('#kk').show();
 }
 else if (this.value == 'Kosong') {
   $('#kk').hide();
 }
});

function hapusPeng(no) {
  $("#"+no).remove();
}

function changeKotas(id){
  var ids =$('#provinsi'+id).val();
  var string="<option value=''>-- Silahkan Pilih Kota/Kabupaten --</option>";
  $.ajax({
    type: "GET",
    url: baseurl + "/admin/rumah/getkota/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kota"+id).html(string);
      changeKecamatan(id);
      changeKelurahan(id);
    } 
  });
}

function changeKecamatans(id){
  var ids =$('#kota'+id).val();
  var string="<option value=''>-- Silahkan Pilih Kecamatan --</option>";
  $.ajax({
    type: "GET",
    url: baseurl +"/admin/rumah/getkecamatan/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kecamatan"+id).html(string);
      changeKelurahan(id);
    } 
  });
}

function changeKelurahans(id){
  var ids =$('#kecamatan'+id).val();
  var string="<option value=''>-- Silahkan Pilih Kelurahan --</option>";
  $.ajax({
    type: "GET",
    url: baseurl +"/admin/rumah/getkelurahan/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kelurahan"+id).html(string);
    } 
  });
}

$(document).ready(function(){
  var nop = 0;
  $("#addanggota").click(function(){
    nop = nop + 1;
    $.ajax({
      type: "GET",
      url: baseurl +"/admin/kartukeluarga/addanggota/"+nop,
      cache: false,
      success: function(data) {
       $("#lis").append(data.html);
     } 
   });
  });
});

function changeKota(){
  var ids =$('#provinsi').val();
  var string="<option value=''>-- Silahkan Pilih Kota/Kabupaten --</option>";
  $.ajax({
    type: "GET",
    url: baseurl +"/admin/rumah/getkota/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kota").html(string);
      changeKecamatan();
      changeKelurahan();
    } 
  });
}

function changeKecamatan(){
  var ids =$('#kota').val();
  var string="<option value=''>-- Silahkan Pilih Kecamatan --</option>";
  $.ajax({
    type: "GET",
    url: baseurl +"/admin/rumah/getkecamatan/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kecamatan").html(string);
      changeKelurahan();
    } 
  });
}

function changeKelurahan(){
  var ids =$('#kecamatan').val();
  var string="<option value=''>-- Silahkan Pilih Kelurahan --</option>";
  $.ajax({
    type: "GET",
    url: baseurl +"/admin/rumah/getkelurahan/"+ids,
    cache: false,
    success: function(html) {
      for(var i=0;i<html.wilayah.length;i++){
        string = string + "<option value='"+ html.wilayah[i].kode +"'>" + html.wilayah[i].nama +"</option>"
      }
      $("#kelurahan").html(string);
    } 
  });
}

$('#modal_arsip').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  //var recipient = dir + button.data('whatever') +"'";
  var no = button.data('whatever');
  var id = button.data('rumah');

  var modal = $(this)
  $("#niks").val(no);
  $("#no_kks").val(id);
});

$('#modal_arsip1').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  //var recipient = dir + button.data('whatever') +"'";
  var no = button.data('whatever');
  var id = button.data('rumah');

  var modal = $(this)
  $("#no_kks").val(no);
  $("#id_rumahs").val(id);
});