@extends('layouts.profile')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-bottom: 10px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach($slider as $s)
    <li data-target="#carousel-example-generic" data-slide-to="{{ $s->row }}" @if($s->row==0) class="active" @endif></li>
    @endforeach
  </ol>
  <div class="carousel-inner" role="listbox">
    @foreach($slider as $s)
    <div class="item @if($s->row==0) active @endif">
      <img src="{{ asset('foto_slider/'.$s->gambar) }}" style="width:100%">
      <div class="carousel-caption">
      </div>
    </div>
    @endforeach
 </div>
 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<div class="row">
  <div class="col-md-8">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions">
        </div>

        <h2 class="panel-title"> Berita Terbaru</h2>
      </header>
      <div class="panel-body">
        <ul class="simple-post-list">
          @foreach($data as $d)
          <li>
            <div class="post-image">
              <div class="img-thumbnail">
                <a href="{{url('berita/'.$d->id_berita.'/'.$d->judul_berita)}}">
                  <img height="80px" width="80px" src="{{ asset('foto_berita/'.$d->foto_berita) }}" alt="">
                </a>
              </div>
            </div>
            <div class="post-info">
              <a href="{{url('berita/'.$d->id_berita.'/'.str_replace(' ','-',$d->judul_berita))}}">{{ $d->judul_berita }}</a>
              <div class="post-meta">
               {{ $d->tgl_berita }}
             </div>
             {!! substr($d->isi_berita,0,200) !!}
           </div> 
         </li>
         @endforeach
       </ul>
     </div>
   </section>
 </div>
 <div class="col-md-4">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
      </div>

      <h2 class="panel-title"> Agenda Terbaru</h2>
    </header>
    <div class="panel-body">
      <table class="table table-stripped table-bordered" id="datatable">
        <thead>
          <th>Agenda</th>
          <th width="100px">Tanggal</th>
          <th width="100px">Jam</th>
        </thead>
        <tbody>
          @foreach($agenda as $a)
          <tr>
            <td>{{ $a->nama_agenda }}</td>
            <td>{{ $a->tgl_agenda }}</td>
            <td>{{ $a->mulai }}-{{ $a->selesai }}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</div>
</div>
@stop