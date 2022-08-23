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
        <div class="container">
            <div class="addcontent58wrap">
                <h2>Hotels</h2>
                <div class="addcontholder154">
                    <div class="row">
                        <div class="col-md-4 col-12 addcontform">
                            <form action="{{ route('addHotelSave') }}" method="post">
                                @csrf
                                <table width="100%">
                                    <tr>
                                        <td style="width:100px"><label>Enquiry Id</label></td>
                                        <td><input type="text" id="enqueryId" name="enqueryId"
                                                value="{{ $_GET['enqueryId'] }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Hotel Name</label></td>
                                        <td> <input type="text" id="hotelName" name="hotelName"></td>
                                    </tr>
                                    <tr>
                                        <td><label>No Of Rooms </label></td>
                                        <td><input type="number" id="noOfRooms" name="noOfRooms"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CWB</label></td>
                                        <td> <input type="text" id="cwb" name="cwb"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CNB</label></td>
                                        <td> <input type="text" id="cnb" name="cnb"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Hotel Location</label></td>
                                        <td> <input type="text" id="hotelLocation" name="hotelLocation"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Room Type</label></td>
                                        <td> <input type="text" id="roomType" name="roomType"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Contact Info</label></td>
                                        <td> <input type="number" id="contactInfo" name="contactInfo"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Check In</label></td>
                                        <td> <input type="date" id="checkIn" name="checkIn"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Check Out</label></td>
                                        <td><input type="date" id="checkOut" name="checkOut"></td>
                                    </tr>
                                    <tr>
                                        <td><label>MealPlan</label></td>
                                        <td> <input type="text" id="mealPlan" name="mealPlan"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Veg/NonVeg/Jain?</label></td>
                                        <td> <input type="text" id="mealType" name="mealType"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Comment</label></td>
                                        <td> <input type="text" id="comment" name="comment"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Cost Price</label></td>
                                        <td> <input type="number" id="costPrice" name="costPrice"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit">Create</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="adrow56">
                                <a href="#">Show All Row</a>
                                <a href="#">Remove Deleted Rows</a>
                            </div>
                            <div class="addtablecol44">
                                <table width="100%" class="addtablcont7878">
                                    <tr>
                                        <th>Night Id</th>
                                        <th>HotelName</th>
                                        <th>Location</th>
                                        <th>Room Type</th>
                                        <th>checkin</th>
                                        <th>checkout</th>
                                        <th>MealPlan</th>
                                        <th>MealType</th>
                                        <th>status</th>
                                        <th>CP</th>
                                    </tr>
                                    @if (count($data) > 0)
                                        @foreach ($data as $index => $item)
                                            <div>
                                                <tr>
                                                    <td>{{ $index }}</td>
                                                    <td>{{ $item['hotelName'] }}</td>
                                                    <td>{{ $item['hotelLocation'] }}</td>
                                                    <td>{{ $item['roomType'] }}</td>
                                                    <td>{{ $item['checkIn'] }}</td>
                                                    <td>{{ $item['checkOut'] }}</td>
                                                    <td>{{ $item['mealPlan'] }}</td>
                                                    <td>{{ $item['mealType'] }}</td>
                                                    <td>{{ $item['status'] }}</td>
                                                    <td>{{ $item['costPrice'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="10" style="padding: 4px;">
                                                        <span><b> System Track:</b> Recorded by on {{ $item['created_at'] }}</span>
                                                        <!-- <span>Deleted by on 02/4/2022</span> -->
                                                        <span><b
                                                                style="background-color: #888; color:#fff; padding:1px 4px;">User
                                                                Comment:</b> Nice Arrangement</span>
                                                    </td>
                                                </tr>

                                            </div>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="11" class="nofound45">No Result Found</td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#compose-textarea').summernote()
        })
    </script>
@endpush
