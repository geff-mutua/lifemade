@extends('layouts.master')
@section('title','Contact Us')
@section('content')
<div class="breatcam-section style-two d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcam-content">
                    <h1> Contact Us </h1>
                    <ul>
                        <li><a href="{{route('home')}}"> <i class="fas fa-home"></i> Home</a></li>
                        <li> Contact us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us">
    <div class="container">
        <div class="row cntc-bg2">
            <div class="col-lg-7">
                <h4 class="contact-form-title">Write Us Something</h4>
                <div class="contact_from_box">
                    <form action="{{route('contact-us')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="name" placeholder="Name:">
                                    @error('name')
                                        <span style="font-size: 15px; color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-box mb-30">
                                    <input type="text" name="email"  placeholder="Email:">
                                    @error('email')
                                    <span style="font-size: 15px; color:red">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box mb-30">
                                    <input type="text" name="mobile"  placeholder="Mobile No:">
                                    @error('mobile')
                                    <span style="font-size: 15px; color:red">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-box">
                                    <select id="service" name="service">
                                      
                                        <option value="s"> Select Service* </option>
                                        <option value="select"> On Door Delivery </option>
                                        <option value="select"> Water Packaging </option>
                                        
                                    </select>
                                    @error('service')
                                    <span style="font-size: 15px; color:red">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    @error('message')
                                    <span style="font-size: 15px; color:red">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="contact-form">
                                <button type="submit"> Contact Us <i class="bi bi-arrow-right"></i> </button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
            <div class="col-lg-5">
                <div class="single-contact-info-box">
                    <div class="row">
                        <h3 class="cntc-info-title">Contact Info</h3>
                        <div class="col-lg-12">
                            <div class="contact-information2">
                                <div class="contacts-icon">
                                    <i class="bi bi-envelope-paper"></i>
                                </div>
                                <div class="contacts-title">
                                    <h5>Send E-Mail</h5>
                                    <h6>{{config('variables.email')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-information2">
                                <div class="contacts-icon upper">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="contacts-title">
                                    <h5>Call Anytime</h5>
                                    <h6>{{config('variables.contact')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-information2 upper2">
                                <div class="contacts-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="contacts-title">
                                    <h5> Locations</h5>
                                    <h6>{{config('variables.address')}} {{config('variables.location')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="follow-company-icon2">
                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                            <a href="#"> <i class="fab fa-twitter"> </i> </a>
                            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                            <a href="#"> <i class="fab fa-pinterest-p"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection