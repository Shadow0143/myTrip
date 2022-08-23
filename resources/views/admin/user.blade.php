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
    <style>

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
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content addbackend4587">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card packagewrap01">
                            <div class="contentholder55 placelistmain56">
                                <h3>Users</h3>
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <div class="row package21">
                                            <div class="col-lg-10 col-md-10 col-sm-10 packageName">
                                                <a href="#">{{ $item['name'] }}</a>

                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 packageName2">
                                                <button type="button" class="btncomntcli56" data-code="{{ $item['id'] }}"><i class="fas fa-edit"></i></button>
                                                {{-- <select class="onchangeajax" name="status" id="status">
                                                    <option value="Active" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Active' ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="Inactive" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Inactive' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                </select> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="modal fade" id="contentedit66" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('userSaves') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="fieldeddcont015">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name" id="name">
                                                    <p id="nameError" class="text-danger"> The Title field is mendatory
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="email" id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="text" name="password" id="password">
                                                </div>
                                                <select name="role" id="role">
                                                    <option class="form-control" value="1">Admin</option>
                                                    <option class="form-control" value="2">Accounts</option>
                                                    <option class="form-control" value="3">Sales</option>
                                                </select>
                                                <button type="button" id="submitBtn" class="pblish458">Publish</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="addbutton689" data-toggle="modal" data-target="#contentedit66">+</a>
            </div>
        </section>
    </div>
    <div class="modal fade" id="contentedit56" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('updateUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="fieldeddcont015">
                            <input class="form-control" type="hidden" name="idUpdate" id="idUpdate">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="nameUpdate" id="nameUpdate">
                                <p id="updateNameError" class="text-danger"> The Title field is mendatory
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="emailUpdate" id="emailUpdate">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="text" name="passwordUpdate" id="passwordUpdate">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="roleUpdate" id="roleUpdate">
                                    <option class="form-control" {{ $item['role_id'] == '1' ? 'selected' : '' }} value="1">Admin</option>
                                    <option class="form-control" {{ $item['role_id'] == '2' ? 'selected' : '' }} value="2">Accounts</option>
                                    <option class="form-control" {{ $item['role_id'] == '3' ? 'selected' : '' }} value="3">Sales</option>
                                </select>
                            </div>
                            <button type="button" id="updateBtn" class="pblish458">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#updateNameError").hide();
            $("#updateImageError").hide();
        });
        var successNameUpdate = true;
        var successImageUpdate = true;
        $("#nameUpdate").on("blur", function() {
            var title = $("#nameUpdate").val();
            if (title.length != 0) {
                successNameUpdate = true;
                $("#updateNameError").hide();
            } else {
                successNameUpdate = false;
                $("#updateNameError").show();
            }
        });
        $("#imageUpdate").change(function() {
            var ext = $('#imageUpdate').val().split('.').pop().toLowerCase();

            if (ext == "jpg" || ext == "jpeg" || ext == "png") {
                successImageUpdate = true;
                $("#updateImageError").hide();
            }
            if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext) {
                $("#updateImageError").show();
                successImageUpdate = false;
            }
            if (!ext) {
                successImageUpdate = true;
                $("#updateImageError").hide();
            }
        });
        $("#updateBtn").on("click", function() {
            if (!successNameUpdate) {
                $("#updateNameError").show();
            }
            if (!successImageUpdate) {
                $("#updateNameError").show();
            }
            if (successImageUpdate && successNameUpdate) {
                $("#updateBtn").attr("type", "submit");
            }
        });
        $(document).ready(function() {
            $("#nameError").hide();
            $("#imageError").hide();
        });
        var successName = false;
        var successImage = true;
        $("#name").on("blur", function() {
            var name = $("#name").val();
            if (name.length == 0) {
                $("#nameError").show();
            } else {
                successName = true;
                $("#nameError").hide();
            }
        });
        $("#image").change(function() {
            var ext = $('#image').val().split('.').pop().toLowerCase();
            if (ext == "jpg" || ext == "jpeg" || ext == "png") {
                successImage = true;
                $("#imageError").hide();
            }
            if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext) {
                $("#imageError").show();
                successImage = false;
            }
            if (!ext) {
                successImage = true;
                $("#imageError").hide();
            }
        });
        $("#submitBtn").on("click", function() {
            if (!successName) {
                $("#titleError").show();
            }
            if (!successImage) {
                $("#imageError").show();
            }
            if (successImage && successName) {
                $("#submitBtn").attr("type", "submit");
            }
        });
        var loadFile = function(event) {
            var logo = document.getElementById('output');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
        var loadFileUpdate = function(event) {
            var logo = document.getElementById('outputUpdate');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
        $(document).on('change', '.onchangeajax', function() {
            $.ajax({
                type: "POST",
                url: "{{ route('updateTestimonialStatus') }}",
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
        $(document).on('click', '.btncomntcli56', function() {
            $.ajax({
                type: "POST",
                url: "{{ route('fatchUser') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $(this).attr('data-code')
                },
                cache: false,
                success: function(res) {
                    if (res.data != null) {
                        var source = "{!! asset('package') !!}";
                        $('#codeUpdate').val(res.data.id);
                        $('#idUpdate').val(res.data.id);
                        $('#nameUpdate').val(res.data.name);
                        $('#emailUpdate').val(res.data.email);
                        $('#passwordUpdate').val(res.data.password);
                        $('#roleUpdate').val(res.data.role_id);
                        $("#contentedit56").modal('show');
                    }
                }
            });
        })
    </script>
@endsection
@push('scripts')
@endpush
