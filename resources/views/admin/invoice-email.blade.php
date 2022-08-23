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
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .float-right i{
            padding: 0px 5px;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @foreach ($data as $item)
        <div class="container">
            <div class="addcontent58wrap1">
                <div class="payment_remsection012">
                    <div class="mailform45">
                        <table width="100%">
                            <tr>
                                <td style="width:45%"><label>Enq Id:</label> 9856987</td>
                                <td style="width:45%"><label>Name:</label>{{ $item['customerName'] }}</td>
                            </tr>
                            <tr>
                                <td style="width:45%">
                                    <div class="field_row01">
                                        <label>Contact No:</label><input type="number" value="{{ $item['contactNumber'] }}" name="contactNumber" id="contactNumber" class="form-control">
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="mailbody">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Mail Body</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control" id="mailto" name="mailto" value="{{ $item['email'] }}" placeholder="To:">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" placeholder="Subject:">
                                </div>
                                <div class="form-group">
                                    <textarea id="emailBody" name="emailBody" class="form-control" style="height: 300px"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary" id="sendMail"><i class="far fa-envelope"></i>{{__('Send')}}</button>
                                </div>
                                <input type="button" value="Get Mail Body" name="getContent" id="getContent">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#emailBody').summernote()
        })
    </script>
    <script>
        $('#getContent').click(function() {
            var price = $('#ammountRecived').val()
            var bank = $('bank').val()
            var ref = $('ref').html()
            var html = `<table cellpadding="0" cellspacing="0" style="height:781px; width:562px">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="height:92px; width:560.4px">
                                    <table style="height:92px; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="width:210.4px"><img src="https://meilleurholidays.com/images/meilleur-holidays-logo.jpg" style="height:69px; width:210px" /></td>
                                                <td style="text-align:right; width:335.2px">Invoice No#: MH/INV/828999C4<br />
                                                <strong>GSTIN: 19AIRPB2714R1ZP </strong><br />
                                                DATE:14/06/2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="height:73px; width:560.4px">
                                    <h1 style="text-align:center"><strong><u>Proforma Invoice</u></strong></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="height:184px; width:560.4px">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width:287.2px"><br />
                                                <strong>BASU AND COMPANY</strong><br />
                                                <strong>Corporate office:</strong>&nbsp;Merlin Villa, Room No: 3B, 88A Hazra Road.<br />
                                                Kolkata, West Bengal, India- 700026<br />
                                                <br />
                                                <strong>Registered Office:</strong>&nbsp;Vaishnao Vatika, 57 Purbachal Main Road,<br />
                                                Kolkata, West Bengal, India 700078<br />
                                                &nbsp;</td>
                                                <td style="width:258.4px">
                                                <p style="text-align:right"><strong>test Bluehorse</strong><br />
                                                Enq ID -828999C4</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px"><strong>SL</strong></td>
                                    <td style="height:17px; width:363.6px"><strong>Description</strong></td>
                                    <td style="height:17px; width:162.8px"><strong>Amount (Rs.)</strong></td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">1</td>
                                    <td style="height:17px; width:363.6px">Item Details...</td>
                                    <td style="height:17px; width:162.8px">....</td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td style="height:17px; width:363.6px">SUB-TOTAL</td>
                                    <td style="height:17px; width:162.8px">....</td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td style="height:17px; width:363.6px">C.G.S.T. @ 2.5 %</td>
                                    <td style="height:17px; width:162.8px">....</td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td style="height:17px; width:363.6px">S.G.S.T. @ 2.5 %</td>
                                    <td style="height:17px; width:162.8px">.....</td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td style="height:17px; width:363.6px"><strong>GROSS TOTAL&nbsp;</strong></td>
                                    <td style="height:17px; width:162.8px"><strong>.......</strong></td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td style="height:17px; width:363.6px">ROUND OFF</td>
                                    <td style="height:17px; width:162.8px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:17px; width:30px">&nbsp;</td>
                                    <td colspan="2">In Words....</td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="height:296px; width:560.4px">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>All rates are in Indian Rupees<br />
                                                For Meilleur Holidays a unit of - Basu &amp; Company<br />
                                                *This is a computer-generated bill doesn&#39;t need a signature<br />
                                                All payments should be in the below account only. No cash payment allowed. Any cash payment without a valid money receipt will not be validated</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p><strong>Bank Details</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Basu And Company<br />
                                                Axis Bank current A/c 920020061490210<br />
                                                IFSC Code # UTIB0000319</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>`
            $('#emailBody').summernote("code", html)
        })
    </script>
    <script type="text/javascript">
        $('#sendMail').click(function() {
            var mailto = $('#mailto').val();
            var subject = $('#subject').val();
            var message = $('#emailBody').val();
            $.ajax({
                url: "{{ route('invoiceEmailSend') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "mailto": mailto,
                    "subject": subject,
                    "message": message
                },
                success: function(data) {
                    if(data.code == 200){
                        swal("Congratulation!", data.msg, "success");
                    } else {
                        swal("Sorry!", data.msg, "error");
                    }
                }
            });
        });
    </script>
@endpush
