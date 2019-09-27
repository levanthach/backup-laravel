<!DOCTYPE html>
<html lang="en"><head>
	<title> Baas | Backup as a service </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<base href="https://backupservices.herokuapp.com/">
	<link rel="icon" type="text/css" href="{{ secure_asset('img/site_icon.png') }}">
	<!-- bootstrap 4 -->
	<link rel="stylesheet" href="{{ secure_asset('lib/bootstrap-4.3.1/css/bootstrap.min.css') }}">
	<!-- menu-horizontal	 -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/menu-horizontal/menu-horizontal.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/animate/animate.css') }}">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/owl-carousel/dist/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
	<!-- font-awesome -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/font-awesome/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/font-awesome/fontawesome-pro/css/all.css') }}">
	@if (Route::currentRouteName() == 'trang-chu')
		<link rel="stylesheet" type="text/css" href="{{ secure_asset'lib/circle-slider/jCircle.css') }}">
	@endif
	<!-- font-awesome pro -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/fonts/Roboto/roboto.css') }}">
	<!-- Poppins font -->
	<link href="{{ secure_asset('lib/fonts/poppins/poppins.css') }}" rel="stylesheet">
	<!-- Open san font -->
	<link href="{{ secure_asset('lib/fonts/open-san/open-san.css') }}" rel="stylesheet">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/animate/animate.css') }}">
	<!-- popup-lightbox-img -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/lightgallery/dist/css/lightgallery.css') }}">
	<!-- Video popup simple overplay-->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('lib/simple-overplay/simple-overlay.css') }}">
	<!-- Style.css -->
	<link rel="stylesheet" href="{{ secure_asset('sass/css/style.css') }}">
	@if (Route::currentRouteName() != 'trang-chu')
		<link rel="stylesheet" href="{{ secure_asset('sass/css/style__single.css') }}">
	@endif
</head>
<body class="preloading">
	<div class="wrapper">
		<header id="header" class="main-header">
			<div class="header-wrap">				
				<!-- begin topbar -->
				<div class="top-bar">
					<div class="container">
						<div class="ribbon-global-cyber-summit">
							<div class="row">
								<div class="col-xs-12 col-lg-6 tiltle-advertisement">
									<span>
										<strong> BaaS Global Cyber Summit 2019 </strong>
									</span>
								</div>
								<div class="col-xs-12 col-lg-6 slogan-advertisement">
									<i>Miami, FL<span> | </span>Keynote speaker: Robert Herjavec</i>
								</div>
							</div> <!-- end row -->
						</div><!--  end ribbon-global-cyber-summit -->
					</div> <!-- end container top-bar header -->
				</div>
				@include('baas.layout.menu')
