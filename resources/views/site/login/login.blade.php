 @include('site/master/tieu_de1')
<body class="organio-wrapper or-login-wrapper">
	{{-- <div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div> --}}
	<section id="or-login" class="or-login-section">
		<div class="or-login-content sign-login-area d-flex justify-content-center align-items-center">
			<div class="or-login-form">
				<form action="/login/xl_login" method="POST">
					@csrf
					<input type="text" name="email" placeholder="Your Email" required="">
					<input type="text" name="password" placeholder="Your Password" required="">
					<div class="login-button text-center">
						<button>Sign In</button>
					</div>
				</form>
			</div>
		</div>
	</section>

@include('site/master/thong_tin1')