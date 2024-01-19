@include('/site/master/tieu_de1')
<!-- End of Breadcrumb section
	//285 xoa den dau
	============================================= -->

<!-- Start of Shop Details section
	============================================= -->
	<section id="or-shop-details" class="or-shop-details-section">
		<div class="container">
			<div class="or-shop-details-content">
				<form action="
                  /site/shoppingcart/addDetail/{{$data['product']->id}}" method="post" >
                  @csrf
				<div class="row">
					<div class="col-lg-6">
						<div class="shop-details-img-slider-area">
							<div class="shop-details-img-slider">
								<div class="shop-details-img-wrap">
									<img src="{{asset("img/". $data['product']->ha_sp)}}" alt="" data-zoomed="{{asset("img/". $data['product']->ha_sp)}}">
								</div>
							</div>
							<div class="shop-details-img-thumb">
								<div class="or-thumb-img">
									<img src="{{asset("img/". $data['product']->ha_sp)}}" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="shop-details-text  headline pera-content">
							<div class="shop-details-title">
								<h3>{{$data['product']->name_sp}}</h3>
							</div>
							<div class="shop-details-rate-review ul-li d-flex">
							</div>
							<div class="shop-details-price">{{number_format($data['product']->cost).'VNĐ'}}</div>
							<div class="shop-details-text-decs">
								{{$data['product']->details}}
							</div>
							<div class="shop-details-option">
								<span class="option-title">Quantity:{{$data['product']->quanlity}}</span>
								<div class="shop-quantity-option d-flex">
									<div class="quantity-field position-relative  d-inline-block">
										<input type="text" class="input-text qty" value="1" title="Qty"  maxlength="12" id="qty" name="qty">
								</div>
							</div>
							<div class="shop-details-btn ">
								<button type="submit">Add To Cart</button>
								<a href="#">Add To Wishlist</a>
							</div>
							<div class="shop-details-product-code ul-li-block">
								<ul>	
									<li><span>SKU: </span> WT-05789-567-78</li>
									<li ><span>Category: </span>{{$data['product']->nameCatr}}</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Shop Details section
	============================================= -->

<!-- Start of Shop details description tab section
	
	============================================= -->
	<section id="or-shop-details-tab" class="or-shop-details-tab-section">
		<div class="container">
			<div class="or-shop-details-review-tab-content">
				<div class="or-shop-review-tab-btn">
					<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Additional info</button>
						</li>
					</ul>
				</div>
				<div class="or-shop-details-tab-textarea">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="shop-details-description-text  text-center">
								{{$data['product']->details}}
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="product-description-text pera-content" href="/site/category/list/{{$data['product']->cateID}}">
								<p>
									{{$data['product']->nameCatr}}
								</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End Shop details description tab section
	============================================= -->				
	@include('/site/master/thong_tin1')
