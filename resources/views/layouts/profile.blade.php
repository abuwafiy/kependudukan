<!doctype html>
<html class="fixed  sidebar-light">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">
	<title>E-Kependudukan</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/summernote.css') }}"" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/codemirror/lib/codemirror.css') }}"" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/codemirror/theme/monokai.css') }}"" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">
	<link rel="manifest" href="{{ asset('manifest.json') }}">
	<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
	<style type="text/css">
	.head2{
		background-color: #0088cc;
		padding-top:65px;
	}
	.panel-body{
		background-color: white;
	}
	body{
		color: #33353F;
		font-weight: 500;
	}
	button{
		font-family: 'Oswald', sans-serif !important;
	}
	.item {
		width: 100%;
	}
	.carousel-inner{
		width:100%;
		max-height: 200px !important;
	}
	
	.footers {
		position: relative;
		height: 100%;
		right: 0;
		bottom: 0;
		left: 0;
		padding: 1rem;
		background-color: #417eaf;
		text-align: right;
		color:white;
		bottom:0;
		font-size: 12px;

	}
	.container{
		height: 100%;
		min-height: 100vh; /* will cover the 100% of viewport */
		overflow: hidden;
	}
</style>
</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header header-nav-menu" >
			
			<div class="logo-container">
				<a href="/" class="logo" class="title" style="font-weight: 600">
					<img src="{{ url('gambar/surabya.png') }}" height="35" alt="Porto Admin" />
					{{ $rt->nama_rt }}
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
			<div class="header-nav collapse">
				<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
					<nav>
						<ul class="nav nav-pills" id="mainNav">
							<li class="">
								<a href="{{ url('/') }}">
									Beranda
								</a>    
							</li>
							<li class="">
								<a href="{{ url('/berita') }}">
									Berita
								</a>    
							</li>
							<li class="">
								<a href="{{ url('/galeri') }}">
									Galeri
								</a>    
							</li>
							<li class="">
								<a href="{{ url('/prestasi') }}">
									Prestasi
								</a>    
							</li>
							<li class="">
								<a href="{{ url('agenda') }}">
									Agenda
								</a>    
							</li>
							<li class="">
								<a href="{{ url('warga') }}">
									<i class="fa fa-user"></i> Info Warga
								</a>    
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="head2"></div>
		<!-- start: page -->
		<div class="container"  style="padding-top:20px;">
			@yield('content')	
		</div>
		<footer class="footers">
			<div class="row">
				<div class="col-md-6">
					<ul class="nav nav-pills" id="mainNav" >
						<li class="">
							<a href="{{ url('/') }}" style="color: white">
								BERANDA
							</a>    
						</li>
						<li class="">
							<a href="{{ url('/berita') }}" style="color: white"> 
								BERITA
							</a>    
						</li>
						<li class="">
							<a href="{{ url('/galeri') }}" style="color: white">
								GALERI
							</a>    
						</li>
						<li class="">
							<a href="{{ url('/prestasi') }}" style="color: white">
								PRESTASI
							</a>    
						</li>
						<li class="">
							<a href="{{ url('agenda') }}" style="color: white">
								AGENDA
							</a>    
						</li>
					</ul>
				</div>
				<div class="col-md-6" style="float: right;margin-top: 10px">
					<div class="col-md-10">
						<div class="col-md-12" style="margin-left: 10px;margin-top:0px;color: white">Copyright @ 2018 <strong>oleh Tutut Wurijanto</strong>
						</div>
					</br>
					<label >
						"{{ $rt->deskripsi}}"</br>
						{{ $rt->alamat}}</br>
						{{ $rt->telepon}}</br>
						{{ $rt->email}}</br>

					</label>
				</div>
				<div class="col-md-2">
					<img  style="margin-right: 20px" height="100" src="{{ asset('gambar/surabya.png') }}">
				</div>
			</div>
		</div>

	</footer>
</section>

<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ asset('assets/vendor/select2/js/select2.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-appear/jquery-appear.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot.tooltip/flot.tooltip.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
	<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-sparkline/jquery-sparkline.js') }}"></script>
	<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
	<script src="{{ asset('assets/vendor/morris.js/morris.js') }}"></script>
	<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
	<script src="{{ asset('assets/vendor/snap.svg/snap.svg.js') }}"></script>
	<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
	<script src="{{ asset('assets/vendor/chartist/chartist.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/lib/codemirror.js') }}"></script>
	<script src="{{ asset('assets/vendor/isotope/isotope.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/addon/selection/active-line.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/xml/xml.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/css/css.js') }}"></script>
	<script src="{{ asset('assets/vendor/summernote/summernote.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>
	<script src="{{ asset('assets/javascripts/tables/examples.datatables.default.js') }}"></script>
	<script src="{{ asset('js/fungsi.js') }}"></script>

	<script src="{{ asset('assets/javascripts/pages/examples.mediagallery.js') }}"></script>
	<script src="{{ asset('assets/javascripts/ui-elements/examples.charts.js') }}"></script>
<script src="{{ asset('js/fungsi.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatable').DataTable( {
			"paging":   false,
			"info":     false,
			"searching": false
		} );
	} );
</script>
</body>
</html>