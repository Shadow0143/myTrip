@extends('admin.layouts.app')
@section('metades')
    <meta name="description" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="author" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="keywords" content="Touran - Travel & Tour HTMl5 Template" />
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
@endsection
<style>
    .top_search {
        padding: 10px;
    }

    .top_search .card-title {
        float: none;
        font-weight: 600;
        font-size: 14px;
        color: #333;
        margin-bottom: 10px;
    }

    .top_search .fieldrow_block {}

    .top_search .fieldrow_block label {
        font-size: 11px;
        line-height: 11px;
        font-weight: 500 !important;
        color: #333;
        margin-bottom: 5px;
    }

    .top_search .fieldrow_block .fieldrow_inner {
        position: relative;
    }

    .top_search .fieldrow_block .fieldrow_inner input {
        font-size: 12px;
        line-height: 12px;
        font-weight: normal;
        padding: 6px 10px;
        padding-right: 80px;
        outline: none;
        color: #333;
        display: inline-block;
        width: 100%;
        border: solid 1px #ddd;
        border-radius: 3px;
    }

    .top_search .fieldrow_block .fieldrow_inner button {
        display: inline-block;
        border: none;
        background-color: #007bff;
        color: #fff;
        height: 28px;
        font-size: 13px;
        padding: 3px 15px;
        width: 75px;
        position: absolute;
        top: 0px;
        right: 0px;
        border-radius: 0px 3px 3px 0px;
    }

    .leadSearch {
        padding: 0px 35px 0px 50px;
        /* margin-top: 30px;
        margin-right: 15px; */
    }
    .leadentry02{
        margin-left: 20px;
        border: 1px solid #2a798f;
        margin-top: 7px;
       
    }
    .leadentry02 li{
        font-size: 12px;
        padding-left: 30px;
        margin-top: 11px;
    }
    .submit-btn{
        float: right;
        margin-top: 10px;
        background-color: #fd6906;
        color: #fff;
        border: none;
        padding: 4px 20px;
        border-radius: 5px;
        margin-right: 63px;
    }
    .submit-btn:hover{
        background-color: #ff8836;
    }
 
</style>
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header top_search">
                                <h3 class="card-title">Filter Lead</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="#">
                                            <div class="fieldrow_block">
                                                <label>Booking Ref</label>
                                                <div class="fieldrow_inner">
                                                    <input class="typeahead form-control" type="text" name="bookingRef"
                                                        id="bookingRef" autocomplete="off" required />
                                                    <div id="bookingRefSuggestion"></div>
                                                    <button type="submit" href="javascript:void(0)">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="">
                                            <div class="fieldrow_block">
                                                <label>Contact No</label>
                                                <div class="fieldrow_inner">
                                                    <input type="number" name="contactNo" autocomplete="off" id="contactNo"
                                                        required />
                                                    <div id="contactSuggestion"></div>
                                                    <button type="submit" href="javascript:void(0)">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="">
                                            <div class="fieldrow_block">
                                                <label>Email</label>
                                                <div class="fieldrow_inner">
                                                    <input type="email" name="email" id="email" autocomplete="off"
                                                        required />
                                                    <div id="emailSuggestion"></div>
                                                    <button type="submit" href="javascript:void(0)">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 70vh;">
                                @if (count($data) > 0)
                                    <table class="table table-head-fixed text-nowrap lead014">
                                        <thead>
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Enq. Id</th>
                                                <th>Journey Date</th>
                                                <th>User</th>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item['id'] }}</td>
                                                    <td>
                                                        <strong style="display: block;">{{ $item['enqueryID'] }}</strong>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date" data-target-input="nearest">
                                                            <input type="date" name="jurneyDate" class="datePickerajax" id="jurneyDate" data-id="{{ $item['id'] }}"
                                                            data-type="jurneyDate" value="{{ $item['jurneyDate'] }}" />
                                                        </div>
                                                    </td>
                                                    <td>{{ $item['customerName'] }}</td>
                                                    <td>
                                                        <div class="fieldbox">
                                                            <span id="mail00"
                                                                style="display: block;">{{ $item['email'] }}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="fieldbox">
                                                            <span id="phone0"
                                                                style="display: block;">{{ $item['contactNumber'] }}</span>
                                                            <div id="phonefld"><input class="form-control" type="text"
                                                                    placeholder="9832987548" name="phone"></div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item['leadSource'] }}</td>
                                                    <td>{{ $item['leadType'] }}</td>
                                                    <td>{{ $item['created_at'] }}</td>
                                                    <td>{{ $item['createdBy'] }}</td>
                                                    <td>
                                                        <div class="statuscomnt15">
                                                            <select style="text-align: center;" id="status" name="status"
                                                                class="form-control onchangeajax">
                                                                <option value="{{ $item['status'] }}" data-id="{{ $item['id'] }}"
                                                                    data-type="status"
                                                                    {{ $item['status'] != 'Open' || $item['status'] != 'Close' || $item['status'] != 'Follow Up' ? 'selected' : '' }}>{{ $item['status'] }}</option>
                                                                <option value="Open" data-id="{{ $item['id'] }}"
                                                                    data-type="status"
                                                                    {{ $item['status'] == 'Open' ? 'selected' : '' }}>
                                                                    Open</option>
                                                                <option value="Close" data-id="{{ $item['id'] }}"
                                                                    data-type="status"
                                                                    {{ $item['status'] == 'Close' ? 'selected' : '' }}>
                                                                    Close
                                                                </option>
                                                                <option value="Follow Up" data-id="{{ $item['id'] }}"
                                                                    data-type="status"
                                                                    {{ $item['status'] == 'Follow Up' ? 'selected' : '' }}>
                                                                    Follow
                                                                    Up</option>
                                                                    <option value="Converted" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Converted' ? 'selected' : '' }}>
                            Converted</option>
                                                            </select>
                                                            <span id="stscomentclick" style="display: block;"><i
                                                                    class="far fa-comment-dots"></i></span>
                                                            <div id="textcomnt233">
                                                                <textarea class="form-control" placeholder="Type Comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="comnt98">
                                                            <div class="comnt55">
                                                                <button type="button" class="btn btn-primary btncomntcli56"
                                                                    data-code="{{ $item['enqueryID'] }}">
                                                                    Comments
                                                                </button>
                                                            </div>
                                                            <div class="comnt55">
                                                                <button type="button" class="btn btn-primary btncomntcli57"
                                                                    data-code="{{ $item['enqueryID'] }}">
                                                                    View Comments
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item['empfeedback'] }}</td>
                                                    <td>
                                                        <select id="rank" name="rank" style="text-align: center;"
                                                            class="form-control onchangeajax">
                                                            <option value="Hot" data-id="{{ $item['id'] }}"
                                                                data-type="rank">Hot</option>
                                                            <option value="Warm" data-id="{{ $item['id'] }}"
                                                                data-type="rank">Warm</option>
                                                            <option value="Cold" data-id="{{ $item['id'] }}"
                                                                data-type="rank">Cold</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select id="assignTo" name="assignTo" style="text-align: center;"
                                                            class="form-control onchangeajax">
                                                            @foreach($users as $user)
                                                            <option value="{{$user['name']}}" data-id="{{ $item['id'] }}"
                                                                data-type="assignTo">{{$user['name']}}</option>
                                                            @endforeach
                                                            <!-- <option value="Ashis" data-id="{{ $item['id'] }}"
                                                                data-type="assignTo">Ashis</option>
                                                            <option value="Yash" data-id="{{ $item['id'] }}"
                                                                data-type="assignTo">Yash</option> -->
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="target-edit">
                                        <ul>
                                            <li><a href="{{ url('admin/add-payment-email') }}?id={{ $item['id'] }}" target="_blank">Add
                                                    Payment</a></li>
                                            <li><a href="{{ url('admin/invoice-email') }}?id={{ $item['id'] }}" target="_blank">Send Invoice</a></li>
                                        </ul>
                                    </div>
                                    @if (count($paymentDetails)>0)
                                        <div class="row">
                                            <div class="col-md-5 leadSearch">
                                                @foreach ($paymentDetails as $itemm)
                                                    <ul class="leadentry01 leadentry02">
                                                        <li><b>Is Advance Recived:</b> {{ $itemm['isAdvanceRecived'] }}
                                                        </li>
                                                        <li><b>Is Conf Mail Sent: </b>
                                                            {{ $itemm['conformationMailSent'] }}</li>
                                                        <li><b>Conf Mail Sent on: </b>
                                                            {{ $itemm['conformationMailSentOn'] }}
                                                        </li>
                                                        <li><b>IS Acc Conf SMS Sent:</b>
                                                            {{ $itemm['conformationSmsSent'] }}</li>
                                                        <li><b>Ammount Recived:</b> {{ $itemm['ammountRecived'] }}</li>
                                                    </ul>
                                                @endforeach
                                            </div>
                                            @foreach ($data as $item)
                                            <div class="col-md-7 leadSearch">
                                                <form action="{{ route('submitValues') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="enqueryID" value="{{ base64_encode($item['enqueryID']) }}" />
                                                    <ul class="leadentry01">
                                                        <li>
                                                            <label>CP :</label>
                                                            <div class="fieldrow025">
                                                                <input name="cp" id="cp" value="{{  $item['cp'] }}" type="text"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label>SP :</label>
                                                            <div class="fieldrow025">
                                                                <input name="sp" id="sp" value="{{  $item['sp'] }}" type="text"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label>GST :</label>
                                                            <div class="fieldrow025">
                                                                <input name="gst" id="gst" value="{{  $item['gst'] }}" type="text"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label>SP + GST :</label>
                                                            <div class="fieldrow025">
                                                                <input name="spGst" id="sp_gst" value="{{  $item['sp_gst'] }}" type="text"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <button style="aline:left;" type="submit" class="submit-btn"
                                                            href="javascript:void(0)">Submit</button>
                                                    </ul>
                                                </form>
                                            </div>
                                            @endforeach
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                    <textarea id="comment" name="comment" rows="8" cols="50"></textarea>
                                </div>
                            </li>
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script>
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
        $(document).on('click', '.btncomntcli56', function() {
            $('#enqueryIdNew').val($(this).attr('data-code'));
            $("#exampleModal").modal('show');
        })
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
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bookingRef').on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {
                        'bookingRef': value
                    },
                    success: function(data) {
                        if (value)
                            $("#bookingRefSuggestion").html(data);
                        else
                            $("#bookingRefSuggestion").html("");
                    }
                });
            });
            $(document).on('click', '#enqueryIdSuggestion', function() {
                var value = $(this).text();
                $("#bookingRef").val(value);
                $("#bookingRefSuggestion").html("");
            });
        });

        $(document).ready(function() {
            $('#contactNo').on('keyup', function() {
                var value = $(this).val();

                $.ajax({
                    url: "{{ route('searchByContactNo') }}",
                    type: "GET",
                    data: {
                        'contactNo': value
                    },
                    success: function(data) {
                        if (value)
                            $("#contactSuggestion").html(data);
                        else
                            $("#contactSuggestion").html("");
                    }
                });
            });
            $(document).on('click', '#contactNoSuggestion', function() {
                var value = $(this).text();
                $("#contactNo").val(value);
                $("#contactSuggestion").html("");
            });
        });
        $(document).ready(function() {
            $('#email').on('keyup', function() {
                var value = $(this).val();

                $.ajax({
                    url: "{{ route('searchByEmail') }}",
                    type: "GET",
                    data: {
                        'email': value
                    },
                    success: function(data) {
                        if (value)
                            $("#emailSuggestion").html(data);
                        else
                            $("#emailSuggestion").html("");
                    }
                });
            });
            $(document).on('click', '#emailSuggestion', function() {
                var value = $(this).text();
                $("#email").val(value);
                $("#emailSuggestion").html("");
            });
        });
    </script>
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
