@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    @foreach($doc as $do)
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>
    
    <h2 class="panel-title">{{ $do->standartid }} : {{ $do->standartname }}</h2>
    @endforeach
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="5%">Butir</th>
            <th width="40%">Deskriptor</th>
            <th width="50%">Dokumen</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
          <tr>
            <td>{{ $d->no }}</td>
            <td>{{ $d->butir }}</td>
            <td>{{ $d->deskriptor }}</td>
            <td style="background-color: #c0f5f7">
              @foreach($dokumen as $dok)
              @if($dok->detailid == $d->detailid)
              <table class="table table-bordered table-condensed">
                <tr style="background-color: white">
                  <td width="20%">
                    Dokumen
                  </td>
                  <td>
                    {{ $dok->docname }}
                  </td>
                </tr>  
                <tr style="background-color: white">
                  <td width="20%">
                    Jenis
                  </td>
                  <td>
                    {{ $dok->tipename }}
                  </td>
                </tr>    
                <tr style="background-color: white">
                  <td width="20%">
                    Upload
                  </td>
                  <td>
                    {{ $dok->uploaddate }}
                  </td>
                </tr> 
                <tr style="background-color: white">
                  <td width="20%">
                    File
                  </td>
                  <td>
                     <a href="{{ url('dokumen/download/'.$dok->filename) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Download Dokumen"><i class="fa fa-download"></i> Download</a>
                    {{ $dok->filename }}
                  </td>
                </tr>                
              </table>
              @endif
              @endforeach
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
<style type="text/css">
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
  border: none;
}
</style>
@stop