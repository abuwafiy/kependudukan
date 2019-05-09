@extends('layouts.profile')
@section('content')
<section class="panel">
  <div class="row">
    <div class="col-md-12">
      <div class="tabs tabs-primary">
        <ul class="nav nav-tabs ">
          <li class="active">
            <a href="#penduduk" data-toggle="tab"><i class="fa fa-users"></i> Data Penduduk</a>
          </li>
          <li>
            <a href="#rekap" data-toggle="tab"><i class="fa fa-file"></i> Rekap Penduduk</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="penduduk" class="tab-pane active">
            <form method="GET" action="{{ url('warga') }}">
              <div class="form-group">
                <label class="col-md-1 control-label">Filter:</label>
                <div class="col-md-4">
                  <select data-plugin-selectTwo class="form-control populate" name="pendidikan">
                    <optgroup label="Pendidikan">
                      @foreach($listpendidikan as $li)
                      <option @if($li->nama==$combo) selected="selected" @endif >{{$li->nama}}</option>
                      @endforeach
                    </optgroup>
                  </select>
                </div>
                <div class="col-md-2">
                  <input type="submit" name="cari" value="Cari" class="btn btn-primary">
                </div>
              </div>
            </form>
            <br>
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
              <thead>
                <tr>
                  <th width="80px">NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>TTL</th>
                  <th>Kelamin</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Status Kawin</th>
                  <th>Status Keluarga</th>
                </tr>
              </thead>
              <tbody>
                @foreach($penduduk as $d)
                <tr>
                  <td>{{ $d->nik }}</td>
                  <td>{{ $d->nama_lengkap }}</td>
                  <td>{{ $d->alamat }}</td>
                  <td>{{ $d->tempat_lahir }}, {{ $d->tanggal_lahir }}</td>
                  <td>{{ $d->jkel }}</td>
                  <td>{{ $d->agama }}</td>
                  <td>{{ $d->pendidikan }}</td>
                  <td>{{ $d->status_kawin }}</td>
                  <td>{{ $d->status_keluarga }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>




          <div id="rekap" class="tab-pane">
            <div class="row">
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-md-12 col-lg-3 ">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                      <div class="panel-body">
                        <div class="widget-summary">
                          <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-tertiary">
                              <i class="fa fa-home"></i>
                            </div>
                          </div>
                          <div class="widget-summary-col">
                            <div class="summary">
                              <h4 class="title">Jumlah Rumah</h4>
                              <div class="info">
                                <strong class="amount">{{ $jumlah['rumah'][0]->jml }}</strong>
                              </div>
                            </div>
                            <div class="summary-footer">
                              <a class="text-muted text-uppercase">(report)</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-md-12 col-lg-3 ">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                      <div class="panel-body">
                        <div class="widget-summary">
                          <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-tertiary">
                              <i class="fa fa-file"></i>
                            </div>
                          </div>
                          <div class="widget-summary-col">
                            <div class="summary">
                              <h3 class="title">Jumlah Kartu Keluarga</h3>
                              <div class="info">
                                <strong class="amount">{{ $jumlah['kepala'][0]->jml }}</strong>
                              </div>
                            </div>
                            <div class="summary-footer">
                              <a class="text-muted text-uppercase">(REPORT)</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-md-12 col-lg-3 ">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                      <div class="panel-body">
                        <div class="widget-summary">
                          <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-tertiary">
                              <i class="fa fa-users"></i>
                            </div>
                          </div>
                          <div class="widget-summary-col">
                            <div class="summary">
                              <h4 class="title">Jumlah Penduduk</h4>
                              <div class="info">
                                <strong class="amount">{{ $jumlah['penduduk'][0]->jml }}</strong>
                              </div>
                            </div>
                            <div class="summary-footer">
                              <a class="text-muted text-uppercase">(REPORT)</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="col-md-12 col-lg-3 ">
                    <section class="panel panel-featured-left panel-featured-tertiary">
                      <div class="panel-body">
                        <div class="widget-summary">
                          <div class="widget-summary-col widget-summary-col-icon">
                            <div class="summary-icon bg-tertiary">
                              <i class="fa fa-user"></i>
                            </div>
                          </div>
                          <div class="widget-summary-col">
                            <div class="summary">
                              <h4 class="title">Jumlah Kematian</h4>
                              <div class="info">
                                <strong class="amount">{{ $jumlah['kematian'][0]->jml }}</strong>
                              </div>
                            </div>
                            <div class="summary-footer">
                              <a class="text-muted text-uppercase">(REPORT)</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>

                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <section class="panel">
                  <h5>Jumlah Penduduk Berdasarkan Kelamin</h5>
                  <div class="panel-body">
                    <div class="chart chart-md" id="flotPie"></div>
                    <script type="text/javascript">
                      var flotPieData = [
                      @foreach($data as $a){
                        label: "{{ $a->jkel }}",
                        data: [
                        [0, {{ $a->jml }}]
                        ],
                        color: '#2BAAB1'
                      },@endforeach];
                    </script>
                  </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="panel">
                  <h5>Jumlah Penduduk Berdasarkan Agama</h5>
                  <div class="panel-body">
                    <div class="chart chart-md" id="flotPie1"></div>
                    <script type="text/javascript">
                      var flotPieData1 = [
                      @foreach($agama as $a){
                        label: "{{ $a->agama }}",
                        data: [
                        [0, {{ $a->jml }}]
                        ],
                        color: '#2BAAB1'
                      },@endforeach];
                    </script>
                  </div>
                </section>
              </div>
              <div class="col-md-4">
                <section class="panel">
                  <h5>Jumlah Penduduk Berdasarkan Pendidikan</h5>
                  <div class="panel-body">
                    <div class="chart chart-md" id="flotPie2"></div>
                    <script type="text/javascript">

                      var flotPieData2 = [
                      @foreach($pendidikan as $a){
                        label: "{{ $a->pendidikan }}",
                        data: [
                        [0, {{ $a->jml }}]
                        ],
                        color: '#2BAAB1'
                      },@endforeach];
                    </script>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop