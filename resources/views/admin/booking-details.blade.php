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
   
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
        <section class="content targetreport01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="title01">
                                <h3 class="card-title">Booking Details</h3>
                                <a class="btn btn-success" href="javaScript:void(0);" id="export_lead">Export lead</a>
                                 
                            </div>
                            <div class="card-header topsec47">
                                <h3 class="card-title">Lead Report List</h3>
                                <div class=" leadsearch45">
                                    <button class="btnbox">Today</button>
                                    <div class="input-group">
                                        <form action="{{ route('fetchBookingDetails') }}" method="POST">
                                            @csrf
                                            <div class="leadsearch89">
                                                <label for="start">From:</label>
                                                <input type="date" id="start" name="start" value="" class="form-control">
                                                <span>To:</span>
                                                <input type="date" id="end" name="end" value="" class="form-control">

                                               
                                                <input type="submit" value="submit" class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @if(!empty($start))
                                <input type="hidden" id="start_lead_export" name="" value="{{$start}}" class="form-control">
                             @endif
                             @if(!empty($end))
                                <input type="hidden" id="end_lead_export" name="" value="{{$end}}" class="form-control">
                            @endif


                            <div class="card-body bookingtable895 scroll">
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <div>
                                            <table
                                                class="table table-head-fixed text-nowrap lead014 target01 table-responsive scroll">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Enquiry ID</th>
                                                        <th>Journey Date</th>
                                                        <th>Name</th>
                                                        <th>Email ID</th>
                                                        <th>Contact No.</th>
                                                        <th style="width:120px">Lead Source</th>
                                                        <th>Lead Type</th>
                                                        <th>Date Of Entry</th>
                                                        <th>Entered By</th>
                                                        <th>Status</th>
                                                        <th>History</th>
                                                        <th>Emp Feedback</th>
                                                        <th>Rank</th>
                                                        <th>Assign To</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>{{ $item['id'] }}</td>
                                                        <td>{{ $item['enqueryId'] }}</td>
                                                        <td>{{ $item['jurneyDate'] }}</td>
                                                        <td>{{ $item['customerName'] }}</td>
                                                        <td>{{ $item['email'] }}</td>
                                                        <td>{{ $item['contactNumber'] }}</td>
                                                        <td>
                                                            <div style="width:120px">{{ $item['leadSource'] }}</div>
                                                        </td>
                                                        <td>{{ $item['leadType'] }}</td>
                                                        <td>
                                                            <div style="width:120px">{{ $item['created_at'] }}</div>
                                                        </td>
                                                        <td>{{ $item['createdBy'] }}</td>
                                                        <td><button type="button" class="btn btn-primary btncl"
                                                                data-toggle="modal"
                                                                data-target="#comnt154">{{ $item['status'] }}</button>
                                                        </td>
                                                        <td><button type="button" class="btn btn-primary btncomntcli57" data-code="{{ $item['enqueryId'] }}">View
                                                                Comment</button></td>
                                                        <td>{{ $item['createdBy'] }}</td>
                                                        <td>{{ $item['rank'] }}</td>
                                                        <td>{{ $item['assignTo'] }}</td>
                                                    </tr>
                                                </tbody>

                                            </table>

                                            <div class="modal fade" id="comnt154" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content cmnt89655">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Lead
                                                                Status</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="cmntbody99">
                                                                <div class="field_row456">
                                                                    <label>Enquiry Id</label>
                                                                    <span>9E89755</span>
                                                                </div>
                                                                <div class="field_row456">
                                                                    <label>Remarks</label>
                                                                    <textarea placeholder="comment">
                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (!empty($item['invoice']))
                                                @foreach ($item['invoice'] as $invoice)
                                                    <div class="target-voucher">
                                                        <h3>[Voucher Sent] Info: Voucher Sent Bymelaccounts on
                                                            {{ $invoice['created_at'] }}<span>Voucher
                                                                Created</span></h3>
                                                    </div>
                                                @endforeach
                                            @endif
                                            @if (count($item['paymentDetails'])>0)
                                                @foreach ($item['paymentDetails'] as $payment)
                                                    <div class="target-received">
                                                        <p><b>Is Advance Recived:</b> {{ $payment['isAdvanceRecived'] }}</p>
                                                        <p><b>Is Conf Mail Sent: </b> {{ $payment['conformationMailSent'] }}</p>
                                                        <p><b>Conf Mail Sent on: </b> {{ $payment['conformationMailSentOn'] }}</p>
                                                        <p><b>IS Acc Conf SMS Sent:</b> {{ $payment['conformationSmsSent'] }}</p>
                                                        <p><b>Ammount Recived:</b>{{$payment['ammountRecived'] }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="target-edit">
                                                <ul>
                                                    <li><a href="#">Add/General Info</a></li>
                                                    <li><a
                                                            href="{{ route('addHotel') }}?enqueryId={{ $item['enqueryId'] }}">Add
                                                            Hotels</a></li>
                                                    <li><a
                                                            href="{{ route('addTransportation') }}?enqueryId={{ $item['enqueryId'] }}">Add
                                                            Transportation</a></li>
                                                    <li><a
                                                            href="{{ route('addSupplement') }}?enqueryId={{ $item['enqueryId'] }}">Add
                                                            Supplements</a></li>
                                                    <li><a href="{{ route('sendInvoice') }}?enqueryId={{ $item['enqueryId'] }}">View/Send Voucher</a></li>
                                                </ul>
                                            </div>
                                            <div class="target-edit bottomerecviedpa">
                                                <ul>
                                                    <li><a href="{{ route('gentleReminder') }}?enqueryId={{ $item['enqueryId'] }}">Gentle Payment Reminder</a></li>
                                                    <li><a href="{{ route('finalReminder') }}?enqueryId={{ $item['enqueryId'] }}">Final Payment Reminder</a></li>
                                                </ul>
                                                @if (count($item['invoice'])>0)
                                                    @foreach ($item['invoice'] as $invoice)
                                                        <div class="rectimedate">
                                                            <p>Received on {{$invoice['created_at'] }}</p>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content cmnt8965">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Comment
                        History
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body vcombody">
                    <div class="cmntbody99">
                        <table class="table table-head-fixed text-nowrap lead014 target01">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Enquiry ID</th>
                                    <th>Date</th>
                                    <th>Remarks</th>
                                    <th>Given By</th>
                                    <th>Role</th>
                                    <th>Buzz</th>
                                </tr>
                            </thead>
                            <tbody id="modalTableBody">
                                {{-- <tr>
                                    <td>1</td>
                                    <td>8AF30095</td>
                                    <td>04/04/2022 00:00:00</td>
                                    <td>Test Query</td>
                                    <td>Rohit</td>
                                    <td>OPS</td>
                                    <td>
                                        <div class="fieldrow01">
                                            <input type="text">
                                            <button class="btncl btn">Buzz</button>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <!--Data Table-->
    <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <!-- <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script> -->
    <script type="text/javascript" src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   

@endsection
@push('scripts')
    <script type="text/javascript">
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
        $(function() {
            $('#compose-textarea').summernote()
        })
    </script>

    <script>
        $(document).ready( function () {
    $('#modalTableBody').DataTable();
} );
    </script>


    <script>
          $(document).on('click', '#export_lead', function() {
            var start_lead_date = $('#start_lead_export').val();
            var end_lead_date = $('#end_lead_export').val();
            
            $.ajax({
                url: "{{ route('exportLeads') }}",
                type: "GET",
                data: {
                    start_lead_date:start_lead_date,
                    end_lead_date:end_lead_date
                },
                
                success: function(data) {}
                
            });
        });

    </script>
@endpush
