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
                        <h2>Domestic Tour</h2>
                        <div class="card packagewrap01">
                            <div class="contentholder55 placelistmain56">
                                <h3>Visit Places</h3>
                                @if (count($data) > 0)
                                    @foreach ($data as $item)
                                        <div class="row package21">
                                            <div class="col-lg-10 col-md-10 col-sm-10 packageName">
                                                <a href="{{ route('packageView') }}?categoryId={{ $item['id'] }}">{{ $item['title'] }}</a>
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
                                    <form action="{{ route('addTourCategory') }}" method="POST" enctype="multipart/form-data" id="contactForm">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="fieldeddcont015">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input class="form-control" type="text" name="title" id="titleSubmit">
                                                    <p id="titleError" class="text-danger"> The Title field is mendatory
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control" name="category" id="category">
                                                        <option value="domestic">Domestic Tour</option>
                                                        <option value="international">International Tour</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input class="form-control" value="{{ old('description') }}" type="text" name="description" id="description" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <ul class="fileupload69">
                                                        <li>
                                                            <input onchange="loadFile(event)" type="file" name="image" id="image" accept="image/png, image/jpg, image/jpeg" />
                                                            <a class="add8988">+</a>
                                                            <p><img id="output" width="200" /></p>
                                                        </li>
                                                    </ul>
                                                    <p id="imageError" class="text-danger"> Only JPG, JPEG, PNG is
                                                        accepted.</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sequence</label>
                                                    <input class="form-control" value="{{ old('sequence') }}" type="number" oninput="validity.valid||(value='');" name="sequence" min="0" id="sequence" placeholder="">
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
                <form action="{{ route('updateTourCategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="fieldeddcont015">
                            <input class="form-control" type="hidden" name="idUpdate" id="idUpdate">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" value="" type="text" name="titleUpdate" id="titleUpdate">
                                <p id="updateTitleError" class="text-danger"> The Title field is mendatory
                                </p>
                            </div>
                            @if (count($data) > 0)
                                @foreach ($data as $item)
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="categoryUpdate" id="categoryUpdate">
                                            <option value="domestic" {{ $item['category'] == 'domestic' ? 'selected' : '' }}>
                                                Domestic Tour</option>
                                            <option value="international" {{ $item['category'] == 'international' ? 'selected' : '' }}>
                                                International Tour
                                            </option>
                                            <option value="weekend-holidays" {{ $item['category'] == 'weekend-holidays' ? 'selected' : '' }}>Weekend
                                                Holidays
                                            </option>
                                            <option value="tea-tourism" {{ $item['category'] == 'tea-tourism' ? 'selected' : '' }}>Tea Tourism
                                            </option>
                                        </select>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" value="" type="text" name="descriptionUpdate" id="descriptionUpdate" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <ul class="fileupload69">
                                    <li>
                                        <input class="form-control" onchange="loadFileUpdate(event)" type="file" id="imageUpdate" name="imageUpdate" accept="image/png, image/gif, image/jpeg" />
                                        <a class="add8988">+</a>
                                        <p><img id="outputUpdate" width="200" /></p>
                                    </li>
                                    <p id="updateImageError" class="text-danger">Only JPG, JPEG, PNG is
                                        accepted.</p>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Sequence</label>
                                <input class="form-control" value="" type="text" name="sequenceUpdate" id="sequenceUpdate" placeholder="">

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
        });
        var successTitleUpdate = true;
        var successImageUpdate = true;
        $("#titleUpdate").on("blur", function() {
            var title = $("#titleUpdate").val();
            if (title.length != 0) {
                successTitleUpdate = true;
                $("#updateTitleError").hide();
                $("#updateTitleError").show();
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
        $("#updateBtn").on("click", function() {
            if (!successTitleUpdate) {
                $("#updateTitleError").show();
            }
            if (!successImageUpdate) {
                $("#updateImageError").show();
            }
            if (successImageUpdate && successTitleUpdate) {
                $("#updateBtn").attr("type", "submit");
            }
        })
        $(document).ready(function() {
            $("#titleError").hide();
            $("#imageError").hide();
        });
        var successTitle = false;
        var successImage = true;
        $("#titleSubmit").on("blur", function() {
            var title = $("#titleSubmit").val();
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
        $("#submitBtn").on("click", function() {
            if (!successTitle) {
                $("#titleError").show();
            }
            if (!successImage) {
                $("#imageError").show();
            }
            if (successImage && successTitle) {
                $("#submitBtn").attr("type", "submit");
            }
        })
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
                url: "{{ route('updateCategoryStatus') }}",
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
                url: "{{ route('fatchTourCategory') }}",
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
                        $('#categoryUpdate').val(res.data.category);
                        $('#descriptionUpdate').val(res.data.description);
                        if(res.data.image) {
                            $("#outputUpdate").attr("src", source + '/' + res.data.image);
                        }
                        $('#sequenceUpdate').val(res.data.sequence);
                        $("#contentedit56").modal('show');
                    }
                }
            });
        })
    </script>
@endsection
@push('scripts')
@endpush
