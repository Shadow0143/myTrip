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


    <style>
        .leadentry01.settings015 .fieldrow025 {
            width: 100%
        }

        .half01 {
            width: 100% !important
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header topsec47">
                                <h2 class="card-title">Setting</h2>
                            </div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if (count($data) > 0)
                                @foreach ($data as $item)
                                    <div class="card-body table-responsive p-0">
                                        <div class="contentbox01">
                                            <form method="POST" action="{{ route('submit_setting') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-md-12">
                                                    <ul class="leadentry01 settings015 row">
                                                        <li class="col-md-6">
                                                            <label>Website Name</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['websiteName'] }}"
                                                                    name="websiteName" id="websiteName" type="text"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Website URL</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['websiteURL'] }}" name="websiteUrl"
                                                                    id="websiteUrl" type="text" class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Email</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['email'] }}" type="email"
                                                                    name="email" id="email" class="form-control full01"
                                                                    placeholder="">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Contact Number</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['contactNumber'] }}"
                                                                    name="contactNumber" id="contactNumber"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Alternative Contact Number </label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['contactNumber2'] }}"
                                                                    name="alternativeContactNumber"
                                                                    id="alternativeContactNumber"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Address</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['address'] }}" name="address"
                                                                    id="address" class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Logo</label>
                                                            <div class="fieldrow025">
                                                                <input type="file" onchange="loadFile(event)" name="logo" id="logo">
                                                                <p><img id="output" width="200" /></p>
                                                            </div>
                                                            
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Title</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['title'] }}" type="text"
                                                                    name="title" id="title" class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Description</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['description'] }}" name="description" id="description"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Fabicon</label>
                                                            <div class="fieldrow025">
                                                                <input type="file" onchange="loadFileFavicon(event)" name="favicon" id="favicon">
                                                                <p><img id="outputFavicon" width="200" /></p>
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Facebook Link</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['facebookLink'] }}" type="text"
                                                                    name="facebookLink" id="facebookLink"
                                                                    class="form-control half01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Instagram Link</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['instagramLink'] }}" type="text"
                                                                    name="instagramLink" id="instagramLink"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>Twitter Link</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['twitterLink'] }}" type="text"
                                                                    name="twitterLink" id="twitterLink"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                        <li class="col-md-6">
                                                            <label>LinkedIn Link</label>
                                                            <div class="fieldrow025">
                                                                <input value="{{ $item['linkedinLink'] }}" type="text"
                                                                    name="linkedinLink" id="linkedinLink"
                                                                    class="form-control full01">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="btmbtnsubmit45">
                                                    <button type="submit" name="save" id="save"
                                                        class="btn default">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
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
    <script>
        var loadFile = function(event) {
            var logo = document.getElementById('output');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var loadFileFavicon = function(event) {
            var favicon = document.getElementById('outputFavicon');
            favicon.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
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
