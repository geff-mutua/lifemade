
	<!--==================================================-->
	<!-- Start hendrio Top Menu section -->
	<!--==================================================-->
	<div class="header-top-section">
		<div class="container">
			<div class="row align-items-center d-flex">
				<div class="col-lg-6">
					<div class="header-address-info">
						<p> <i class="bi bi-geo-alt"></i> {{config('variables.location')}} <span> <i class="bi bi-envelope-open"></i> {{config('variables.email')}}</span></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="header-top-right text-right">
						<div class="hendrio-social-icon">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>	
						</ul>
					</div>
					<div class="phone-number">
						<p> <i class="fas fa-phone-square-alt"></i> <span>Call Us :</span> {{config('variables.contact')}} </p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start hendrio Top Menu section -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start hendrio Main Menu  -->
	<!--==================================================-->
	<div id="sticky-header" class="hendrio_nav_manu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo">
						<a class="logo_img" href="{{route('home')}}" title="Lifemade">
							<img src="assets/images/logo.png" alt="logo">
						</a>
						<a class="main_sticky" href="{{route('home')}}" title="Lifemade">
							<img src="assets/images/logo.png" width="200" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-lg-10">
					<nav class="hendrio_menu">
						<ul class="nav_scroll">
							@include('layouts.partials.menu')
						</ul>
						<div class="header-menu-right-btn">
							<!--header-search-->
							<div class="header-search-button search-box-outer">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
							<div class="nav-btn navSidebar-button"><a href="#"><i class="bi bi-list"></i></a></div>
							<!-- header button -->
							<div class="header-button">
								<a href="/contact">Get a Free Quote</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- hendrio Mobile Menu  -->
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="hendrio_menu">
				<ul class="nav_scroll">
					@include('layouts.partials.menu')
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End hendrio Main Menu  -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start hendrio Sidbar section -->
	<!--==================================================-->

	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<!-- widget button -->
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="far fa-times-circle"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="nav-logo">
								<a href="{{route('home')}}"><img src="assets/images/logo2.png" alt="" /></a>
							</div>

							<div class="product-category">
								<p>Lifemade water is purified using state of the art technology which includes a reverse osmosis setup which ensures highest standards of quality</p>
								
								<h6>A product of Lifemade water limited</h6>
								<ul style="list-style: none">
									<li><span><i class="bi bi-geo-alt"></i></span> {{config('variables.address')}}</li>
									<li><span><i class="bi bi-geo-alt"></i></span> {{config('variables.location')}}</li>
									<li> <span> <i class="bi bi-envelope-open"></i> {{config('variables.email')}}</span></li>
									<li> <i class="fas fa-phone-square-alt"></i> <span>Call Us :</span> {{config('variables.contact')}}</li>
								</ul>
							</div>	
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div> 

	<!--==================================================-->
	<!-- End hendrio Sidbar section -->
	<!--==================================================-->
