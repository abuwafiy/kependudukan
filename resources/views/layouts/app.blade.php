<!doctype html>
<html class="fixed">
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
</style>
</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header header-nav-menu" >
			
			<div class="logo-container">
				<a href="{{ url('/') }}" class="logo" class="title">
					<img src="{{ url('gambar/surabya.png') }}" height="35" alt="Porto Admin" />
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
								<a href="{{ url('/admin') }}">
									Beranda
								</a>    
							</li>
							<li class="">
								<a href="{{ url('/admin/rumah') }}">
									Rumah dan Kartu Keluarga
								</a>    
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle">CMS</a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('admin/berita') }}">Berita</a></li>
									<li><a href="{{ url('admin/agenda') }}">Agenda</a></li>
									<li><a href="{{ url('admin/prestasi') }}">Prestasi</a></li>
									<li><a href="{{ url('admin/galeri') }}">Galeri</a></li>
									<li><a href="{{ url('admin/kategori_berita') }}">Kategori Berita</a></li>
									<li><a href="{{ url('admin/slider') }}">Slider</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle">Master</a>
								<ul class="dropdown-menu">
									<li><a href="{{ url('admin/kartuanggota') }}">Kartu Anggota</a></li>
									<li><a href="{{ url('admin/pengaturan') }}">Pengaturan</a></li>
								</ul>
							</li>
							<li class="">
								<a href="{{ url('admin/laporan') }}">
									Laporan
								</a>    
							</li>
							
						</ul>
					</nav>
				</div>
			</div>

			<div class="header-right">	

				@if(session('id') != null)

				<span class="separator"></span>
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name" style="color: #33353F">{{ session('name') }}</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a style="color: black" role="menuitem" tabindex="-1" href="{{ route('login.destroy') }}"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
				@endif
			</div>
		</header>
		<div class="head2"></div>
		<!-- start: page -->
		<div class="container"  style="padding-top:20px;width: 100%">
			@yield('content')	
		</div>
	</section>
	<script type="text/javascript">
		var baseurl = "{{ url('/') }}";
	</script>
	<!-- Vendor -->
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
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datatable').DataTable( {
				"order": [[ 3, "desc" ]],
			} );
		} );
		$(document).ready(function() {
			$('#datatable1').DataTable( {
				
			} );
		} );
	</script>
</body>
</html>