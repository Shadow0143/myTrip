@extends('layouts.app')
@section('metades')
<meta name="description" content="The best Travel Agents in India. FOR BOOKING ☎ CALL +91-9836-11-7777" />
<meta name="author" content="Meilleur Holidays" />
<meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
<title>Terms Conditions -Travel Agents in Kolkata - Meilleur Holidays</title>
@endsection
@section('css')
<style>
    p {
        color: #767676;
        text-align: justify;
        margin-top: 15px;
    }

    .tour-privacy img {
        width: 100%;
        height: 300px;
    }

    .tour-privacy h3 {
        text-align: center;
        font-size: 30px;
        font-family: sans-serif;
        font-weight: 100;
        margin-top: 15px;
    }

    .tour-privacy-text {
        border-top: dotted 1px black;
        border-bottom: dotted 1px #000;
        padding: 10px;
        margin-top: 25px;
    }

    .tour-privacy-text span {
        color: #0376ab;
        font-size: 20px;
    }

    .tour-privacy-text i,
    a {
        color: #000;
        padding: 0px 3px;
    }

    .tour-privacy-call {
        float: right;
    }

    .tour-privacy-content p {
        border-bottom: 1px solid #dfdede;
        padding: 15px 0px;
        color: #767676;
        font-family: lora;
        text-align: justify;
    }


    .tour-privacy-btn {
        background: #e39a3f;
        border: 1px solid #a35b01;
        padding: 8px 30px;
        margin-bottom: 10px;
        color: #ffffff;
        font-size: 16px;
        border-radius: 5px;
    }

    .tour-privacy-btn:hover {
        background: #a35b01;
        font-size: 16px;
    }

    .tour {
        border-top: dotted 1px black;
        margin-top: 15px;
        padding: 20px 0px;
    }

    .tour p {
        color: #0376ab;
        font-size: 16px;
        font-family: 'Roboto';
        text-align: justify;
    }

    .tour-refunds {
        border-bottom: 1px solid #dfdede;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .tour-refunds p {
        color: #767676;
        text-align: justify;
        margin-top: 15px;
    }

    .tour-refunds h4 {
        margin-bottom: 20px;
    }

    .tour-refunds h2 {
        font-size: 22px;
        font-weight: 600;
    }
</style>
@endsection
@section('content')
<section>
    <div class="header-top">
        <div class="tour-privacy">
            <img src="{{ asset('images/tc.jpg') }}">
            <h3>TERMS & CONDITIONS</h3>
        </div>
    </div>
    <div class="container">
        <div class="tour-privacy-text">
            <span><a href="">Home</a><i class="fa fa-angle-double-right"></i>Terms Conditions</span>
            <span class="tour-privacy-call">Call: (+91) 9836-11-7777</span>
        </div>
        <div class="tour">
            <h4>DOCS REQUIRE for bookings:-</h4>
            <p>Photo ID proof (Driving license /Passport/Aadhar Card/Ration card/Voter card)
For Child – who does not have any ID proof – Date of birth certificate is mandatory.</p>
        </div>
        <div class="tour-privacy-content">
        <h4>TERMS & CONDITIONS:</h4>
            <p><b>1.</b>Meilleurholidays reserves the right to re-arrange itinerary to suit hotel availability without
changing the total number of days in each destination and without compromising any services.</p>
            <p><b>2.</b>The vehicle used is AC/NAC and is available for point to point services only and is not at disposal.
Clients are requested to follow the itinerary.</p>
            <p><b>3.</b>Payment of 25% of Package Cost at the time of booking and balance within 7 days prior travel
date. Booking is confirmed on payment of booking amount. Peak season / Blackout dates need
100% payment.</p>
            <p><b>4.</b> Cancellation Policy:
                o Less than 7 Days Prior to Date of Travel: 100% of the Package Cost as cancellation
charge
                o 7 – 15 Days Prior to Date of Travel: 75% of the Package Cost as cancellation charge
                o 16 - 30 Days Prior to Date of Travel: 50% of Package Cost as cancellation charge
                o More than 30 Days: Full Refund of Package Cost Excluding Processing Fees @ Inr: 1000/-
per head.
            </p>
            <p><b>5.</b> * Corporate / fixed group tours and tour packages on blackout days (Respective areas festival
days) 100 % non-refundable , airlines as per airlines policy excluding service charges as
applicable |</p>
        </div>
        <div class="tour-refunds">
            <h4>PAYMENT TERMS:</h4>
            <p>  25 % at the time of booking and balance 10 days prior travel date.
All bookings are on special corporate non-refundable basis.
            </p>
            <h4>CONFIRMATION & RATE:</h4>
            <p>No bookings are guaranteed without advance payment and rate
subject to availability.
            </p>
            <h4>INFORMATION NEEDED:</h4>
            <p>Accurate Arrival and Departure timing to be informed in advance.
            </p>
        </div>
        <div class="tour-refunds">

            <p>For More details log-in to		:	 www.meilleurholidays.com</p>
            <p>Email your query at 		        :	info@meilleurholidays.com </p>
            <p>24 x 7 Sales & Support no		:	 +91-98361177777</p>
             <p>Ho land line no 				:	033-40048302 / 35590333</p>

                    </div>
        <div class="text-center" style="margin-top: 50px;">
            <a class="tour-privacy-btn" href="{{url('/contact')}}">Click to Get a Call Back</a>
        </div>
    </div>
</section>
@endsection
@section('js')
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
        $('#navbar-collapse-1 ul.navbar-nav li.nav-item-home').addClass('active');
    });
</script>
@endpush