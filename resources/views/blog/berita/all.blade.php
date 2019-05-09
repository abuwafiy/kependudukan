@extends('layouts.profile')
@section('content')
<div class="row">
  <div class="col-md-12">
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
       {{ $data->links() }}
     </div>
   </section>
 </div>
</div>
@stop