<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YesBus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
				
                <div class="row">
                    <div class="col-sm-4 col-xs-12 menu-1">
                        <div style="margin-top:5px"><a href="/" style="font-size:40px; opacity:0.8;"><i>YesBus.</i></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
						
                        <ul>
							
                            <li><a href="destination" style="font-size:25px;">Destination</a></li>
                            <li class="has-dropdown">
                                <a href="{{route ('Schedules') }}" style="font-size:25px;">Schedules</a>
                                <ul class="dropdown">
                                    <li><a href="#">Morning</a></li>
                                    <li><a href="#">Night</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="{{ route('Order') }}" style="font-size:25px;">Order</a></li>
                            <li><a href="contact" style="font-size:25px;">Contact</a></li>
							<div style="float: right; margin-top: 5px">
								<a class="btn btn-sm btn-dark" href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i>Admin</a>
							</div>
                        </ul>	
                    </div>
                </div>
            </div>
        </nav>
    @yield('content')

    <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>YesBus is a bus subsidiary of Indonesian State railway, Kereta Api The national authority for train travel within the country, 
                           It is the state railway network and provider in Indonesia.YesBus offers modern and popular options for bus travel, 
                           providing fast, efficient, economical and environmentally-conscious services.</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Region</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Banten</a></li>
							<li><a href="#">West Java</a></li>
							<li><a href="#">Central Java</a></li>
							<li><a href="#">East Java</a></li>
							<li><a href="#">Yogyakarta</a></li>
                            <li><a href="#">Jakarta</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Quick Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Payment Options</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> admin09@gmail.com</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2021 RB. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">R&B.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    <!-- jQuery -->
	<script  src={{asset('assets/js/jquery.min.js') }}></script>
	<!-- jQuery Easing -->
	<script  src={{asset('assets/js/jquery.easing.1.3.js') }}></script>
	<!-- Bootstrap -->
	<script src={{asset('assets/js/bootstrap.min.js ') }}></script>
	<!-- Waypoints -->
	<script  src={{asset('assets/js/jquery.waypoints.min.js ') }}></script>
	<!-- Carousel -->
	<script src={{asset('assets/js/owl.carousel.min.js') }}></script>
	<!-- countTo -->
	<script src={{asset('assets/js/jquery.countTo.js') }}></script>

	<!-- Stellar Parallax -->
	<script src={{asset('assets/js/jquery.stellar.min.js') }}></script>

	<!-- Magnific Popup -->
	<script src={{asset('assets/js/jquery.magnific-popup.min.js') }}></script>
	<script src={{asset('assets/js/magnific-popup-options.js') }}></script>
	
	<!-- Datepicker -->
	<script src={{asset('assets/js/bootstrap-datepicker.min.js') }}></script>
	

	<!-- Main -->
	<script src={{asset('assets/js/main.js') }}></script>

	</body>
</html>
