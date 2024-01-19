@include('/site/master/tieu_de1')
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="or-breadcrumbs" class="or-breadcrumbs-section position-relative" data-background="assets/img/bg/bg-page-title.jpg">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="or-breadcrumbs-content text-center">
				<div class="page-title headline"><h1>Checkout</h1></div>
				<div class="or-breadcrumbs-items ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Checkout</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Checkout section
	============================================= -->
	<section id="or-checkout" class="or-checkout-section">
		<div class="container">
			<div class="or-checkout-form-area">
				<form name="checkout" method="post" class="checkout woocommerce-checkout" action="/site/order/addOrder">
					@csrf
				<div class="row">
					<div class="col-lg-6">
						<div class="or-checkout-form headline pera-content">
							<h2>Billing Details</h2>
							<form action="#">
								<div class="row">									
									<div class="col-md-12">
										<div class="or-bill-form">
											<label>Name</label>
											<input type="text" placeholder="{{$data["client"]->name}}" value="{{$data["client"]->name}}"  autocomplete="organization" required>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="or-bill-form">
											<label>Address</label>
											<input type="text" placeholder="{{$data["client"]->address}}" value="{{$data["client"]->address}}" autocomplete="address-line1" required data-placeholder="House number and street name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="or-bill-form">
											<label>Phone</label>
											<input type="text" placeholder="{{$data["client"]->phone}}" value="{{$data["client"]->phone}}" autocomplete="tel" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="or-bill-form">
											<label>Email</label>
											<input type="text"placeholder="{{$data["client"]->email}}" value="{{$data["client"]->email}}" autocomplete="email here" required>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="or-checkout-form headline pera-content">
							<h2>Your Order</h2>
							<table class="table">
								<thead>
									<tr>
										<th class="product-name">Product</th>
										<th class="product-total-h">Subtotal</th>
										<th class="product-total-h">Grandtotal</th>
									</tr>
								</thead>
								<?php $giatong = 0; ?>
								@foreach($data['carts'] as $cart)
								
									
									<tr class="cart_item">
										<td class="product-name">{{$cart['name_sp']}}&nbsp; <strong class="product-quantity">×&nbsp;{{$cart["quanlity"]}}</strong></td>
										<td class="product-total">
											<span class="woocommerce-Price-amount amount">
												<bdi>
													<span class="woocommerce-Price-currencySymbol"></span><?php $tt = $cart['cost'] * $cart['quanlity'];
																												echo number_format($tt) . ' VNĐ';  ?>
												</bdi>
											</span>
										</td>
										
										
									
									<?php $giatong += $tt; ?>
									@endforeach
									<td><?php echo number_format($giatong) . ' VNĐ'; ?></td>
								</tr>
								</tbody>
							</table>
							<input type="hiddet" value="{{$giatong}}" name="sum">
						</div>
						<div class="or-checkout-pay-item-wrapper">
							@foreach($data['shipping'] as $pay)
							<div class="or-checkout-pay-item">
								<input type="radio" name="payment_method" value="{{$pay['id']}}" checked="checked" >
								<span> {{$pay['namePttt']}} </span>
							</div>
							@endforeach
							<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy.</a></p>
							<div class="or-btn-2">
								<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Thanh toán</button>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Checkout section
	============================================= -->		

	@include('/site/master/thong_tin1')