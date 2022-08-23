@extends('layouts.app')
@section('metades')
<meta name="description" content="The best Travel Agents in India. FOR BOOKING ☎ CALL +91-9836-11-7777" />
<meta name="author" content="Meilleur Holidays" />
<meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
<title>Contuct Us -Travel Agents in Kolkata - Meilleur Holidays</title>
@endsection
@section('css')
@endsection
@section('content')
<section class="inner-area parallax-bg" data-background="{{ asset('images/aboutus.jpg') }}" data-type="parallax" data-speed="3">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12">
                    <h4>Contact</h4>
                    <p>Home <a href="#">Contact</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-details pb-70">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                    <h3 class="title">Contact <span>us</span></h3>
                    @if (Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                    @endif
                    <form method="post" action="{{ route('contactSave') }}">
                        @csrf
                        <input type="hidden" name="url" id="url" value="{{ URL::previous() }}">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="f_name" id="f_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="l_name" id="l_name" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            {{-- <div class="form-group col-md-12 col-lg-12">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required>
                            </div> --}}
                            <div class="form-group col-md-12 col-lg-12">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone No" id="phone" required>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <div class="contact-textarea">
                                    <textarea class="form-control" rows="7" placeholder="Write Message" id="message" name="message" required></textarea>
                                    <button class="btn btn-theme mt-4" type="submit" value="Submit Form">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <h3 class="title">Get in <span>Touch</span></h3>
                    <div class="service-item style-1 border-1px">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-2 col-lg-2">
                                <div class="service-icon">
                                    <i class="pe-7s-clock"></i>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 col-md-10 col-lg-10">
                            <div class="content">
                                    <h5><a href="#">Abdul Barik</a></h5>
                                    <p>'$@f@r $@rth!' unit of Barik & Company<br />
                                        zabardast resturant- MEIDNAPUR, INDIA<br />
                                        CONTACT NO. : +91-9830243235<br />
                                        EMAIL :   abdul.barik@gmail.com<br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="p-0">
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.4627197558134!2d88.34910231427276!3d22.524332940418514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277605c202b0f%3A0xbfd37ac909fcf919!2s&#39;Meilleur%20Holidays&#39;%20unit%20of%20Basu%20%26%20Company!5e0!3m2!1sen!2sin!4v1658921318085!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</section> --}}
@endsection
@section('js')
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
        $('#navbar-collapse-1 ul.navbar-nav li.nav-item-contactus').addClass('active');
    });
</script>
@endpush