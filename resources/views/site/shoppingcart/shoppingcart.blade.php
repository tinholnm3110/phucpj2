@include('/site/master/tieu_de1')
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="or-breadcrumbs-content text-center">
				<div class="page-title headline"><h1>Cart</h1></div>
				<div class="or-breadcrumbs-items ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Cart</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Cart  section
	============================================= -->
	<section id="or-main-cart" class="or-main-cart-section">
		<div class="container">
			<div class="or-main-cart-content">
				<div class="row">
					<div class="col-lg-8">
						<div class="or-cart-content-table table-responsive">
							<form method="post" action="/site/shoppingcart/updateCart/{{$data["Idcart"]->id}}">
								@csrf
							<table class="table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Subtotal</th>
									</tr>
								</thead>
								<tbody>
									<?php $sumAllProductInCart = 0; ?>
                    @foreach($data['carts'] as $cart)   
									<tr>
										<td class="product-remove"> <a href="/site/shoppingcart/deleted/{{$cart['productdetail_id']}}/{{$cart["cart_id"]}}" class="remove">×</a></td>
										<td class="product-thumbnail"> <a href="#"><img src="{{asset("img/" . $cart['ha_sp'])}}" class="cart-thumb-img" alt=""></a></td>
										<td class="product-name" data-title="Product"> <a href="#">{{$cart['name_sp']}}</a></td>
										<td class="product-price product-subtotal" data-title="Price"> <span class=" amount"><bdi><span class="Price-currencySymbol">VND</span>{{$cart['cost']}} </bdi></span></td>
										<td>
											<div class="quantity-field position-relative  d-inline-block">
												<input type="number" class="input-text qty text" step="1" min="1" name="quanlity[{{$cart['product_id']}}]" value="{{$cart['quanlity']}}" title="Số lượng" size="4" placeholder="" />
								
											</div>
										</td>
										<td class="product-subtotal"> <span><bdi><span class="Price-currencySymbol"><?php $sumAllProductInCart += ($cart['quanlity'] * $cart['cost']); ?> VND</span>{{number_format($cart['quanlity'] * $cart['cost']) . ' VNĐ'}}</bdi></span></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						
					</div>
					<div class="col-lg-4">
						<div class="or-cart-total-warpper text-center headline pera-content top-sticky">
							<h3>Cart Totals</h3>
							<table>
								<tbody>
						
									
									<tr>
										<td>
											<p class="v-title">Total</p>
										</td>
										<td>
											<p class="v-price">	<?php echo number_format($sumAllProductInCart - 0) . ' VNĐ'; ?></p>
										</td>
									</tr>
									
								</tbody>
							</table>
							
							<a class="d-flex justify-content-center align-items-center" href='/site/order/index{{$data['carts']}}/1' >Proccess To Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('/site/master/thong_tin1')