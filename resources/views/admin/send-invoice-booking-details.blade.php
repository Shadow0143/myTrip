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
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('saveInvoice') }}" method="post">
                    @csrf
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Compose New Message</h3>
                        </div>
                        <input type="hidden" value="{{ $data['enqueryId'] }}" name="enqueryId" id="enqueryId">
                        <div class="card-body">
                            <div class="form-group">
                                <textarea id="templateBody" name="templateBody" class="form-control" style="height: 300px"> {{ $newhtml }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Compose New Message</h3>
                    </div>
                    <div class="card-body">
                        <p>Saved Vouchers:</p>
                        @if (!empty($invoice))
                            <ul>
                                @foreach ($invoice as $invoice)
                                    <li><a href="{{ url('invoice-pdf') }}/{{ $invoice['invoiceLink'] }}">{{ url('invoice-pdf') }}/{{ $invoice['invoiceLink'] }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" id="mailto" name="mailto" value="{{ $data['email'] }}" placeholder="To:">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Subject:" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea id="emailBody" class="form-control" style="height: 300px"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" id="sendMail" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#templateBody').summernote()
        })
        $(function() {
            $('#emailBody').summernote()
        })
        $(document).ready(function() {
            var html = `<p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Dear Guest, </span></span></p>
                        <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Greetings from <a href="https://meilleurholidays.com">meilleurholidays.com</a> !!!</span></span></p>
                        <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Please Click Here to get your Reservation Voucher for your reference. Kindly carry the same along with your Photo Id Proof (Passport / Voter Id).<br />
                        If you are unable to view, copy paste the below link to view in browser. </span></span></p>
                        <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">Regards,</span></span></p>
                        <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">A K Singh - Senior Manager Operation<br />
                        Phone: + 91-33-40048302<br />
                        email: <a href="support@meilleurholidays.com">support@meilleurholidays.com</a><br />
                        Web: <a href="http://meilleurholidays.com" target="_blank">meilleurholidays.com</a></span></span></p>
                        <table border="0" cellpadding="0" style="width:430px">
                            <tbody>
                                <tr>
                                    <td style="width:87px">
                                    <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><em>Member &amp; </em><br />
                                    <em><em>Certified By:</em></em></span></span></p>
                                    </td>
                                    <td style="width:350px">
                                    <p><span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif">|| West Bengal Govt Registered || EHTTOA</span></span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>`
            $('#emailBody').summernote("code", html)
        })
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
                    if (data.code == 200) {
                        swal("Congratulation!", data.msg, "success");
                    } else {
                        swal("Sorry!", data.msg, "error");
                    }
                }
            });
        });
    </script>
@endpush