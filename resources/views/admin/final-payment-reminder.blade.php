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
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
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
                                        <label>DOJ:</label><input type="text" name="jurneyDate" id="jurneyDate" value="{{ $item['jurneyDate'] }}" class="form-control">
                                    </div>
                                </td>
                                <td style="width:45%">
                                    <div class="field_row01">
                                        <label>Number:</label><input type="number" name="contactNumber" value="{{ $item['contactNumber'] }}" class="form-control">
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
        });
    </script>
    <script>
        $('#getContent').click(function() {
            var jurneyDate = $('#jurneyDate').val()
            var enqueryID = $('#enqueryID').val()
            var html = `<p>Dear Guest,</p>

                            <p>Greetings from <a href="http://meilleurholidays.com">meilleurholidays.com</a></p>

                            <p>This is to inform you that as per our respective banker information, till now we have not received the balance payment for your upcoming trip. As per our payment policy, you have failed to make the final payment before due date (ten days prior your journey date). We are extending your due date till today 12:00 midnight.</p>

                            <p>Now, we regret to mention that your package will get auto released by today 12:00 midnight and 100% amount will be non refundable.</p>

                            <p><strong><u>If you have already processed the payment, please let us know on urgent basis.</u></strong></p>

                            <p>From,<br />
                            Accounts Department<br />
                            Meilleur Holidays Private Limited</p>`
            $('#emailBody').summernote("code", html)
        })
    </script>
    <script type="text/javascript">
        $('#sendMail').click(function() {
            var mailto = $('#mailto').val();
            var subject = $('#subject').val();
            var message = $('#emailBody').val();
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