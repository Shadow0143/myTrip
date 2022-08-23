<?php
$setting = DB::select('SELECT * FROM settings');
?>
{{-- <section class="client-section style-2 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="client_carousel" class="owl-carousel">
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{ asset('package/1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{ asset('package/2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{ asset('package/3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{ asset('package/4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{ asset('package/5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{asset('package/6.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-img-item">
                            <img src="{{asset('package/3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <div class="whats-app-link">
    <a href="https://api.whatsapp.com/send?phone=919836117777">
        <img src="{{asset('/images/whatsapp.png')}}" alt="">
    </a>
</div>
<div class="call-phone">
    <a href="tel:9836117777">
        <img src="{{asset('/images/call-phone.png')}}" alt="">
    </a>
</div> --}}
<footer class="bg-faded pt-20 pb-10 bg-theme-color-2">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-item footer-widget-one">
                        {{-- <img class="footer-logo mb-25" src="{{ asset('images/meilleur-holidays-logo.jpg') }}" alt="">
                        <p>Meilleur Holidays' is a traveler's companion for leisure as well as a business trip. It offers comprehensive guidance for getting the best deals and discounts in air, train, bus tickets, and hotel bookings.</p>
                        <hr> --}}
                        <h6>Follow<span> Us</span></h6>
                        <ul class="social-icon bg-transparent bordered-theme">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Hot <span>Deals</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <ul class="footer-list">
                            <li><a href="{{url('/packages/bangkok-pattaya-tour-package')}}">Bangkok Pattaya Tour</a></li>
                            <li><a href="{{url('/packages/phuket-krabi-holiday-package-tour-from-india')}}">Phuket Krabi Tour</a></li>
                            <li><a href="{{url('/packages/arunachal-pradesh-tour-package')}}">Arunachal Pradesh Package</a></li>
                            <li><a href="{{url('/packages/tea-tourism-the-reserve-fagu-heritage-british-tea-bungalow')}}">The Reserve Fagu Tea Tour</a></li>
                            <li><a href="{{url('/packages/tumsong-tea-estate-bungalow-resort-booking')}}">Tumsong Tea Estate Tour</a></li>
                            
                        </ul>
                    </div>
                </div> --}}
                <div class="col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Usefull <span>Links</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <ul class="footer-list">
                            <li><a href="{{route('aboutUs')}}">About Us</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-item">
                        <div class="footer-title">
                            <h4>Quick <span>Contact</span></h4>
                            <div class="border-style-3"></div>
                        </div>
                        <ul class="footer-list footer-contact mb-10">
                            {{-- <li><i class="pe-7s-call"></i> Phone: {{ $setting[0]->contactNumber}}</li> --}}
                            <li><i class="pe-7s-call"></i> Phone: +91-9830243235</li>
                            {{-- <li><i class="pe-7s-mail"></i> <a href="mailto:">Email: {{ $setting[0]->email}}</a></li> --}}
                            <li><i class="pe-7s-mail"></i> <a href="mailto:">Email: addul.barik@gmail.com</a></li>
                        </ul>
                        {{-- <div class="footer-item">
                            <h6>News <span>letter</span></h6>
                                <div class="input-group subscribe-style-two">
                                    <input type="email" id="subscriberEmail" name="subscriberEmail" class="form-control input-subscribe" placeholder="Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-subscribe" id="subscribeBtn" type="button">Subscribe</button>
                                    </span>
                                </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="footer-copy-right bg-theme-color-2 text-white p-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>© 2022, All Rights Reserved, Design & Developed By:<a href="https://www.shakil@gmail.com/"> Shakil Ahmad </a></p>
            </div>
        </div>
    </div>
</section>
