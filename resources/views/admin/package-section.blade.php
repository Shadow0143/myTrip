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
                                <h3>Sections</h3>
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <div class="row package21">
                                            <div class="col-lg-10 col-md-10 col-sm-10 packageName">
                                                <a href="{{ route('packageSubSectionView') }}?sectionId={{ $item['id'] }}">{{ $item['title'] }}</a>

                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 packageName2">
                                                <button type="button" class="btncomntcli56" data-code="{{ $item['id'] }}"><i class="fas fa-edit"></i></button>
                                                <select class="onchangeajax" name="status" id="status">
                                                    <option value="Active" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Active' ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="Inactive" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Inactive' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                </select>
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
                                        <h5 class="modal-title" id="exampleModalLongTitle">ADD Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('packageSectionSave') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="fieldeddcont015">
                                                <input class="form-control" type="hidden" value="{{ $_GET['packageId'] }}" name="packageId" id="packageId">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input class="form-control" type="text" name="title" id="title">
                                                    <p id="titleError" class="text-danger"> The Title field is mendatory
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sub Title</label>
                                                    <input class="form-control" type="text" name="subTitle" id="subTitle">
                                                </div>
                                                <div class="form-group">
                                                    <label>Short Description</label>
                                                    <input class="form-control" type="text" name="shortDescription" id="description" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Long Description</label>
                                                    <input class="form-control" type="text" name="longDescription" id="description" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <ul class="fileupload69">
                                                        <li>
                                                            <input onchange="loadFile(event)" type="file" id="image" name="image" accept="image/png, image/gif, image/jpeg" />
                                                            <a class="add8988">+</a>
                                                            <p><img id="output" width="200" /></p>
                                                        </li>
                                                    </ul>
                                                    <p id="imageError" class="text-danger"> Only JPG, JPEG, PNG is
                                                        accepted.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Background Image</label>
                                                    <ul class="fileupload69">
                                                        <li>
                                                            <input onchange="loadFileBg(event)" type="file" name="backgroundImage" id="backgroundImage" accept="image/png, image/gif, image/jpeg" />
                                                            <a class="add8988">+</a>
                                                            <p><img id="outputBg" width="200" /></p>
                                                        </li>
                                                        <p id="backgroundImageError" class="text-danger"> Only JPG, JPEG, PNG is
                                                            accepted.</p>
                                                    </ul>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sequence</label>
                                                    <input class="form-control" type="text" name="sequence" id="sequence" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Section Name</label>
                                                    <select name="sectionName" id="sectionName">
                                                        <option class="form-control" value="banner">Banners Section</option>
                                                        <option class="form-control" value="package-tour">Package Tour Section</option>
                                                        <option class="form-control" value="hotels">Hotels Section</option>
                                                        <option class="form-control" value="summary">Summary Section</option>
                                                        <option class="form-control" value="what-you-will-get">What You Will Get Section</option>
                                                        <option class="form-control" value="information">Important Information Section</option>
                                                    </select>
                                                </div>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('updatePackageSection') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="fieldeddcont015">
                            <input class="form-control" type="hidden" name="idUpdate" id="idUpdate">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="titleUpdate" id="titleUpdate">
                                <p id="updateTitleError" class="text-danger"> The Title field is mendatory
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Sub Title</label>
                                <input class="form-control" type="text" name="subTitleUpdate" id="subTitleUpdate">
                            </div>
                            <div class="form-group">
                                <label>Short Description</label>
                                <input class="form-control" type="text" name="shortDescriptionUpdate" id="description" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Long Description</label>
                                <textarea class="form-control" type="text" name="longDescriptionUpdate" id="longDescriptionUpdate" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <ul class="fileupload69">
                                    <li>
                                        <input onchange="loadFileUpdate(event)" type="file" id="imageUpdate" name="imageUpdate" accept="image/png, image/gif, image/jpeg" />
                                        <input type="hidden" name="imageUpdateOld" id="imageUpdateOld" />
                                        <a class="add8988">+</a>
                                        <p><img id="outputUpdate" width="200" /></p>
                                    </li>
                                    <p id="updateImageError" class="text-danger">Only JPG, JPEG, PNG is
                                        accepted.</p>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Background Image</label>
                                <ul class="fileupload69">
                                    <li>
                                        <input onchange="loadFileBgUpdate(event)" type="file" name="backgroundImageUpdate" id="backgroundImageUpdate" accept="image/png, image/gif, image/jpeg" />
                                        <input type="hidden" name="backgroundImageUpdateOld" id="backgroundImageUpdateOld" />
                                        <a class="add8988">+</a>
                                        <p><img id="outputBgUpdate" width="200" /></p>
                                    </li>
                                    <p id="updateBackgroundImageError" class="text-danger">Only JPG, JPEG, PNG is
                                        accepted.</p>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Sequence</label>
                                <input class="form-control" type="text" name="sequenceUpdate" id="sequenceUpdate" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Section Name</label>
                                                    <select name="sectionNameUpdate" id="sectionNameUpdate">
                                                        <option class="form-control" value="banner">Banners Section</option>
                                                        <option class="form-control" value="package-tour">Package Tour Section</option>
                                                        <option class="form-control" value="hotels" >Hotels Section</option>
                                                        <option class="form-control" value="summary">Summary Section</option>
                                                        <option class="form-control" value="what-you-will-get">What You Will Get Section</option>
                                                        <option class="form-control" value="information">Important Information Section</option>
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
            $("#updateTitleError").hide();
            $("#updateImageError").hide();
            $("#updateBackgroundImageError").hide();
        });
        var successTitleUpdate = true;
        var successImageUpdate = true;
        var successBackgroundImageUpdate = true;
        $("#titleUpdate").on("blur", function() {
            var title = $("#titleUpdate").val();
            if (title.length != 0) {
                successTitleUpdate = true;
                $("#updateTitleError").hide();
            } else {
                successTitleUpdate = false;
                $("#updateTitleError").show();
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
        $("#backgroundImageUpdate").change(function() {
            var ext = $('#backgroundImageUpdate').val().split('.').pop().toLowerCase();

            if (ext == "jpg" || ext == "jpeg" || ext == "png") {
                successBackgroundImageUpdate = true;
                $("#updatebackgroundImageError").hide();
            }
            if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext) {
                $("#updatebackgroundImageError").show();
                successBackgroundImageUpdate = false;
            }
            if (!ext) {
                successBackgroundImageUpdate = true;
                $("#updatebackgroundImageError").hide();
            }
        });
        $("#updateBtn").on("click", function() {
            if (!successTitleUpdate) {
                $("#updateTitleError").show();
            }
            if (!successImageUpdate) {
                $("#updateImageError").show();
            }
            if (!successBackgroundImageUpdate) {
                $("#updatebackgroundImageError").show();
            }
            if (successImageUpdate && successTitleUpdate && successBackgroundImageUpdate) {
                $("#updateBtn").attr("type", "submit");
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#titleError").hide();
            $("#imageError").hide();
            $("#backgroundImageError").hide();
        });
        var successTitle = false;
        var successImage = true;
        var successBackgroundImage = true;
        $("#title").on("blur", function() {
            var title = $("#title").val();
            if (title.length == 0) {
                $("#titleError").show();
            } else {
                successTitle = true;
                $("#titleError").hide();
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
        $("#backgroundImage").change(function() {
            var ext = $('#backgroundImage').val().split('.').pop().toLowerCase();
            if (ext == "jpg" || ext == "jpeg" || ext == "png") {
                successBackgroundImage = true;
                $("#backgroundImageError").hide();
            }
            if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext) {
                $("#backgroundImageError").show();
                successBackgroundImage = false;
            }
            if (!ext) {
                successBackgroundImage = true;
                $("#backgroundImageError").hide();
            }
        });
        $("#submitBtn").on("click", function() {
            if (!successTitle) {
                $("#titleError").show();
            }
            if (!successImage) {
                $("#imageError").show();
            }
            if (!successBackgroundImage) {
                $("#backgroundImageError").show();
            }
            if (successImage && successTitle && successBackgroundImage) {
                $("#submitBtn").attr("type", "submit");
            }
        });
    </script>
    <script>
        var loadFile = function(event) {
            var logo = document.getElementById('output');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var loadFileBg = function(event) {
            var logo = document.getElementById('outputBg');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var loadFileUpdate = function(event) {
            var logo = document.getElementById('outputUpdate');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        var loadFileBgUpdate = function(event) {
            var logo = document.getElementById('outputBgUpdate');
            logo.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        $(document).on('change', '.onchangeajax', function() {
            $.ajax({
                type: "POST",
                url: "{{ route('updateSectionStatus') }}",
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
    </script>
    <script>
        $(document).on('click', '.btncomntcli56', function() {
            $.ajax({
                type: "POST",
                url: "{{ route('fatchPackageSection') }}",
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
                        $('#titleUpdate').val(res.data.title);
                        $('#subTitleUpdate').val(res.data.subTitle);
                        $('#shortDescriptionUpdate').val(res.data.shortDescription);
                        $('#longDescriptionUpdate').summernote("code", res.data.longDescription);
                        if (res.data.image) {
                            $("#outputUpdate").attr("src", source + '/' + res.data.image);
                            $("#imageUpdateOld").val(res.data.image);
                        }
                        if (res.data.backgroundImage) {
                            $("#outputBgUpdate").attr("src", source + '/' + res.data.backgroundImage);
                            $("#backgroundImageUpdateOld").val(res.data.backgroundImage);
                        }
                        $('#sequenceUpdate').val(res.data.sequence);
                        $('#sectionNameUpdate').val(res.data.sectionName);
                        $("#contentedit56").modal('show');
                    }
                }
            });
        })
    </script>
    <script type="text/javascript">
        $(function() {
            $('#longDescription').summernote()
        })
    </script>
    <script type="text/javascript">
        $(function() {
            $('#longDescriptionUpdate').summernote()
        })
    </script>
@endsection
@push('scripts')
@endpush