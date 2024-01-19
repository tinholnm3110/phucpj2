@include('/site/master/tieu_de1')
<body class="organio-wrapper">

<!-- Start of header section
	============================================= -->
	
			<!-- /Mobile-Menu -->
		</div>
	</header>
<!-- End of header section
	============================================= -->

<!-- Start of Breadcrumb section
	============================================= -->
	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Shop product section
	============================================= -->
	<section id="or-shop-product" class="or-shop-product-section">
		<div class="container">
			<div class="or-section-title headline pera-content text-center middle-align">
				<span class="sub-title">Products</span>
				<h2>All of our products are genuine.</h2>
			</div>
			<div class="or-product-shop-content">
				<div class="container">
					<div class="row">
						@foreach($data['product'] as $product)
						<div class="col-lg-3 col-md-6">
							<div class="or-product-innerbox-item type-1 text-center position-relative">
								<div class="e-commerce-btn">
									<a href="#"><i class="fal fa-shopping-cart"></i></a>
									<a href="#"><i class="fal fa-heart"></i></a>
									<a href="/site/listproduct/show/{{$product['id']}}"
									><i class="fal fa-eye"></i></a>
								</div>
								<div class="or-product-inner-img">
									<img href="/site/listproduct/show/{{$product['id']}}"
									style="weight:80px;height:100px" src="{{asset("img/" . $product['ha_sp'])}}" alt="">
								</div>
								<div class="or-product-inner-text headline">
									<h3><a href="shop-single.html" tabindex="0">{{$product['name_sp']}}</a></h3>
									<span class="price">{{number_format($product['cost']).'VNĐ'}}</span>
									<div class="or-product-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
								<div class="or-product-btn text-center">
									<a class="d-flex justify-content-center align-items-center" href="#" tabindex="0">Add To Cart</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Shop product section
	============================================= -->		

<!-- Start of Footer section
	============================================= -->
<!-- End of Footer section
	============================================= -->	

	@include('/site/master/thong_tin1')