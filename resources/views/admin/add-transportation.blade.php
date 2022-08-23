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
                <h2>Transportation</h2>
                <div class="addcontholder154">
                    <div class="row">
                        <div class="col-md-4 col-12 addcontform">
                            <form action="{{ route('addTransportationSave') }}" method="post">
                                @csrf
                                <table width="100%">
                                    <tr>
                                        <td style="width:100px"><label>Enquiry Id</label></td>
                                        <td><input type="text" id="enqueryId" name="enqueryId"
                                                value="{{ $_GET['enqueryId'] }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Vehicale Type</label></td>
                                        <td> <input type="text" id="vehicaleType" name="vehicaleType"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Vehicale Name</label></td>
                                        <td><input type="text" id="vehicaleName" name="vehicaleName"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Pick Up Date</label></td>
                                        <td> <input type="date" id="pickUpDate" name="pickUpDate"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Pick Up Location </label></td>
                                        <td> <input type="text" id="pickUpLocation" name="pickUpLocation"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Drop Date</label></td>
                                        <td> <input type="date" id="dropDate" name="dropDate"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Drop Location</label></td>
                                        <td> <input type="text" id="dropLocation" name="dropLocation"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Commnet</label></td>
                                        <td> <input type="text" id="commnet" name="commnet"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Day</label></td>
                                        <td> <input type="number" id="day" name="day"></td>
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
                                        <th>Day</th>
                                        <th>Pickup Date</th>
                                        <th>Drop Date</th>
                                        <th>Pickup Location </th>
                                        <th>Vehicale Type</th>
                                        <th>Vehicale Name</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    @if (count($data) > 0)
                                        @foreach ($data as $ik => $item)
                                            <div>
                                                <tr>
                                                    <td>{{ $item['day'] }}</td>
                                                    <td>{{ $item['pickUpDate'] }}</td>
                                                    <td>{{ $item['dropDate'] }}</td>
                                                    <td>{{ $item['pickUpLocation'] }}</td>
                                                    <td>{{ $item['vehicaleType'] }}</td>
                                                    <td>{{ $item['vehicaleName'] }}</td>
                                                    <td>{{ $item['status'] }}</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="10" style="padding: 4px;">
                                                        <span><b> System Track:</b> Recorded by on {{ $item['created_at'] }}</span>
                                                        <span>Deleted by on {{ $item['updated_at'] }}</span>
                                                        <span><b
                                                                style="background-color: #888; color:#fff; padding:1px 4px;">User
                                                                Comment:</b> {{ $item['comment'] }}</span>
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
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
