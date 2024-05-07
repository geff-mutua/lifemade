@extends('layouts.master')
@section('title','About Us')

@section('content')
    <div class="breatcam-section d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breatcam-content">
                        <h1> About Us </h1>
                        <ul>
                            <li><a href="index.html"> <i class="fas fa-home"></i> Home</a></li>
                            <li> About Us </li>
                        </ul>
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


    <div class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-counter-box">
						<div class="counter-icon">
							<img src="assets/images/resource/cntr-icon3.png" alt="">
						</div>
						<div class="counter-content">
							<h3 class="counter-title">Number #1</h3>
							<span class="counter-text2">Purified Drinking Water</span>
						</div>
						<div class="cntr-shape">
							<img src="assets/images/resource/cntr-shap.png" alt="">
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-counter-box">
						<div class="counter-icon">
							<img src="assets/images/resource/cntr-icon.png" alt="">
						</div>
						<div class="counter-content">
							<h3 class="counter">3,480 </h3>
							<h3 class="counter1">+</h3>
							<span class="counter-text2">Water Delivery Services</span>
						</div>
						<div class="cntr-shape">
							<img src="assets/images/resource/cntr-shap.png" alt="">
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-counter-box">
						<div class="counter-icon">
							<img src="assets/images/resource/cntr-icon2.png" alt="">
						</div>
						<div class="counter-content">
							<h3 class="counter">100 </h3>
							<h3 class="counter1">%</h3>
							<span class="counter-text2">Client Satisfaction Rate</span>
						</div>
						<div class="cntr-shape">
							<img src="assets/images/resource/cntr-shap.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="progress-section">
		<div class="container">
			<div class="row process-bg">
				<div class="col-lg-6 col-md-6">
					<div class="rs-video2">
						<div class="animate-border2">
						<a href=""></a>
						</div>
					</div>
					<div class="progress-single-box">
						<div class="progress-icon">
							<img src="assets/images/resource/prs-icon.png" alt="">
						</div>
						<div class="progress-content">
							<h4 class="progress-title">{{config('variables.site_name')}}</h4>
							<p class="progress-desc">100 % Purified water for drinking</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="progress-right-content">
						<div class="hendrio-section-title">
							<h4> Our Skill </h4>
							<h1> Quality Assurance <span>in</span> </h1>
							<h1 class="sections"> Clean Drinking Water </h1>
							<p> Through rigorous testing, advanced filtration processes, and adherence to strict regulatory standards, we ensure that every drop of water meets the highest quality and safety benchmarks.</p>
						</div>
						<div class="process-ber-plugin">
							<span class="process-bar">Purification</span>
							<div id="bar1" class="barfiller">
								<div class="tipWrap">
									<span class="tip"></span>
								</div>
								<span class="fill" data-percentage="100"></span>
							</div>	
							<span class="process-bar">Processing</span>
							<div id="bar2" class="barfiller">
								<div class="tipWrap">
									<span class="tip"></span>
								</div>
								<span class="fill upp" data-percentage="99"></span>
							</div>
							<span class="process-bar">Packaging</span>
							<div id="bar3" class="barfiller">
								<div class="tipWrap">
									<span class="tip"></span>
								</div>
								<span class="fill" data-percentage="100"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




    <div class="testimonial-section style-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="hendrio-section-title  padding-lg">
						<h4> Testimonial</h4>
						<h1> What Saying Our Clients </h1>
						<h1 class="sections"> About <span>{{config('variables.site_name')}}</span> </h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi-list2 owl-carousel">
					<div class="col-lg-12">
						<div class="teastimonial-single-box2">
							
							<div class="people-info">
								<h4 class="people-name">David M. Mutie</h4>
								{{-- <span class="user-sector">IT Manager</span> --}}
								<div class="testi-icon2">
									<i class="bi bi-quote"></i>
								</div>
							</div>
							<div class="testi-content">
								<p class="testi-desc">I've been a customer for years, and I can confidently say that their water quality is exceptional. The taste is clean and refreshing, and I appreciate their commitment to sustainability</p>
								<div class="testi-rating2">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="testi-shp">
								<img src="assets/images/resource/dot-1.png" alt="">
								<img class="dots" src="assets/images/resource/dot-2.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="teastimonial-single-box2">
							
							<div class="people-info">
								<h4 class="people-name">Alfred Kamau</h4>
								{{-- <span class="user-sector">School Principal</span> --}}
								<div class="testi-icon2">
									<i class="bi bi-quote"></i>
								</div>
							</div>
							<div class="testi-content">
								<p class="testi-desc">The door-to-door delivery service from your password has made my life so much easier. The water always arrives on time, and the convenience is unbeatable. Highly recommend</p>
								<div class="testi-rating2">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="testi-shp">
								<img src="assets/images/resource/dot-1.png" alt="">
								<img class="dots" src="assets/images/resource/dot-2.png" alt="">
							</div>
						</div>
					</div>
                    <div class="col-lg-12">
						<div class="teastimonial-single-box2">
							
							<div class="people-info">
								<h4 class="people-name">Daniel Wambua</h4>
								<span class="user-sector"></span>
								<div class="testi-icon2">
									<i class="bi bi-quote"></i>
								</div>
							</div>
							<div class="testi-content">
								<p class="testi-desc">As someone who is very conscious about water safety, I'm impressed by the rigorous testing and treatment processes at lifemade. Knowing that I'm drinking clean and safe water gives me peace of mind.</p>
								<div class="testi-rating2">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
							<div class="testi-shp">
								<img src="assets/images/resource/dot-1.png" alt="">
								<img class="dots" src="assets/images/resource/dot-2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection