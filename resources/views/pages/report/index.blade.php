@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12 ">
		<div class="row">
			<div class="col-md-12 col-lg-3 ">
				<section class="panel panel-featured-left panel-featured-quaternary">
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
			<header class="panel-heading">
				<h2 class="panel-title">Jumlah Penduduk Berdasarkan Kelamin</h2>
			</header>
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
			<header class="panel-heading">
				<div class="panel-actions">
				</div>
				<h2 class="panel-title">Jumlah Penduduk Berdasarkan Agama</h2>
			</header>
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
			<header class="panel-heading">
				<div class="panel-actions">
				</div>
				<h2 class="panel-title" style="font-size:18" >Jumlah Penduduk Berdasarkan Pendidikan</h2>
			</header>
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
@endsection