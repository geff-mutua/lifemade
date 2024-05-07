@extends('layouts.master')
@section('title',config('variables.site_name'))

@section('content')
    
	{{-- ==================================================
					 Start lifemade Hero Section  
	================================================== --}}

	<div class="hero-list owl-carousel">
		<div class="hero-section d-flex align-items-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="sero-content">
							<h4>100% Satisfaction</h4>
							<h1> Pure & <span>Healthy</span> </h1>
							<h1> Drinking Water </h1>
							<p class="hero-desc">Indulge in the goodness of pure and healthy drinking water that nourishes your body and refreshes your senses.</p>
							<div class="hero-button">
								<a href="/contact"> Place order now <i class="bi bi-plus"></i></a>
							</div>
							<div class="hero-shape">
								<img src="assets/images/slider/hero-shape.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="hero-section slider d-flex align-items-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="sero-content">
							<h4>100% Purified Water</h4>
							<h1> Delivered right <span>to your home &</span> </h1>
							<h1> Office Door </h1>
							<p class="hero-desc"> Say goodbye to the hassle of running errands and enjoy the convenience of having everything you need brought right to you.</p>
							<div class="hero-button">
								<a href="/contact"> Place Order now <i class="bi bi-plus"></i></a>
							</div>
							<div class="hero-shape">
								<img src="assets/images/slider/hero-shape.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- ==================================================
	 				Start lifemade Process Section  
	================================================== --}}

	<div class="process-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="hendrio-section-title text-center padding-lg">
						<h4> Work Process </h4>
						<h1> We Follow the <span>Process</span> </h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-process-box upper">
						<div class="process-thumb">
							<img src="assets/images/resource/process1.png" alt="">
							<div class="process-number">
								<span>01</span>
							</div>
						</div>
						<div class="process-content">
							<h4 class="process-title">Water Source and Collection</h4>
							<p class="process-desc">Harvesting Nature's Bounty: Sustainably Sourcing Water for Tomorrow.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-process-box">
						<div class="process-thumb">
							<img src="assets/images/resource/process2.png" alt="">
							<div class="process-number">
								<span>02</span>
							</div>
						</div>
						<div class="process-content">
							<h4 class="process-title">Screening & Straining</h4>
							<p class="process-desc">This is a preliminary treatment that prepares the water for finer purification processes.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-process-box">
						<div class="process-thumb">
							<img src="assets/images/resource/process3.png" alt="">
							<div class="process-number">
								<span>03</span>
							</div>
						</div>
						<div class="process-content">
							<h4 class="process-title">Chemical Treatment & Filtration</h4>
							<p class="process-desc">Clearing the Waters: Enhancing purity through chemical treatment and filtration.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-process-box">
						<div class="process-thumb">
							<img src="assets/images/resource/process4.png" alt="">
							<div class="process-number">
								<span class="check-arrow"><i class="bi bi-check-lg"></i></span>
							</div>
						</div>
						<div class="process-content">
							<h4 class="process-title">Quality Assurance & Distribution</h4>
							<p class="process-desc">After treatment, water quality is rigorously tested to ensure it meets safety and health standards</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	{{-- ==================================================
				 Start lifemade About Section  
	================================================== --}}

	<div class="about-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="about-right-thumb">
						<img src="assets/images/resource/about.png" width="608px" alt="">
						<div class="about-counter">
							<h2 class="counter">3</h2>
							<h2 class="counter1">K <span>+</span></h2>
							<span class="counter-text">Deliveries <br> Done</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="hendrio-section-title">
						<h4>ABOUT US</h4>
						<h1>Over 10+ Year of <span>Experience In</span></h1>
						<h1 class="sections">Quenching Our People</h1>
						<p>We are passionate about sustainable water solutions, combining innovative technology with eco-friendly practices to provide clean, safe, and accessible water for communities.</p>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="about-item-list">
								<ul>
									<li><i class="bi bi-check-circle-fill"></i> Purified Driking Water </li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="about-item-list">
								<ul>
									<li><i class="bi bi-check-circle-fill"></i> Clean & Safe water </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="process-ber-plugin">
						<span class="process-bar">Quality Assurance</span>
						<div id="bar4" class="barfiller">
							<div class="tipWrap">
								<span class="tip"></span>
							</div>
							<span class="fill" data-percentage="99"></span>
						</div>	
					</div>
					<div class="seo-and-founder">
						<div class="hendrio-button">
							<a href="/contact">Get An Estimate <i class="bi bi-plus"></i></a>
						</div>
						<div class="seo-info">
							
							<div class="seo-content">
								<h5>Dr Anthony Munyao</h5>
								<span class="sector">CEO & Founder</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    {{-- ==================================================
	 			Start lifemade Why Choose  Section 
	================================================== --}}

	<div class="why-choose-top-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="hendrio-section-title text-center white">
						<h4>Why Choose Us</h4>
						<h1>Some Reason for Choose <span>{{config('variables.site_name')}}</span></h1>
						<h1 class="sections">Water Company </h1>
					</div>
					<div class="rs-video">
						<div class="animate-border">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY">
							Order</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="why-choose-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Tab  -->
					<div class="tab">

						<ul class="tabs">
							<li><a href="#"> <span>01.</span> Why Choose Us ? </a></li>
							<li><a href="#"> <span>02.</span> {{config('variables.site_name')}} Missions </a></li>
							<li><a href="#"> <span>03.</span> Mission & Vission </a></li>
						</ul> <!-- / tabs -->

						<div class="tab_content">

							<!-- / tabs_item -->

							<div class="tabs_item">
								<div class="row">
									<div class="col-lg-6 col-md-12 pr-2">
										<div class="tab-thumb">
											<img src="assets/images/resource/tab_3.jpeg" width="569px" alt="">
											<div class="tb-icons">
												<img src="assets/images/resource/tb-icon.png" alt="">
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-12 tab-right">
										<div class="hendrio-section-title pr-2">
											<h4> Why Choose Us </h4>
											<h1> Quality Assurance  <span> Services </span> </h1>
											<h1 class="sections">For Purified Water</h1>
											<p>Our rigorous filtration and treatment processes in our company guarantee the following clean, safe, and reliable water.</p>
										</div>

										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i> Clean Water</li>
														<li><i class="bi bi-check-circle-fill"></i> Safe & Purified Water </li>
													</ul>
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i> Satisfying Water</li>
														<li><i class="bi bi-check-circle-fill"></i> Reliable & Convenient.</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="hendrio-button">
											<a href="/contact">Enquiries <i class="bi bi-plus"></i></a>
										</div>
									</div>
								</div>
							</div> 

							<!-- / tabs_item -->

							<div class="tabs_item">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="tab-thumb">
											<img src="assets/images/resource/tab_2.jpeg" width="569px" alt="">
											<div class="tb-icons">
												<img src="assets/images/resource/tb-icon.png" alt="">
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-12 tab-right">
										<div class="hendrio-section-title">
											<h4> {{config('variables.site_name')}} missions </h4>
											<h1> Empowering Lives  </h1>
											<h1 class="sections"><span> One Drop at a Time</span></h1>
											<p>To improve lives by empowering people with access to lifes most basic necessity. i.e Water</p>
										</div>

										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i> Community Empowerment</li>
														<li><i class="bi bi-check-circle-fill"></i> Environmental Stewardship </li>
													</ul>
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i>Health Improvement</li>
														<li><i class="bi bi-check-circle-fill"></i> Economic Development</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="hendrio-button">
											<a href="/contact">Contact Us <i class="bi bi-plus"></i></a>
										</div>
									</div>
								</div>
							</div> 

							<!-- / tabs_item -->

							<div class="tabs_item">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="tab-thumb">
											<img src="assets/images/resource/tab_1.jpeg" width="569px" alt="">
											<div class="tb-icons">
												<img src="assets/images/resource/tb-icon.png" alt="">
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-12 tab-right">
										<div class="hendrio-section-title">
											<h4> Mission & Vission </h4>
											<h1> Lifemade  <span> Mission </span> </h1>
											<h1 class="sections">For Great Work</h1>
											<p>A society where bottled water is  no longer a luxury but a basic commodity to humanity.</p>
										</div>

										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i> Community Empowerment</li>
														<li><i class="bi bi-check-circle-fill"></i> Environmental Stewardship </li>
													</ul>
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="about-item-list">
													<ul>
														<li><i class="bi bi-check-circle-fill"></i>Health Improvement</li>
														<li><i class="bi bi-check-circle-fill"></i> Economic Development</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="hendrio-button">
											<a href="/contact">Get An Estimate <i class="bi bi-plus"></i></a>
										</div>
									</div>
								</div>
							</div> 

						</div> 
					</div> 
					<!-- End tab -->
				</div>
			</div>
		</div>
	</div>

	{{-- ==================================================
	 			Start lifemade Service Section  
	================================================== --}}

	<div class="service-section">
		<div class="container">
			<div class="row service-bg align-items-center">
				<div class="col-lg-12">
					<div class="hendrio-section-title padding-lg">
						<h4>OUR SERVICES</h4>
						<h1>We Provide Best <span>Services</span></h1>
						<h1 class="sections">For any Customer </h1>
					</div>
				</div>
			</div>
			<div class="row service-bg">
				<div class="service-list owl-carousel">
					<div class="col-lg-12">
						<div class="single-service-box">
							<div class="service-thumb">
								<img src="assets/images/resource/pack.png" height="370px" alt="">
								<div class="service-icon">
									<img src="assets/images/resource/srv-icon.png" alt="">
								</div>
							</div>
							<div class="service-content">
								<div class="service-icon2">
									<i class="bi bi-plus"></i>
								</div>
								<h3 class="service-title"><a href="#">Water Packaging</a></h3>
								<ul class="service-list2">
									<li> <i class="bi bi-check-lg"></i> Brand Differentiation</li>
									<li> <i class="bi bi-check-lg"></i> Health and Safety</li>
									<li> <i class="bi bi-check-lg"></i> Customization Options</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="single-service-box">
							<div class="service-thumb">
								<img src="assets/images/resource/delivery.jpg" height="370px" alt="">
								<div class="service-icon">
									<img src="assets/images/resource/srv-icon2.png" alt="">
								</div>
							</div>
							<div class="service-content">
								<div class="service-icon2">
									<i class="bi bi-plus"></i>
								</div>
								<h3 class="service-title"><a href="/">On Door Delivery</a></h3>
								<ul class="service-list2">
									<li> <i class="bi bi-check-lg"></i> Convenience</li>
									<li> <i class="bi bi-check-lg"></i> Accessibility</li>
									<li> <i class="bi bi-check-lg"></i> Customer Satisfaction</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="single-service-box">
							<div class="service-thumb">
								<img src="assets/images/resource/projects.jpeg" height="370px" alt="">
								<div class="service-icon">
									<img src="assets/images/resource/srv-icon3.png" alt="">
								</div>
							</div>
							<div class="service-content">
								<div class="service-icon2">
									<i class="bi bi-plus"></i>
								</div>
								<h3 class="service-title"><a href="service-details.html">Water Projects</a></h3>
								<ul class="service-list2">
									<li> <i class="bi bi-check-lg"></i> Community Empowerment</li>
									<li> <i class="bi bi-check-lg"></i> Health Promotion</li>
									<li> <i class="bi bi-check-lg"></i> Environmental Conservation</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="single-service-box">
							<div class="service-thumb">
								<img src="assets/images/resource/treatment.png" height="370px" alt="">
								<div class="service-icon">
									<img src="assets/images/resource/srv-icon2.png" alt="">
								</div>
							</div>
							<div class="service-content">
								<div class="service-icon2">
									<i class="bi bi-plus"></i>
								</div>
								<h3 class="service-title"><a href="service-details.html">Water Treatment</a></h3>
								<ul class="service-list2">
									<li> <i class="bi bi-check-lg"></i> Improved Water Quality</li>
									<li> <i class="bi bi-check-lg"></i> Health Protection</li>
									<li> <i class="bi bi-check-lg"></i> Community Well-being</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	{{-- ==================================================
	 			Start lifemade Faq Section  
	================================================== --}}

	<div class="faq-section">
		<div class="container">
			<div class="row faq-bg">
				<div class="col-lg-6">
					<div class="hendrio-section-title ">
						<h4> Frequently Questions </h4>
						<h1> We’re Ready to <span>Answer</span> </h1>
						<h1 class="sections">Your Questions</h1>
						<p>Welcome to our FAQ section! Here, you'll find quick answers to common questions about our water farm and services. Discover more about our water treatment, delivery, sustainability practices, and more. If you need further assistance, don't hesitate to contact us directly.</p>
						<div class="hendrio-button">
							<a href="/contact">Get An Estimate <i class="bi bi-plus"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<!-- Start Accordion -->
					<div class="tab_container">
	                    <div id="tab1" class="tab_content">
	                         <ul class="accordion">
		                        <li>
		                            <a><span> What are your delivery options and areas of service? </span></a>
		                            <p>We offer door-to-door delivery services across the country. Our delivery options include standard delivery, express delivery, and scheduled deliveries to accommodate your preferences and needs.</p>
		                        </li>
		                        <li>
		                            <a><span> How does your water treatment process ensure the quality of the water? </span></a>
		                            <p>Our water treatment process involves multiple stages of filtration, purification, and disinfection using advanced technologies. We regularly test and monitor water quality parameters to ensure compliance with safety standards and regulations.</p>
		                        </li>
		                        <li>
		                            <a><span> Is the water from your water farm safe for drinking? </span></a>
		                            <p>Yes, absolutely. Our water undergoes rigorous testing and treatment processes to ensure it is safe, clean, and free from contaminants. We prioritize water safety and adhere to strict quality control measures to guarantee the purity of our water products.</p>		                       
	                            </li>
		                    </ul>
	                    </div>
	                </div>
					<!-- End Accordion -->
				</div>

				<div class="faq-shape">
					<img src="assets/images/resource/faq1.png" alt="">
				</div>
			</div>
		</div>
	</div>

	{{-- ==================================================
			Start lifemade Call To Action Section
	================================================== --}}


		<!--==================================================-->
	<!-- Start hendrio Blog Section  -->
	<!--==================================================-->

	{{-- <div class="blog-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="hendrio-section-title text-center padding-lg">
						<h4> Our Blog </h4>
						<h1> Our Recent Blog  <span>Post</span> </h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="blog-thumb">
							<img src="assets/images/resource/blog1.jpg" alt="">
							<div class="meta-blog">
								<a href="#"> By Admin</a>
							</div>
						</div>
						<div class="blog-content">
							<h2 class="blog-title"><a href="blog-details.html">Top 5 Secrete Home Repairing Tips Discussions</a></h2>
							<div class="blog-btn">
								<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="blog-thumb">
							<img src="assets/images/resource/blog2.jpg" alt="">
							<div class="meta-blog">
								<a href="#"> By Admin</a>
							</div>
						</div>
						<div class="blog-content">
							<h2 class="blog-title"><a href="blog-details.html">10 Most Popular Comod Clean Styles for your Home</a></h2>
							<div class="blog-btn">
								<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="blog-thumb">
							<img src="assets/images/resource/blog3.jpg" alt="">
							<div class="meta-blog">
								<a href="#"> By Admin</a>
							</div>
						</div>
						<div class="blog-content">
							<h2 class="blog-title"><a href="blog-details.html">Repairing Your Home Pipeline Using Equipments</a></h2>
							<div class="blog-btn">
								<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}







@endsection