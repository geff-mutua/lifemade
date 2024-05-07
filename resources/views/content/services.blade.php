@extends('layouts.master')
@section('title','Services')

@section('content')
<div class="breatcam-section style-two d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcam-content">
                    <h1> Service </h1>
                    <ul>
                        <li><a href="{{route('home')}}"> <i class="fas fa-home"></i> Home</a></li>
                        <li> Service </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-section">
    <div class="container">
        <div class="row service-bg align-items-center">
            <div class="col-lg-12">
                <div class="hendrio-section-title padding-lg">
                    <h4>OUR SERVICES</h4>
                    <h1>We Provide Best <span>Services</span></h1>
                    <h1 class="sections">in our customers </h1>
                </div>
            </div>
        </div>
        <div class="row service-bg">
            <div class="service-list owl-carousel">
                <div class="col-lg-12">
                    <div class="single-service-box">
                        <div class="service-thumb">
                            <img src="{{asset('assets/images/resource/pack.png')}}" height="370px" alt="">
                            <div class="service-icon">
                                <img src="{{asset('assets/images/resource/srv-icon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon2">
                                <i class="bi bi-plus"></i>
                            </div>
                            <h3 class="service-title"><a href="service-details.html">Water Packaging</a></h3>
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
                            <h3 class="service-title"><a href="service-details.html">On Door Delivery</a></h3>
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

<div class="why-choose-section style-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hendrio-section-title text-center padding-lg">
                    <h4> why choose us </h4>
                    <h1> Our Best Core Values </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="choose-us-single-box">
                    <div class="choose-icon">
                        <img src="assets/images/resource/choos-icon.png" alt="">
                    </div>
                    <div class="choose-us-content">
                        <h3 class="choose-title">Customer Satisfaction</h3>
                        <p class="choose-desc">Our team is committed to providing exceptional service and support, ensuring peace of mind for our clients</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-us-single-box">
                    <div class="choose-icon">
                        <img src="assets/images/resource/choos-icon2.png" alt="">
                    </div>
                    <div class="choose-us-content">
                        <h3 class="choose-title">Reliable
                        </h3>
                        <p class="choose-desc">Our track record of consistent and dependable service means you can trust us to deliver clean, safe water on time, every time.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-us-single-box">
                    <div class="choose-icon">
                        <img src="assets/images/resource/choos-icon3.png" alt="">
                    </div>
                    <div class="choose-us-content">
                        <h3 class="choose-title">Affordable</h3>
                        <p class="choose-desc">Our competitive pricing ensures that clean, safe drinking water is accessible to everyone.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-us-single-box">
                    <div class="choose-icon">
                        <img src="assets/images/resource/choos-icon4.png" alt="">
                    </div>
                    <div class="choose-us-content">
                        <h3 class="choose-title">Fast Delivery</h3>
                        <p class="choose-desc">Our efficient logistics ensure that your water reaches your doorstep in no time, so you never have to wait for clean, refreshing hydration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection