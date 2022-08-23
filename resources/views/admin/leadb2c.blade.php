@extends('admin.layouts.app')
@section('metades')
<meta name="description" content="Meilleur Holidays" />
<meta name="author" content="Meilleur Holidays" />
<meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
<title>Meilleur Holidays: Travel Company in Kolkata</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/bs-stepper/css/bs-stepper.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/dropzone/min/dropzone.min.css') }}">
<style>
    #loader {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgb(255 255 255 / 70%);
        top: 0;
        left: 0;
        z-index: 999;
    }

    #loader img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
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
                @if(session('Success'))
                   {{session('Success')}}
                @endif
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid position-relative">
            <div id="loader">
                <img src="{{ asset('images/loader.gif') }}" alt="loader">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header topsec47">
                            <h3 class="card-title">Lead Report List</h3>
                            <div class=" leadsearch45">

                            </div>
                        </div>
                        <div class="input-group ml-5">
                            <div class="col-3">
                                <label for="start">From:</label>
                                <input type="date" id="start" name="start" value="{{ date('Y-m-d') }}" class="form-control">
                            </div>
                            <div class="col-3">
                                <label for="start">To:</label>
                                <input type="date" id="end" name="end" value="{{ date('Y-m-d') }}" class="form-control">
                            </div>
                            <div class="col-3">
                                <label>Status</label>
                                <select id="statusFilter" name="statusFilter" class="form-control ">
                                    <option value="">All</option>
                                    <option value="Open">Open</option>
                                    <option value="Close">Close</option>
                                    <option value="Follow Up">Follow Up</option>
                                    <option value="Converted">Converted</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>

                            </div>
                            <div class="col-3 mt-3">
                                <a href="javaScript:void(0);" class="btn btn-outline-warning btn-sm" id="searchLead">
                                    Search</a>
                                <a href="javaScript:void(0);" class=" btn btn-outline-danger btn-sm" onclick="window.location.reload()">
                                    Clear</a>
                            </div>

                        </div>
                        <div class="card-body table-responsive p-0 leadb2455 mt-5 " id="leadbc01" onWheel={onWheel}>
                            <table class="table table-head-fixed text-nowrap lead014" id="result">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Enq. Id</th>
                                        <th>Journey Date</th>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Contact No.</th>
                                        <th>Lead Source</th>
                                        <th>Lead Type</th>
                                        <th>Date of Entry</th>
                                        <th>Entered By</th>
                                        <th>Status</th>
                                        <th>History</th>
                                        <th>Emp Feedback</th>
                                        <th>Rank</th>
                                        <th>Assign To</th>
                                        <th>URL</th>
                                    </tr>
                                </thead>
                                @if (count($data) > 0)
                                <tbody id="firstResult">
                                    @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>

                                            <strong style="display: block;">{{ $item['enqueryID'] }}</strong>
                                        </td>
                                        <td>
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="date" name="jurneyDate" class="datePickerajax" id="jurneyDate" data-id="{{ $item['id'] }}" data-type="jurneyDate" value="{{ $item['jurneyDate'] }}" />
                                            </div>
                                        </td>
                                        <td>{{ $item['customerName'] }}</td>
                                        <td>
                                            <div class="fieldbox">
                                                <a href="{{ url('admin\email') }}?{{ $item['id'] }}">
                                                    <span id="mail00" style="display: block;">{{ $item['email'] }}</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fieldbox">
                                                <span class="phone0" id="phone0" style="display: block;">{{ $item['contactNumber'] }}</span>
                                                <div class="phonefld" id="phonefld"><input class="form-control phoneajax" type="text" placeholder="" value="{{ $item['contactNumber'] }}" name="phone" data-id="{{ $item['id'] }}" data-type="contactNumber"></div>
                                            </div>
                                        </td>
                                        <td>{{ $item['leadSource'] }}</td>
                                        <td>{{ $item['leadType'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>{{ $item['createdBy'] }}</td>
                                        <td>
                                            <div class="statuscomnt15">
                                                <select style="text-align: center;" id="status" name="status" class="form-control onchangeajax">

                                                    <option value="Open" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Open' ? 'selected' : '' }}>
                                                        Open</option>
                                                    <option value="Close" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Close' ? 'selected' : '' }}>
                                                        Close
                                                    </option>
                                                    <option value="Follow Up" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Follow Up' ? 'selected' : '' }}>
                                                        Follow
                                                        Up</option>
                                                </select>
                                                <span id="stscomentclick" style="display: block;"><i class="far fa-comment-dots"></i></span>
                                                <div id="textcomnt233">
                                                    <textarea class="form-control" placeholder="Type Comment">
                                                  </textarea>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comnt98">
                                                <div class="comnt55">
                                                    <button type="button" class="btn btn-primary btncomntcli56" data-code="{{ $item['enqueryID'] }}">
                                                        Comments
                                                    </button>
                                                </div>
                                                <div class="comnt55">
                                                    <button type="button" class="btn btn-primary btncomntcli57" data-code="{{ $item['enqueryID'] }}">
                                                        View Comments
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $item['leadRank'] }}</td>

                                        <td>

                                            <select id="rank" name="rank" style="text-align: center;" class="form-control onchangeajax">
                                                <option value="Hot" data-id="{{ $item['id'] }}" data-type="rank" {{ $item['leadRank'] == 'Hot' ? 'selected' : '' }}>Hot</option>
                                                <option value="Warm" data-id="{{ $item['id'] }}" data-type="rank" {{ $item['leadRank'] == 'Warm' ? 'selected' : '' }}>Warm</option>
                                                <option value="Cold" data-id="{{ $item['id'] }}" data-type="rank" {{ $item['leadRank'] == 'Cold' ? 'selected' : '' }}>Cold</option>
                                            </select>

                                        </td>
                                        <td>
                                            <select id="assignTo" name="assignTo" style="text-align: center;" class="form-control onchangeajax">
                                                @foreach($users as $user)
                                                <option value="{{$user['name']}}" data-id="{{ $item['id'] }}" data-type="assignTo" {{ $item['assignTo'] == 'Cold' ? 'selected' : '' }}>{{$user['name']}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>{{ $item['URL'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <tbody>
                                    <tr>
                                        <td class="text-center" colspan="16"> No data found.</td>
                                    </tr>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-6">
                <form action="{{ route('saveComment') }}" method="post">
                    @csrf
                    <ul class="leadentry01">
                        <li>
                            <label>Enquery Id:</label>
                            <div class="fieldrow025">
                                <input type="text" name="enqueryId" value="" readonly id="enqueryIdNew">
                            </div>
                        </li>
                        <li>
                            <label>Comment:</label>
                            <div class="fieldrow025">
                                <textarea id="comment" name="comment" rows="8" cols="50" required=></textarea>
                            </div>
                        </li>
                        <li>
                            <label>To:</label>
                            <div class="fieldrow025">
                                <input type="text" name="emailTo" value="" id="emailTo">
                            </div>
                        </li>
                        <input type="hidden" value="{{$Logedinuser->email}}" name="emailFrom" id="emailFrom">
                        <li>
                            <div class="fieldrow025">
                                <button type="submit">Submit</button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comment History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="hist_table">
                    <table>
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Enq. Id</th>
                                <th>Date</th>
                                <th>Remark</th>
                                <th>Given By</th>
                                <th>Role</th>
                                <th>Buzz</th>
                            </tr>
                        </thead>
                        <tbody id="modalTableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
<script>
    $(document).ready(function() {
        $('#loader').hide();

        $('#mail00').click(function() {
            $('#mail01').fadeToggle(150);
        });
        $(document).on('click', function(e) {
            if ($(e.target).closest(".lead014 td").length === 0) {
                $("#mail01").hide();
            }
        });
        $('.phone0').click(function() {
            $('.phonefld').hide();
            $(this).parent('.fieldbox').find('.phonefld').fadeToggle(150);
        });
        $(document).on('click', function(e) {
            if ($(e.target).closest(".lead014 td").length === 0) {
                $(".phonefld").hide();
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
    });
    $(document).on('change', '.onchangeajax', function() {
        $.ajax({
            type: "POST",
            url: "{{ route('updateLeadb2c') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "value": $(this).val(),
                "id": $(this).find(':selected').attr('data-id'),
                "type": $(this).find(':selected').attr('data-type')
            },
            cache: false,
            success: function(data) {}
        });
    })
    $(document).on('change', '.datePickerajax', function() {
        $.ajax({
            type: "POST",
            url: "{{ route('updateLeadb2c') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "value": $(this).val(),
                "id": $(this).attr('data-id'),
                "type": $(this).attr('data-type')
            },
            cache: false,
            success: function(data) {}
        });
    })
    $(document).on('focusout', '.phoneajax', function() {
        $.ajax({
            type: "POST",
            url: "{{ route('updateLeadb2c') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "value": $(this).val(),
                "id": $(this).attr('data-id'),
                "type": $(this).attr('data-type')
            },
            cache: false,
            success: function(data) {}
        });
    })
    $('.container-fluid').mouseup(function(e) {
        var container = $(".phonefld");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });
    $(document).on('click', '.btncomntcli56', function() {
        $('#enqueryIdNew').val($(this).attr('data-code'));
        $("#exampleModal").modal('show');
        var rowId = $(this).attr('data-id');
        $.ajax({
            url: "{{ route('fatchUserEmail') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "rowId": rowId
            },
            success: function(res) {
                if (res.status)
                    $('#emailTo').val(res.email);
                else
                    $('#emailTo').val('');
            }
        });
    });
    $(document).on('click', '.btncomntcli57', function() {
        var value = $(this).attr('data-code');
        $.ajax({
            url: "{{ route('fatchComment') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "enqueryId": value
            },
            success: function(data) {
                if (value)
                    $("#modalTableBody").html(data);
                else
                    $("#modalTableBody").html("");
            }
        });
        $("#exampleModal1").modal('show');
    });
    $(document).on('click', '#searchLead', function() {
        var start_date = $('#start').val();
        var end_date = $('#end').val();
        var status = $('#statusFilter').val();
        $('#loader').show();
        $.ajax({
            url: "{{ route('searchLead') }}",
            type: "GET",
            data: {
                start_date: start_date,
                end_date: end_date,
                status: status
            },
            success: function(data) {
                $('#result').html(data);
                $('#loader').hide();

            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        jQuery('#searchLead').click();
    });
</script>
@endsection
@push('scripts')
@endpush