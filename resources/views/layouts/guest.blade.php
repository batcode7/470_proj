<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    @livewireStyles
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+880) 1784162452" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+880) 1784162452</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
							
							@if (Route::has('login'))
							   @auth
							      @if (Auth::user()->utype === 'ADM')

								    <li class="menu-item menu-item-has-children parent" >
									  <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									  <ul class="submenu curency" >
										  <li class="menu-item" >
											  <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
										  </li>
										  <li class = "menu-item">
											      <a href ="{{route('logout')}}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                                            </li>
										  <form id = "logout-form" method = "POST" action ="{{route ('logout')}}">
											@csrf 

									  </ul>
								    </li>
								  @else 
								      
								  <li class="menu-item menu-item-has-children parent" >
									  <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									  <ul class="submenu curency" >
										  <li class="menu-item" >
											  <a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
										  </li>
										  <li class = "menu-item">
											      <a href ="{{route('logout')}}" onclick = "event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                                            </li>
										  <form id = "logout-form" method = "POST" action ="{{route ('logout')}}">
											@csrf 
										    
                                          </form>
									  </ul>
								    </li>

								  @endif


							   @else
							     <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
							     <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>	
							   @endif

							@endif
							



							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.jpg')}}" alt="bike logo"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Bike Parts</li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											<li class="level-1">-Mechanics </li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											<li class="level-1">-Maintenance packages</li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											<li class="level-2"></li>
											
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					
                     
                     <!--Primary SLIDE contains about-us, shop, cart, checkout, contact-us   -->
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	{{$slot}}

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over 2000tk</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Old Bus Stand road, Tangail</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+880) 123-456</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">parthabhoumik4@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+880) 123-456</b>
									</div>
								</div>
							</div>

							

						</div>

						

					</div>

					
				</div>

				<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Engine:</span></li>
									<li><a href="#" class="redirect-back-link" title="piston">Piston</a></li>
									<li><a href="#" class="redirect-back-link" title="piston ring">Piston ring</a></li>
									<li><a href="#" class="redirect-back-link" title="Cylinder">Cylinder</a></li>
									<li><a href="#" class="redirect-back-link" title="Connecting Rod">Connecting Rod</a></li>
									<li><a href="#" class="redirect-back-link" title="Spark Plug">Spark Plug</a></li>
									<li><a href="#" class="redirect-back-link" title="Crank Shaft">Crank Shaft</a></li>
									<li><a href="#" class="redirect-back-link" title="Cylinder Head">Cylinder Head</a></li>
									<li><a href="#" class="redirect-back-link" title="Barings">Barings</a></li>
									<li><a href="#" class="redirect-back-link" title="Carburator">Carburator</a></li>
									
								</ul>

								

								<ul class="list-back-link" >
									<li><span class="row-title">Body:</span></li>
									<li><a href="#" class="redirect-back-link" title="Tank">Tank</a></li>
									<li><a href="#" class="redirect-back-link" title="Tank Cap" >Tank Cap</a></li>
									<li><a href="#" class="redirect-back-link" title="Tank Lock" >Tank Locks</a></li>
									<li><a href="#" class="redirect-back-link" title="Head Light" >Head Light</a></li>
									<li><a href="#" class="redirect-back-link" title="Signal Light" >Signal Light</a></li>
									<li><a href="#" class="redirect-back-link" title="Tail Light" >Tail Light</a></li>
									<li><a href="#" class="redirect-back-link" title="Neck Lock" >Neck Lock</a></li>
									<li><a href="#" class="redirect-back-link" title="Meter Shade" >Meter Shade</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>

			
		</div>
	</footer>
	
	<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>
    @livewireScripts
</body>
</html>