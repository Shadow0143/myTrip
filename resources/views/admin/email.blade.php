@extends('admin.layouts.app')
@section('metades')
    <meta name="description" content="Meilleur Holidays: Travel Company in Kolkata" />
    <meta name="author" content="Meilleur Holidays: Travel Company in Kolkata" />
    <meta name="keywords" content="Meilleur Holidays: Travel Company in Kolkata" />
@endsection
@section('title')
    <title>Meilleur Holidays: Travel Company in Kolkata</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('Compose') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Compose') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mailform45">
                            <table width="100%">
                                <tr>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Package Name:</label>
                                            <select name="package" id="package" class="form-control">
                                                @foreach ($QuotationTemplate as $key => $val)
                                                    <option value="{{ $val->packageName }}">{{ $val->packageName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Location:</label><input type="text" name="location" id="location" value="" class="form-control">
                                        </div>
                                    </td>
                                    <td style="width:34%">
                                        <div class="field_row01">
                                            <label>No of Nights:</label><input type="text" id="noOfNights" name="noOfNights" value="" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Hotel Types:</label>
                                            <select name="hotelType123" id="hotelType123" class="form-control">
                                                <option value="Delux Hotel">Delux Hotel</option>
                                                <option value="3 Star Hotel">3 Star Hotel</option>
                                                <option value="4 Star Hotel">4 Star Hotel</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Hotel Name:</label><input type="text" id="hotelName123" name="hotelName123" value="" class="form-control">
                                        </div>
                                    </td>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>No of PAX:</label><input type="text" id="noOfPax" name="noOfPax" value="" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Car Types:</label>
                                            <select name="carType123" id="carType123" class="form-control">
                                                <option value="Hatchback">Hatchback</option>
                                                <option value="Sedan">Sedan</option>
                                                <option value="SUV">SUV</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Car Name:</label><input type="text" name="carName" value="" class="form-control">
                                        </div>
                                    </td>
                                    <td style="width:33%">
                                        <div class="field_row01">
                                            <label>Pick Up:</label>
                                            <input type="date" name="pickUp" id="pickUp" value="" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary" id="generate"><i class="far fa-envelope"></i>{{ __('Generate') }}</button>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <form action="{{ route('saveQuotation') }}" method="post">
                                @csrf
                                <div class="card-header">
                                    <h3 class="card-title">{{ __('Compose New Message') }}</h3>
                                </div>
                                <div class="card-body">
                                    @if(!empty($leadmaster['enqueryId']))
                                    <input type="hidden" value="{{ $leadmaster['enqueryId'] }}" name="enqId" id="enqId">
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control" placeholder="To:" value="{{ $leadmaster['email'] }}" id="mailto" name="mailto">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="emailBody" name="emailBody" class="form-control" style="height: 300px">
                                        
                                    </textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary" id="sendMail"><i class="far fa-envelope"></i>{{ __('Send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card card-primary card-outline">
                            <ul>
                                @foreach ($Quotation as $Quo)
                                    <a href="{{route('quotationPdf',['quotationLink'=>$Quo->quotationLink])}}"><li>{{$Quo->quotationLink}}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@push('scripts')
    {{-- <script>
        $('#getContent').click(function() {
            var price = $('#ammountRecived').val()
            var bank = $('bank').val()
            var ref = $('ref').html()
            var html = `<table align="center" border="0" cellpadding="2" style="width:450px">
                            <tbody>
                                <tr>
                                    <td>
                                        <table border="0" cellpadding="2" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td><a href="{{ url('/') }}" target="_blank"><img src="{{ asset('images/meilleur-holidays-logo.jpg') }}" style="height:92px; width:150px"></a></td>
                                                    <td><img src="{{ asset('images/travel-adviser-logo.jpg') }}" style="height:53px; width:200px"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:1px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="text-align:justify">
                                        <p>&nbsp;<strong><u>THAILAND PACKAGE ITINARARY</u></strong>&nbsp;</p>
                                        <p><strong>Package Name:</strong> Thai Paradise</p>
                                        <p><strong>Destination:</strong> BANGKOK, PATTAYA, PHUKET</p>
                                        <p><strong>Duration:</strong>&nbsp; 5NIGHTS &amp;&nbsp; 6DAYS.</p>
                                        <p><strong>No of Pax:</strong>&nbsp; 2Adults + 1 Child (3-year-old)</p>
                                        <p><strong>Date of travel:</strong> May 2<sup>nd</sup> week preferably Friday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><strong>Quotation Date:</strong>&nbsp; 2022 @ Hours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        <p><strong>Inquiry No:</strong>&nbsp;&nbsp; 44192093</p>
                                        <p><strong>Nationality:</strong>&nbsp;Indian&nbsp;</p>
                                        <p>Hotel Info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>: 03 NIGHTS AT PATTAYA</strong><strong>&nbsp; @ </strong><strong>&nbsp;(</strong><strong>*)</strong></p>
                                        <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>: 02 NIGHTS AT PHUKET</strong><strong>&nbsp; @ </strong><strong>&nbsp;(</strong><strong>*)</strong></p>
                                        <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 01 NIGHTS AT BANGKOK&nbsp;&nbsp; @</strong> <strong>(*)</strong></p>
                                        <p><strong>[HOTEL PICS HERE]</strong><strong>&nbsp;</strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong><u>PACKAGE 1 –</u></strong></p>
                                        <p><strong><u>2 NIGHTS PHUKET, 2 NIGHTS PATTAYA, 1 NIGHT BANGKOK</u></strong></p>
                                        <p><strong>DAY 1: ARRIVAL AT PHUKET. PRIVATE TRANSFERS TO PHUKET HOTEL [EVENING: FREE FOR LEISURE OR OPTIONAL: PHUKET FANTASEA SHOW]</strong></p>
                                        <p>On arrival at Phuket airport, you will meet our representative near the exit area with your name placard. He will further assist you with private transfers to the Phuket hotel.&nbsp;</p>
                                        <p>Arrive at the resort, check in, and freshen up. Lunch will be on its own at the resort or nearby restaurant to the resort.</p>
                                        <p>Evening: Is free for leisure to explore Phuket town, local markets, and the walking street by self. OR you can enjoy the Phuket FantaSea show with dinner (an additional cost of INR 4700 per person).&nbsp; Overnight stay at Phuket.</p>
                                        <p><strong>DAY 2: PHUKET [PHI PHI ISLAND TOUR BY BIG BOAT WITH BUFFET INDIAN LUNCH]</strong></p>
                                        <p>After breakfast, you will be transferred to Phi-Phi Island. Enjoy the beach with the local lunch. A Phi Phi Island tour is the most popular activity in the region. Phi Phi Islands are situated 40&nbsp;km south-east of Phuket and consist of six islands. The major ones are Phi Phi Don, which hosts the bohemian town of Phi Phi Islands, and Phi Phi Leh with Maya Bay which is featured in the movie 'The Beach'. Phi Phi Islands are famous for their limestone cliffs rising sheer out
                                            of the emerald green waters, white powdery beaches, and its many coral reefs offering great diving and snorkeling. All Phi Phi Island tours will take you for great sightseeing, swimming, and snorkeling at Maya Bay, Loh Samah Bay, Pileh Cove, Viking Cave, and Monkey Beach. Overnight stay at the hotel in Phuket.</p>
                                        <p><strong>DAY 3:</strong><strong>&nbsp; ARRIVAL IN BANGKOK [PRIVATE TRANSFERS TO PATTAYA] [EVENING: ALCAZAR SHOW]</strong></p>
                                        <p>On arrival at Suvarnabhumi International airport, you will meet our representative near the exit area with your name placard. He will further assist you with private transfers to Pattaya (by surface 1hr 20 mins approx.).</p>
                                        <p>Arrive at the hotel, check in, and freshen up. Lunch will be on its own at the resort or nearby restaurant to the resort.</p>
                                        <p>Evening: enjoy ‘The Alcazar Show’. The Alcazar is a unique blend of acting, stage design, costumes, and glamorous actors performing together in a mesmerizing mélange of light, sound, and color. After the scintillating Alcazar experience, enjoy your overnight stay at Pattaya.</p>
                                        <p><strong>DAY 4: PATTAYA [Coral Island TOUR WITH INDIAN LUNCH]</strong></p>
                                        <p>Enjoy your breakfast and then speedboat your way into the sparkling blue waters of the Gulf of Thailand to reach the serene Coral Island, known as Koh Lan. Enjoy the water sports like snorkeling, parasailing, water scooter, etc at Coral Island (<strong>water sports a spot payment</strong>) OR simply laze at the beach. Lunch will be on the beach. Post-tour, drop off at the hotel.</p>
                                        <p>The evening will be at leisure. Alternatively, you can opt for optional tours like Art In Paradise or Ripley’s Believe it or not. Overnight stay at hotel.</p>
                                        <p><strong>DAY 5: PATTAYA – TRANSFERS TO BANGKOK [HALF DAY TEMPLE CITY TOUR]</strong></p>
                                        <p>After breakfast, check out from Pattaya hotel and transfer to Bangkok. After arrival in Bangkok, enjoy a half-day Bangkok city tour which includes a visit to Golden Buddha followed by Principle Buddha and a visit to the biggest Gems gallery in the world.</p>
                                        <p>Evening: At leisure for shopping or alternate visit to Chaopharaya dinner cruise (additional cost 3000 INR) Overnight stay at Bangkok.</p>
                                        <p><strong>DAY 6: BANGKOK – [DEPARTURE TRANSFERS TO Airport]</strong></p>
                                        <p>After breakfast check out of the hotel and transfer to the airport to board your flight to India with fond memories of your tour.</p>
                                        <p>&nbsp;<strong><u>PACKAGE 2 –</u></strong></p>
                                        <p><strong><u>3 NIGHTS PATTAYA, 1 NIGHT BANGKOK, 1 NIGHT PHUKET.</u></strong></p>
                                        <p><strong>DAY 1: ARRIVAL IN BANGKOK [PRIVATE TRANSFERS TO PATTAYA] [EVENING: ALCAZAR SHOW]</strong></p>
                                        <p>On arrival at Suvarnabhumi International airport, you will meet our representative near the exit area with your name placard. He will further assist you with private transfers to Pattaya (by surface 1hr 20 mins approx.).</p>
                                        <p>Arrive at the hotel, check-in, and freshen up. Lunch will be on its own at the resort or nearby restaurant to the resort.</p>
                                        <p>Evening: enjoy ‘The Alcazar Show’. The Alcazar is a unique blend of acting, stage design, costumes, and glamorous actors performing together in a mesmerizing mélange of light, sound, and color. After the scintillating Alcazar experience, enjoy your overnight stay at Pattaya.</p>
                                        <p><strong>&nbsp;</strong><strong>DAY 2: PATTAYA [Coral Island TOUR WITH INDIAN LUNCH]</strong></p>
                                        <p>Enjoy your breakfast and then speedboat your way into the sparkling blue waters of the Gulf of Thailand to reach the serene Coral Island, known as Koh Lan. Enjoy the water sports like snorkeling, parasailing, water scooter, etc at Coral Island (<strong>water sports a spot payment</strong>) OR simply laze at the beach. Lunch will be on the beach. Post-tour, drop off at the hotel.</p>
                                        <p>The evening will be at leisure. Alternatively, you can opt for optional tours like Art In Paradise or Ripley’s Believe it or not. Overnight stay at hotel.</p>
                                        <p><strong>DAY 3: PATTAYA – NONG NOOCH VILLAGE</strong> <strong>[HALF DAY TOUR]</strong></p>
                                        <p>The beautifully landscaped private park offers a glimpse of multiple themed gardens on shaded elevated walkways. Choose a morning or afternoon departure with round-trip hotel transport to Nong Nooch village and see the Topiary Garden, the Orchid Nursery, a Recreation of Stonehenge, and more! Your guide accompanies you to the Thai Cultural Hall to watch daily performances including classical Thai Dance, Sword Fighting, and Kickboxing as well as a popular elephant show</p>
                                        <p><strong>DAY 4: ARRIVAL AT PHUKET. PRIVATE TRANSFERS TO PHUKET HOTEL [EVENING: FREE FOR LEISURE OR OPTIONAL: PHUKET FANTASEA SHOW]</strong></p>
                                        <p>On arrival at Phuket airport, you will meet our representative near the exit area with your name placard. He will further assist you with private transfers to the Phuket hotel.</p>
                                        <p>Arrive at the resort, check in, and freshen up. Lunch will be on its own at the resort or nearby restaurant to the resort.</p>
                                        <p>Evening: Is free for leisure to explore Phuket town, local markets, and the walking street by self. OR you can enjoy the Phuket FantaSea show with dinner (an additional cost of INR 4700 per person).&nbsp; Overnight stay at Phuket.</p>
                                        <p><strong>DAY 5: PATTAYA – TRANSFERS TO BANGKOK [HALF DAY TEMPLE CITY TOUR]</strong></p>
                                        <p>After breakfast, check out from Pattaya hotel and transfer to Bangkok. After arrival in Bangkok, enjoy a half-day Bangkok city tour which includes a visit to Golden Buddha followed by Principle Buddha and a visit to the biggest Gems gallery in the world.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>DAY 6: BANGKOK – [DEPARTURE TRANSFERS TO Airport]</strong></p>
                                        <p>After breakfast check out of the hotel and transfer to the airport to board your flight to India with fond memories of your tour.</p>
                                        <p>Evening: At leisure for shopping or alternate visit to Chaophraya dinner cruise (additional cost 3000 INR) Overnight stay in Bangkok.</p>
                                        <p>&nbsp;<strong><u>FLIGHT DETAILS</u></strong></p>
                                        <p><strong>KOLKATA TO PHUKET FLIGHT DETAILS:</strong></p>
                                        <table style="width:712px">
                                            <tbody>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <p><strong>PHUKET TO BANGKOK FLIGHT DETAILS:</strong></p>
                                        <table style="width:712px">
                                            <tbody>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>BANGKOK TO KOLKATA FLIGHT DETAILS:</strong></p>
                                        <table style="width:712px">
                                            <tbody>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                    <td>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <p><strong><u>PACKAGE COST-BASED AND VALID FOR 02 ADULTS</u></strong><strong>&nbsp;</strong></p>
                                        <table style="width:726px">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p><strong>PARTICULARS</strong></p>
                                                    </td>
                                                    <td>
                                                        <p><strong>COST PER PERSON</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>LAND PACKAGE COST</strong> PER ADULT [PAX]</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>ADDITIONAL CHARGES</strong></p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>AIR PACKAGE COST </strong>PER ADULT [PAX]</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>TCS %</strong></p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>GST %</strong></p>
                                                    </td>
                                                    <td>
                                                        <p>INR /-</p>
                                                        <p>INR –</p>
                                                        <p>INR -</p>
                                                        <p>5%</p>
                                                        <p>5%</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; <strong>TOTAL PACKAGE COST FOR PER ADULT</strong></p>
                                                        <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [INCLUSIVE OF ALL TAXES]</strong></p>
                                                    </td>
                                                    <td>
                                                        <p><strong>INR </strong></p>
                                                        <p><strong>&nbsp;</strong></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p><strong><u>**</u></strong><strong><u> COST IS BASED ON ADULTS per head </u></strong></p>
                                        <p><strong>&nbsp;</strong></p>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p><strong>INCLUSIONS:</strong></p>
                                                        <ul>
                                                            <li>Day 1 RT PCR Test.</li>
                                                            <li><strong>Bangkok Airport-Pattaya-Bangkok Airport transfers on a Private basis</strong></li>
                                                            <li>0/0 Nights’ accommodation</li>
                                                            <li>Daily breakfast at hotels</li>
                                                            <li>Alcazar show Pattaya</li>
                                                            <li>Coral island by speedboat with lunch on SIC (<strong>Seat-In-Coach</strong>) basis</li>
                                                            <li>Bangkok city tour</li>
                                                            <li>Safari and Marine Park with Lunch on SIC basis.</li>
                                                            <li>All Airport –Hotel –Airport transfer on a Private Basis</li>
                                                            <li>Bangkok City Tour</li>
                                                            <li>Nong Much Village Pattaya on SIC basis</li>
                                                            <li>English speaking guide</li>
                                                            <li><strong>All entry fees as per the mentioned itinerary are included</strong>.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p><strong>EXCLUSION</strong></p>
                                                        <ul>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Airfare</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Visa charges</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; National Park fees if you do snorkeling</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Cost of Meals other than those specified in inclusions.</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Cost of foreign exchange for personal expenses</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Expenses of personal nature, mini bar in the room, laundry, telephone bills, tips, gratuities, etc</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Surcharges applicable during Conventions, Special Events, and Trade fairs</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Early check-in and late check-out are on a request basis only and subject to room availability</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Cost of any other services not specifically mentioned in inclusions</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Any increase in the cost that may come into force before the departure date including change in price</li>
                                                            <li>&nbsp;&nbsp;&nbsp;&nbsp; Fluctuation in the rate of exchange</li>
                                                        </ul>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p><strong><u>Terms &amp; Conditions:</u></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; Meilleur reserves the right to re-arrange the itinerary to suit hotel availability without changing the total number of days in each destination and without compromising any services.</p>
                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp; The vehicle used is AC and is available for point-to-point services only and is not at disposal. Clients are requested to follow the itinerary.</p>
                                                        <p><strong>NOTE: </strong></p>
                                                        <ul style="list-style-type:square">
                                                            <li>Hotel accommodations are strictly subject to availability at the time of booking.</li>
                                                            <li>The above is just a quote and we are not holding any booking in the guest’s name.</li>
                                                            <li><strong>Standard check-in time is 14.00 hrs and checkout time is 12.00 hrs.</strong></li>
                                                            <li>The rate of exchange on the day of final payment applies.</li>
                                                            <li>Day by day activity might change.</li>
                                                            <li>Rates are given on a sic basis. Any private transfer supplement requires as per flight schedule will have to pay extra.</li>
                                                            <li>Any change in no. of pax, duration, and date of the journey will attract a re-quote.</li>
                                                        </ul>
                                                        <p>&nbsp;</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>&nbsp;</p>
                                        <p><strong><u>Payment Terms</u></strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
                                        <ul>
                                            <li>25% at the time of booking, 50% - 30 days prior departure, and balance 25% - 15 days before travel date.</li>
                                            <li>50% for peak period booking</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>
                                        <p><strong>Cancellation Policy: </strong></p>
                                        <ul>
                                            <li>Less than 10 Days Before Date of Travel: 100% of the Package Cost as cancellation charge</li>
                                            <li>10 – 20 Days Before Date of Travel: 75% of the Package Cost as cancellation charge</li>
                                            <li>21 - 30 Days Before Date of Travel: 50% of Package Cost as cancellation charge</li>
                                            <li>More than 30 Days: Full Refund of Package Cost Excluding Processing Fees</li>
                                        </ul>
                                        <p><br></p>
                                        <p>For more details log in to&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <a href="http://www.meilleurholidays.com">www.meilleurholidays.com</a></p>
                                        <p>You can call at&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; 033-40048302</p>
                                        <p>Email your query at&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <a href="mailto:info@dmeilleurholidays.com">info@dmeilleurholidays.com</a></p>
                                        <p>For urgency, you can call&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : +91-9836117777</p>
                                        <p><br></p>
                                        <p>&nbsp; Note: The above is just a quotation and not a confirmation and rates are subject to change as per the availability of the Hotel rooms. Hotel rooms are subject to availability at the time of booking and rates are subject to change without any prior notice. The R.O.E is subject to change every day until the final payments are made.&nbsp;</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" cellpadding="2" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align:left">For Booking Call / Whatsapp:</td>
                                                    <td style="text-align:left">&nbsp;Email:</td>
                                                    <td style="text-align:left">&nbsp;web:</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="tel:9836117777" style="color:#FFFFFF;font-weight:bold; text-align:left; font-size:16px; text-transform:uppercase; text-decoration:none;">+91-9836-11-7777</a></td>
                                                    <td><a href="mailto:info@meilleurholidays.com" style="color:#FFFFFF;font-weight:bold; text-align:left; font-size:16px; text-decoration:none;">info@meilleurholidays.com</a></td>
                                                    <td><a href="https://www.meilleurholidays.com/" style="color:#FFFFFF;font-weight:bold; text-align:left; font-size:16px; text-decoration:none;" target="_blank">www.meilleurholidays.com</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>`
            $('#emailBody').summernote("code", html)
        })
    </script> --}}
    <script type="text/javascript">
        $(function() {
            $('#emailBody').summernote()
        })
        $('#sendMail').click(function() {
            var mailto = $('#mailto').val();
            var subject = $('#subject').val();
            var message = $('#compose-textarea').val();
            $.ajax({
                url: "{{ route('sendEmail') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "mailto": mailto,
                    "subject": subject,
                    "message": message
                },
                success: function(data) {
                    if (data.code == 200) {
                        swal("Congratulation!", data.msg, "success");
                    } else {
                        swal("Sorry!", data.msg, "error");
                    }
                }
            });
        });
    </script>
    <script>
        $('#generate').click(function() {
            var location = $('#package').val();
            var noOfNights = $('#noOfNights').val();
            var package = $('#package').val();
            var noOfPax = $('#noOfPax').val();
            var enqId = $('#enqId').val();
            var pickUp = $('#pickUp').val();
            var hotelName123 = $('#hotelName123').val();
            var hotelType123 = $('#hotelType123').val();
            // var QuotationDate12 = new Date();
            var nowDate = new Date();
            var QuotationDate12 = nowDate.getFullYear() + '/' + (nowDate.getMonth() + 1) + '/' + nowDate.getDate();
            // var package = $('#package').val();
            // var package = $('#package').val();
            // var package = $('#package').val();
            // alert(package);
            $.ajax({
                url: "{{ route('emailDadta') }}",
                type: "GET",
                data: {
                    id: package
                },
                success: function(data) {
                    $('#emailBody').summernote("code", data);
                    $('#packageName').html(location);
                    $('#duration').html(noOfNights);
                    noOfPaxS
                    $('#noOfPaxS').html(noOfPax);
                    $('#EnquiryId12').html(enqId);
                    $('#DateOfTravel').html(pickUp);
                    $('#QuotationDate').html(QuotationDate12);
                    $('#HotelInfo').html(hotelName123);
                    $('#hotelType').html(hotelType123);
                }
            });
        });
    </script>
@endpush
