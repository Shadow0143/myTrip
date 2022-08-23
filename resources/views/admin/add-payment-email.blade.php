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
                                    <td style="width:45%"><label>Enq Id:</label><Span id="ref" >{{ $item['enqueryID'] }}</Span><input style="display: none;" value="{{ $item['enqueryID'] }}" id="enqueryID" name="enqueryID"></td>
                                    <td style="width:45%"><label>Name:</label>{{ $item['customerName'] }}</td>
                                </tr>
                                <tr>
                                    <td style="width:45%">
                                        <div class="field_row01">
                                            <label>Bank:</label>
                                            <select id="bank" name="bank" class="form-control form-gap">
                                                <option value="SBI">SBI</option>
                                                <option value="AXIS">AXIS</option>
                                                <option value="ICICI">ICICI</option>
                                                <option value="HDFC">HDFC</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width:45%">
                                        <div class="field_row01">
                                            <label>Number:</label><input type="text" readonly name="contactNumber" value="{{ $item['contactNumber'] }}" class="form-control">
                                        </div>
                                        <div class="field_row01">
                                            <label>INR:</label><input type="text" id="ammountRecived" name="ammountRecived" class="form-control ammountRecived">
                                        </div>
                                    </td>
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
                                    <div class="form-group">
                                            <input type="button" value="Get Mail Body" name="getContent" id="getContent">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                        <button type="submit" value="submit"  name="sendMail" id="sendMail" class="btn btn-primary"><i class="far fa-envelope"></i>
                                            Send</button>
                                    </div>
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
            var bank= $('bank').val()
            var ref= $('ref').html()
            var html = `<div> 
                            <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Dear Concern,</span></span></p>
                            <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Greetings from Meilleur Holidays <a href="http://meilleurholidays.com" target="_blank">www.meilleurholidays.com</a>.&nbsp;<br />
                            This is to inform you that we have received Rs.${price} on 14/6/2022 through ${bank} against your upcoming ...................package Ref:No. ${ref} <br />
                            <br />
                            Please note that this payment doesn&rsquo;t guarantee the 100% confirmation of the service till full payment is made within due time.<br />
                            Thanks &amp; Regards,</span></span></p>
                            <p><em>This is an electronically generated document, no signature is required</em></p>
                            <table border="0" cellpadding="0" cellspacing="1">
                                <tbody>
                                    <tr>
                                        <td><a name="_MailAutoSig"><img alt="Meilleur Holidays" src="http://bo.meilleurholidays.com/images/signature-mel.jpg" /></a></td>
                                    </tr>
                                    <tr>
                                        <td><br />
                                        Meilleur Holidays<br />
                                        Merlin Villa, Room No: 3B<br />
                                        88A Hazra Road, Kolkata - 700026<br />
                                        Email: support@meilleurholidays.com<br />
                                        Hand Phone: + 91-33-40048302
                                        <p>&nbsp;</p>
                                        <p><a href="http://meilleurholidays.com" target="_blank">www.meilleurholidays.com</a><br />
                                        &nbsp;</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">-----------------------------------------------<br />
                            <strong>Please consider the environment before printing this email and attachment</strong><br />
                            <span style="color:#008000">This e-mail and any files transmitted with it are for the sole use of the intended recipient(s) and may contain confidential and privileged information. If you are not the intended recipient, please contact the sender by reply e-mail and destroy all copies and the original message. Any unauthorized review, use, disclosure, dissemination, forwarding, printing or copying of this email or any action taken in reliance on this e-mail is strictly prohibited and may be unlawful. The recipient acknowledges that Meilleur Holidays or its subsidiaries and associated companies(Basu and Company),are unable to exercise control or ensure or guarantee the integrity of/over the contents of the information contained in e-mail transmissions and further acknowledges that any views expressed in this message are those of the individual sender and no binding nature of the message shall be implied or assumed unless the sender does so expressly with due authority of Meilleur Holidays. Before opening any attachments please check them for viruses and defects</span>.&nbsp;</span></span></p>
                        </div>`
            $('#emailBody').summernote("code", html)
        })
    </script>
    <script type="text/javascript">
        $('#sendMail').click(function() {
            var mailto = $('#mailto').val();
            var subject = $('#subject').val();
            var message = $('#emailBody').val();
            var enqueryID = $('#enqueryID').val();
            var bank = $('#bank').val();
            var contactNumber = $('#contactNumber').val();
            var ammountRecived = $('#ammountRecived').val();
            $.ajax({
                url: "{{ route('addPaymentEmailSave') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "enqueryID": enqueryID,
                    "bank": bank,
                    "contactNumber": contactNumber,
                    "ammountRecived": ammountRecived,
                    "mailto": mailto,
                    "subject": subject,
                    "message": message
                },
                success: function(data) {
                    if(data.code == 200){
                        //swal("Congratulation!", data.msg, "success");
                            window.location='/admin/search-by-enq-id';
                    } else {
                        swal("Sorry!", data.msg, "error");
                    }
                }
            });
        });


        $(".ammountRecived").keypress(function (e) {
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });


    </script>
@endpush
