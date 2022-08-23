@extends('admin.layouts.app')
@section('metades')
    <meta name="description" content="Meilleur Holidays - Travel " />
    <meta name="author" content="Meilleur Holidays" />
    <meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
    <title>Touran - Travel & Tour HTMl5 Template</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/dropzone/min/dropzone.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lead Report</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Lead Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div id="loader">
            <img src="{{ asset('images/loader.gif') }}" alt="loader">
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header topsec47">
                                <h2 class="card-title">Online Query Form Edit</h2>
                            </div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="card-body table-responsive p-0">
                                <div class="contentbox01">
                                    <form method="POST" action="" id="formSubmit">
                                        @csrf
                                        @if (!empty($leads))
                                            @foreach ($leads as $item)
                                                <input type="hidden" name="lead_id" id="lead_id" value="{{ $item['id'] }}">
                                                <div class="row">
                                                    <div class="col-md-6 leadentry01-form">
                                                        <ul class="leadentry01">
                                                            <li>
                                                                <label>Lead Type</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="leadType" id="leadType" class="form-control full01">
                                                                        <option value="Paid Lead" {{ $item['leadType'] == 'Paid Lead' ? 'selected' : '' }}>Paid Lead</option>
                                                                        <option value="Personal Reference" {{ $item['leadType'] == 'Personal Reference' ? 'selected' : '' }}>Personal Reference</option>
                                                                        <option value="Direct Call" {{ $item['leadType'] == 'Direct Call' ? 'selected' : '' }}>Direct Call</option>
                                                                        <option value="Live Chat" {{ $item['leadType'] == 'Live Chat' ? 'selected' : '' }}>Live Chat</option>
                                                                        <option value="Mail Request" {{ $item['leadType'] == 'Mail Request' ? 'selected' : '' }}>Mail Request</option>
                                                                        <option value="Facebook" {{ $item['leadType'] == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                                                                        <option value="WhatsApp" {{ $item['leadType'] == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                                                                        <option value="Website" {{ $item['leadType'] == 'Website' ? 'selected' : '' }}>Website</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label>Customer Name <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="customerName" id="customerName" type="text" class="form-control full01" value="{{ $item['customerName'] }}" @if ($item['status'] == 'Converted') readonly @endif>
                                                                    <div class="customerName error01">
                                                                        <p class="text-danger"> The customer name field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('customerName')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>E-Mail <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="email" id="email" type="text" pattern="[^ @]*@[^ @]*"class="form-control full01" value="{{ $item['email'] }}" @if ($item['status'] == 'Converted') readonly @endif>
                                                                    <div class="email error01">
                                                                        <p class="text-danger"> The email field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('email')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                               <label>Contact Number <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55"> 
                                                                    <div class="row">
                                                                        @if($item['countryCode'] == '+91')
                                                                            <div class="col-3">
                                                                                <input type="text" name="countryCode" id="countryCode" class="form-control full01" value="{{ $item['countryCode'] }}" placeholder="+91" pattern="^\+[0-9]{1,3}$" require="require" />
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <input type="text" name="contactNumber1" id="contactNumber1" value="{{ $item['contactNumber'] }}" class="form-control full01 india " placeholder="Number" maxlength="10" onkeypress="return isNumber(event)" />
                                                                                <input type="text" name="contactNumber2" id="contactNumber2" value="" class="form-control full01 pakistan " placeholder="Number" maxlength="12" style="display:none" />
                                                                            </div> 
                                                                        @else
                                                                            <div class="col-3">
                                                                                <input type="text" name="countryCode" id="countryCode" class="form-control full01" value="{{ $item['countryCode'] }}" placeholder="+91" pattern="^\+[0-9]{1,3}$" require="require" />
                                                                            </div>
                                                                            <div class="col-9">
                                                                                <input type="text" name="contactNumber1" id="contactNumber1" value="" class="form-control full01 india " placeholder="Number" maxlength="10" onkeypress="return isNumber(event)"  style="display:none" />
                                                                                <input type="text" name="contactNumber2" id="contactNumber2" value="{{ $item['contactNumber'] }}" class="form-control full01 pakistan " placeholder="Number" maxlength="12"/>
                                                                            </div>
                                                                        @endif
                                                                    </div>     
                                                                    <div class="contactNumber error01">
                                                                        <p class="text-danger"> The contact number field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('contactNumber')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Address <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="text" name="address" id="address" class="form-control full01" value="{{ $item['address'] }}" @if ($item['status'] == 'Converted') readonly @endif>
                                                                    <div class="address error01">
                                                                        <p class="text-danger"> The address field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('address')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>No. of Adult <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" name="noOfAdult" id="noOfAdult" class="form-control full01" value="{{ $item['noOfAdult'] }}" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                    <div class="noOfAdult error01">
                                                                        <p class="text-danger"> The no. of adults field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('noOfAdult')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Child With bed(5-12 yrs)</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" id="childWithBed" name="childWithBed" class="form-control full01" value="{{ $item['childWithBed'] }}" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('childWithBed')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Child With No bed(0-4 yrs)</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" name="childWithNoBed" id="childWithNoBed" value="{{ $item['childWithNoBed'] }}" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('childWithNoBed')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Total Child</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" name="totalChild" id="totalChild" value="{{ $item['totalChild'] }}" class="form-control half01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('totalChild')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>No. of Infant</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" name="noOfInfant" id="noOfInfant" value="{{ $item['noOfInfant'] }}" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('noOfInfant')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Total PAX <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="number" name="totalPAX" id="totalPAX" value="{{ $item['totalPAX'] }}" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                    <div class="totalPAX error01">
                                                                        <p class="text-danger"> The total pax field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('totalPAX')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Total Tour Budget (Approx) </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="totalTourBudget" id="totalTourBudget" value="{{ $item['totalTourBudget'] }}" type="text" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('totalTourBudget')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Arrival Details</h3>
                                                        <ul class="leadentry01">
                                                            <li>
                                                                <label>Destination <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input type="text" name="destination" list="destinationname" class="form-control full01" value="{{$item['destination']}}" @if ($item['status'] == 'Converted') disabled @endif />
                                                                    <datalist name="destination1" id="destinationname" class="full2323">
                                                                        <option value="">Select destination</option>
                                                                        @foreach ($Package as $key => $val)
                                                                            <option value="{{ $val->title }}" {{ $item['destination'] == $val->title ? 'selected' : '' }}>{{ $val->title }}</option>
                                                                        @endforeach
                                                                    </datalist>
                                                                    <div class="destination error01">
                                                                        <p class="text-danger"> The destination field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- <li>
                                                                <label>Destination <span class="text-danger">*</span></label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="destination" id="destination" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="">Select destination</option>
                                                                        @foreach ($Package as $key => $val)
                                                                            <option value="{{ $val->title }}" {{ $item['destination'] == $val->title ? 'selected' : '' }}>{{ $val->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="destination error01">
                                                                        <p class="text-danger"> The destination field is mendatory</p>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                            @error('destination')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Arrival Date </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="arrivalDate" id="arrivalDate" value="{{date('d/m/Y',strtotime($item['jurneyDate']))}}" type="text" class="form-control full01 datepicker" placeholder="dd/mm/yyyy" @if ($item['status'] == 'Converted') disabled @endif>
                                                                </div>
                                                            </li>
                                                            @error('arrivalDate')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Departure Date </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="departureDate" id="departureDate" value="{{date('d/m/Y',strtotime($item['departureDate'])) }}" type="text" class="form-control full01 datepicker" placeholder="dd/mm/yyyy" @if ($item['status'] == 'Converted') disabled @endif>
                                                                </div>
                                                            </li>
                                                            @error('departureDate')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Mode of Travel </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="modeOfTravel" id="modeOfTravel" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="" {{ $item['modeOfTravel'] == '' ? 'selected' : '' }}>Select</option>
                                                                        <option value="Car Ac" {{ $item['modeOfTravel'] == 'Car Ac' ? 'selected' : '' }}>Car Ac</option>
                                                                        <option value="Car Non-Ac" {{ $item['modeOfTravel'] == 'Car Non-Ac' ? 'selected' : '' }}>Car Non-Ac</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            @error('modeOfTravel')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Flight Required</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="flightRequired" id="flightRequired" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="" {{ $item['flight'] == '' ? 'selected' : '' }}>Select</option>
                                                                        <option value="Yes" {{ $item['flight'] == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                                        <option value="No" {{ $item['flight'] == 'No' ? 'selected' : '' }}>No</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            @error('flightRequired')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Category of Pkg. </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="categoryOfPkg" id="categoryOfPkg" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="" {{ $item['categoryOfPkg'] == '' ? 'selected' : '' }}>Select</option>
                                                                        <option value="Individual" {{ $item['categoryOfPkg'] == 'Individual' ? 'selected' : '' }}>Individual</option>
                                                                        <option value="Group" {{ $item['categoryOfPkg'] == 'Group' ? 'selected' : '' }}>Group</option>
                                                                        <option value="Corporate" {{ $item['categoryOfPkg'] == 'Corporate' ? 'selected' : '' }}>Corporate</option>
                                                                        <option value="Family Pkg" {{ $item['categoryOfPkg'] == 'Family Pkg' ? 'selected' : '' }}>Family Pkg</option>
                                                                        <option value="Honeymoon Pkg" {{ $item['categoryOfPkg'] == 'Honeymoon Pkg' ? 'selected' : '' }}>Honeymoon Pkg</option>
                                                                        <option value="Adventure Pkg" {{ $item['categoryOfPkg'] == 'Adventure Pkg' ? 'selected' : '' }}>Adventure Pkg</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            @error('categoryOfPkg')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Hotel Category </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="hotelCategory" id="hotelCategory" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="" {{ $item['hotelCategory'] == '' ? 'selected' : '' }}>Select</option>
                                                                        <option value="Budget" {{ $item['hotelCategory'] == 'Budget' ? 'selected' : '' }}>Budget</option>
                                                                        <option value="Delux" {{ $item['hotelCategory'] == 'Delux' ? 'selected' : '' }}>Delux</option>
                                                                        <option value="3 Star" {{ $item['hotelCategory'] == '3 Star' ? 'selected' : '' }}>3 Star</option>
                                                                        <option value="Above 3 Star" {{ $item['hotelCategory'] == 'Above 3 Star' ? 'selected' : '' }}>Above 3 Star</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            @error('hotelCategory')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Food Plan </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <select name="foodPlan" id="foodPlan" class="form-control full01" @if ($item['status'] == 'Converted') disabled @endif>
                                                                        <option value="" {{ $item['foodPlan'] == '' ? 'selected' : '' }}>Select</option>
                                                                        <option value="EP - No Food" {{ $item['foodPlan'] == 'EP - No Food' ? 'selected' : '' }}>EP - No Food</option>
                                                                        <option value="CP - Breakfast Only" {{ $item['foodPlan'] == 'CP - Breakfast Only' ? 'selected' : '' }}>CP - Breakfast Only</option>
                                                                        <option value="MAP - Breakfast + Lunch/Dinner" {{ $item['foodPlan'] == 'MAP - Breakfast + Lunch/Dinner' ? 'selected' : '' }}>MAP - Breakfast + Lunch/Dinner</option>
                                                                        <option value="AP- Breakfast + Lunch + Dinner" {{ $item['foodPlan'] == 'AP- Breakfast + Lunch + Dinner' ? 'selected' : '' }}>AP- Breakfast + Lunch + Dinner</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            @error('foodPlan')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Duration Of Stay(Night Stay) </label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="durationOfStay" id="durationOfStay" value="{{ $item['durationOfStay'] }}" type="text" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('durationOfStay')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Additional Facility</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="additionalFacility" id="additionalFacility" value="{{ $item['additionalFacility'] }}" type="text" class="form-control full01" oninput="validity.valid||(value='');" min="0" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('additionalFacility')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>Remarks</label>
                                                                <div class="fieldrow025 formfieldrow55">
                                                                    <input name="remark" id="remark" value="{{ $item['remark'] }}" type="text" class="form-control full01" @if ($item['status'] == 'Converted') readonly @endif>
                                                                </div>
                                                            </li>
                                                            @error('remark')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                            <li>
                                                                <label>TAT </label>
                                                                <div class="fieldrow025">
                                                                    <input name="TAT" id="TAT" type="text" class="form-control datetimepicker" value="{{date('d/m/Y',strtotime($item->TAT))}}">
                                                                    <div class="innerfield45">
                                                                        <label>Hour : Min</label>
                                                                        <input type="time" name="tatTime" id="tatTime" value="{{date('H:i',strtotime($item->TAT))}}" class="form-control" placeholder="Hour : Min" @if ($item['status'] == 'Converted') disabled @endif>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @error('TAT')
                                                                <label class="message-gap">{{ $message }}</label>
                                                            @enderror
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="btmbtnsubmit45">
                                            @if ($item['status'] != 'Converted')
                                                <button type="submit" name="save" id="save" class="btn default">Update</button>
                                            @else
                                                <button onclick="history.back()" class="btn default">Cancel</button>
                                            @endif
                                            <button class="btn default" onClick="javascript:window.close('','_parent','');">Close </button>                                        

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <!----Laravel Date picker added by shakil start----->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
    <!----Laravel Date picker added by shakil end----->
    <script>
         $("#noOfAdult").blur(function(){
            var noOfAdults = $("#noOfAdult").val();
            var childWithBed = $("#childWithBed").val();
            var childWithNoBed = $("#childWithNoBed").val();
            var total_child = parseInt(childWithBed) + parseInt(childWithNoBed);
            var totalChild = $("#totalChild").val(total_child);    
            var total_value = parseInt(noOfAdults) +  parseInt(childWithBed) + parseInt(childWithNoBed)
            var totalPAX = $("#totalPAX").val(total_value);

        });
        $("#childWithBed").blur(function(){
            var noOfAdults = $("#noOfAdult").val();
            var childWithBed = $("#childWithBed").val();
            var childWithNoBed = $("#childWithNoBed").val();
            var total_child = parseInt(childWithBed) + parseInt(childWithNoBed);
            var totalChild = $("#totalChild").val(total_child);
            var total_value = parseInt(noOfAdults) +  parseInt(childWithBed) + parseInt(childWithNoBed)
            var totalPAX = $("#totalPAX").val(total_value);

        });
        $("#childWithNoBed").blur(function(){
            var noOfAdults = $("#noOfAdult").val();
            var childWithBed = $("#childWithBed").val();
            var childWithNoBed = $("#childWithNoBed").val();
            var total_child = parseInt(childWithBed) + parseInt(childWithNoBed);
            var totalChild = $("#totalChild").val(total_child);
            var total_value = parseInt(noOfAdults) +  parseInt(childWithBed) + parseInt(childWithNoBed)
            var totalPAX = $("#totalPAX").val(total_value);
        });
        $("#totalChild").blur(function(){
            var noOfAdults = $("#noOfAdult").val();
            var childWithBed = $("#childWithBed").val();
            var childWithNoBed = $("#childWithNoBed").val();
            var total_child = parseInt(childWithBed) + parseInt(childWithNoBed);
            var totalChild = $("#totalChild").val(total_child);
            var total_value = parseInt(noOfAdults) +  parseInt(childWithBed) + parseInt(childWithNoBed)
            var totalPAX = $("#totalPAX").val(total_value);
        });
    </script>
    <script>
        <!----date picker added by shakil------->
        $(document).ready(function()
        {
        $('.datepicker').datepicker({
        dateFormat:
        "dd/mm/yy",
        minDate: new Date()
        });
        $('.datetimepicker').datepicker({
        dateFormat:
        "dd/mm/yy",
        minDate: new Date()
        });
        });
    <!----date picker added by shakil------->
    <!----- Shakil added for validation messages start--------->
    $(document).ready(function(){
    $(".customerName").hide();
    $(".email").hide();
    $(".contactNumber").hide();
    $(".noOfAdult").hide();
    $(".address").hide();
    $(".totalPAX").hide();
    $(".destination").hide();
    $("#loader").hide();
    });
    $("#customerName").keyup(function(){
    $(".customerName").hide();
    });
    $("#email").keyup(function(){
    $(".email").hide();
    });
    $("#contactNumber").keyup(function(){
    $(".contactNumber").hide();
    });
    $("#noOfAdult").keyup(function(){
    $(".noOfAdult").hide();
    });
    $("#address").keyup(function(){
    $(".address").hide();
    });
    $("#totalPAX").keyup(function(){
    $(".totalPAX").hide();
    });
    $("#destination").change(function(){
    $(".destination").hide();
    });
    $('#formSubmit').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    // alert(form_data);
    var customerName = $("#customerName").val();
    var email = $("#email").val();
    var contactNumber1 = $("#contactNumber1").val();
    var contactNumber2 = $("#contactNumber2").val();
    var noOfAdult = $("#noOfAdult").val();
    var address = $("#address").val();
    var totalPAX = $("#totalPAX").val();
    var destination= $("#destination").val();
    if(customerName.length != 0 && email.length != 0 && (contactNumber1.length != 0 || contactNumber2.length != 0 ) && noOfAdult.length != 0 && address.length != 0 && totalPAX.length != 0 && destination!=''){
    $("#loader").show();
    $.ajax({
    url:"{{ route('leadsDetailsUpdate') }}",
    method:"GET",
    data:form_data,
    dataType:"json",
    success:function(data)
    {
    if(data==1){
    //window.location.reload();
    $("#loader").hide();
    window.location="{{url('/admin/leadb2c')}}";
    }else{
    alert('Please try again.');
    }
    }
    })
    }else{
    var customerName = $("#customerName").val();
    var email = $("#email").val();
    var contactNumber = $("#contactNumber").val();
    var noOfAdult = $("#noOfAdult").val();
    var address = $("#address").val();
    var totalPAX = $("#totalPAX").val();
    var destination= $("#destination").val();
    if(customerName.length == 0) {
    //alert(customerName.length);
    $(".customerName").show();
    }
    if(email.length == 0) {
    $(".email").show();
    }
    if(contactNumber.length == 0) {
    $(".contactNumber").show();
    }
    if(noOfAdult.length == 0) {
    $(".noOfAdult").show();
    }
    if(address.length == 0) {
    $(".address").show();
    }
    if(totalPAX.length == 0) {
    $(".totalPAX").show();
    }
    if(destination.length == 0) {
    $(".destination").show();
    }
    }
    });
    <!----- Shakil added for validation messages end--------->
    $(document).ready(function() {
    $('#mail00').click(function() {
    $('#mail01').fadeToggle(150);
    });
    $(document).on('click', function(e) {
    if ($(e.target).closest(".lead014 td").length === 0) {
    $("#mail01").hide();
    }
    });
    $('#phone0').click(function() {
    $('#phonefld').fadeToggle(150);
    });
    $(document).on('click', function(e) {
    if ($(e.target).closest(".lead014 td").length === 0) {
    $("#phonefld").hide();
    }
    });
    $('#comntcli56').click(function() {
    $('#textcomnt23').fadeToggle(150);
    });
    $(document).on('click', function(e) {
    if ($(e.target).closest(".lead014 td").length === 0) {
    $("#textcomnt23").hide();
    }
    });
    $('#stscomentclick').click(function() {
    $('#textcomnt233').fadeToggle(150);
    });
    $(document).on('click', function(e) {
    if ($(e.target).closest(".lead014 td").length === 0) {
    $("#textcomnt233").hide();
    }
    });
    $('.journey02').click(function() {
    $('.journey02').css('text-indent', "0px")
    });
    $('#reservationdate').datetimepicker({
    format: 'L'
    });
    });
    $(function() {
    $('.select2').select2()
    $('.select2bs4').select2({
    theme: 'bootstrap4'
    })
    $('#datemask').inputmask('dd/mm/yyyy', {
    'placeholder': 'dd/mm/yyyy'
    })
    $('#datemask2').inputmask('mm/dd/yyyy', {
    'placeholder': 'mm/dd/yyyy'
    })
    $('[data-mask]').inputmask()
    $('#reservationdate').datetimepicker({
    format: 'L'
    });
    $('#reservationdatetime').datetimepicker({
    icons: {
    time: 'far fa-clock'
    }
    });
    $('#reservation').daterangepicker()
    $('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
    format: 'MM/DD/YYYY hh:mm A'
    }
    })
    $('#daterange-btn').daterangepicker({
    ranges: {
    'Today': [moment(), moment()],
    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    'This Month': [moment().startOf('month'), moment().endOf('month')],
    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
    'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
    },
    function(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
    'MMMM D, YYYY'))
    }
    )
    $('#timepicker').datetimepicker({
    format: 'LT'
    })
    $('.duallistbox').bootstrapDualListbox()
    $('.my-colorpicker1').colorpicker()
    $('.my-colorpicker2').colorpicker()
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
    $("input[data-bootstrap-switch]").each(function() {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
    })
    document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })
    Dropzone.autoDiscover = false
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)
    var myDropzone = new Dropzone(document.body, {
    url: "/target-url",
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false,
    previewsContainer: "#previews",
    clickable: ".fileinput-button"
    })
    myDropzone.on("addedfile", function(file) {
    file.previewElement.querySelector(".start").onclick = function() {
    myDropzone.enqueueFile(file)
    }
    })
    myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })
    myDropzone.on("sending", function(file) {
    document.querySelector("#total-progress").style.opacity = "1"
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })
    myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
    })
    document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
    }
    </script>
@endsection
@push('scripts')
@endpush