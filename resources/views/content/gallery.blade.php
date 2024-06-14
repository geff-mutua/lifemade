@extends('layouts.master')
@section('title', 'Our Gallery Us')

@section('content')
    <div class="breatcam-section d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breatcam-content">
                        <h1> Gallery </h1>
                        <ul>
                            <li><a href="{{route('home')}}"> <i class="fas fa-home"></i> Home</a></li>
                            <li> Gallery </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shops-section">
		<div class="container">
			<div class="row products">
				<div class="col-lg-12">
					<!-- Tab -->
					<div class="tab">
						<div class="nav-btn navSidebar-button"><a href="#"><i class="fas fa-align-left"></i> Show filters</a></div>
						<div class="widget">
							<form action="#">
								<select name="cars" id="cars">
									<option value="7days">Default Sorting</option>
							
								</select>
							</form>
						</div>
						<ul class="tabs">
							<li><a href="#"><i class="bi bi-x-diamond"></i></a></li>
						</ul> <!-- / tabs -->

						<div class="tab_content">
							<!-- / tabs_item -->
							<div class="tabs_item">
								<div class="row">
									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/17.jpeg')}}" height="185"  alt="">
												
											</div>
											
										</div>
									</div>

									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/19.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>

                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/18.jpeg')}}" height="185" alt="">
												
											</div>
											
										</div>
									</div>


									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/20.jpeg')}}" height="185" alt="">
												
											</div>
											
										</div>
									</div>


									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/14.jpeg')}}" height="350" alt="">
												
											</div>
											
										</div>
									</div>


                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/25.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>


                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/24.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>


									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/7.jpeg')}}" height="350" alt="">
												
											</div>
											
										</div>
									</div>

                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/9.jpeg')}}" height="100" alt="">
												
											</div>
											
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/11.jpeg')}}" height="100" alt="">
												
											</div>
											
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/10.jpeg')}}" height="100" alt="">
												
											</div>
											
										</div>
									</div>
                                   
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/12.jpeg')}}" height="100" alt="">
												
											</div>
											
										</div>
									</div>


									<div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/20.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/21.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/22.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<!-- products thumb -->
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/23.jpeg')}}" alt="">
												
											</div>
											
										</div>
									</div>

                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/2.jpeg')}}" alt="">
												
											</div>
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/3.jpeg')}}" alt="">
												
											</div>
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/4.jpeg')}}" alt="">
												
											</div>
										</div>
									</div>
                                    <div class="col-lg-3 col-md-6">
										<div class="single-products-box">
											<div class="products-thumb">
												<img src="{{asset('assets/images/gallery/5.jpeg')}}" alt="">
												
											</div>
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
@endsection
