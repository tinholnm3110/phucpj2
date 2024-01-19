<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/organio/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 12:33:49 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<meta name="description" content="Organio - Organic Food Store HTML Templae ">
	<meta name="keywords" content="	farm, food, fresh, fruit, nutrition, organic, organic farm, organic food store, organic shop, organic store, organic theme, store, vegetable, woocommerce">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="/site/img/logo/ficon.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->

	<link rel="stylesheet" href="{{asset("site/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/fontawesome-all.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/flaticon.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/animate.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/video.min.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/jquery.mCustomScrollbar.min.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/rs6.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/slick.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/slick-theme.css")}}">
	<link rel="stylesheet" href="{{asset("site/css/style.css")}}">
</head>
<body class="organio-wrapper">
	<!-- <div id="preloader"></div> -->
	{{-- <div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div> --}}
<!-- Start of header section
	============================================= -->
	<header id="organio-header" class="organio-header-section header-style-one">
		<div class="header-top">
			<div class="container">
				<div class="header-top-content d-flex justify-content-between align-items-center">
					<div class="header-slug">
						<span> Welcome to our store Organico!</span>
					</div>
					<div class="or-header-cart-btn or-canvas-cart-trigger">
						<i class="fas fa-shopping-cart"></i> Cart: 0 -<span>$0.00</span>
					</div>
				</div>
				<div class="header-top-content d-flex justify-content-between align-items-center">
					<div class="header-slug">
						<div class="login" style="color:black" ><a href="
							@if(Auth::guard("client")->check())
								/logout
							@else
								/login/showViewlogin
							@endif
								"><span class="hidden-xs">
											@if(Auth::guard("client")->check())
												Logout
											@else
												LogIn
											@endif
											</span></a></div>
										</div>
					</div>
				</div>
			</div>
		</div>
		<div class="organic-main-navigation">
			<div class="container">
				<div class="organic-header-content  position-relative">
					<div class="site-logo">
						<a href="#"><img src="{{asset("site/img/logo/logo1.png")}}" alt=""></a>
					</div>
					<nav class="main-navigation-area clearfix ul-li">
						<ul class="menu-navigation left-nav">
							<li class="dropdown">
								<a href="/site/home/home">Home</a>
							</li>
							<li class="dropdown">
								<a href="%21.html#">Shop</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="_blank" href="/site/listproduct/list">Product</a></li>
									<li><a target="_blank" href="/site/shoppingcart/show">Shopping Cart</a></li>
									<li><a target="_blank" href="cart.html">History Cart</a></li>
									<li><a target="_blank" href="/site/order/index/{id}">Checkout</a></li>
								</ul>
							</li>
						</ul>
						<ul class="menu-navigation right-nav">	
						</ul>
					</nav>
					