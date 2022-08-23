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
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
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
                                <h3>Place Form</h3>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="dgd">Sub Title </label>
                                                <input type="text" class="form-control" id="shortDescription" name="shortDescription" placeholder="Sub Title">
                                            </div>
                                            <div class="form-group">
                                                <label>Description </label>
                                                <textarea class="form-control" id="longDescription" name="longDescription" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Duration </label>
                                                <textarea class="form-control" id="duration" name="duration" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Best Time To Visit </label>
                                                <textarea class="form-control" id="bestTimeToVisit" name="bestTimeToVisit" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Attraction</label>
                                                <textarea class="form-control" id="attraction" name="attraction" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>What You Will Get</label>
                                                <textarea class="form-control" id="whatYouWillGet" name="whatYouWillGet" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Important Information</label>
                                                <textarea class="form-control" id="importantInformation" name="importantInformation" placeholder="Description"></textarea>
                                            </div>
                                            <div class="adddays05">
                                                <div class="addabtn45"><button type="button" data-toggle="modal"
                                                        data-target="#adddas" class="btn default">Add Days</button></div>
                                                <div class="modal fade" id="adddas" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Add
                                                                    Days</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="dgdg">Title</label>
                                                                    <input type="text" class="form-control" id="dgd"
                                                                        placeholder="Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="dgd">Sub Title </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Sub Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description </label>
                                                                    <div class="card-body">
                                                                        <textarea id="summernote">
                                                                      Place <em>some</em> <u>text</u> <strong>here</strong>
                                                                    </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label> Images </label>
                                                                    <ul class="uploadfilelist">
                                                                        <li>
                                                                            <div class="images">
                                                                                <div class="pic">
                                                                                    <p><input type="file" accept="image/*"
                                                                                            name="image" id="file"
                                                                                            onchange="loadFile(event)"
                                                                                            style="opacity: 0;"></p>

                                                                                    <p><label for="file"
                                                                                            style="cursor: pointer;">Upload
                                                                                            Image</label></p>
                                                                                    <p><img id="output" width="100" /></p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn default">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="daystable">
                                                    <table>
                                                        <tr>
                                                            <th style="width:5%">Sl No.</th>
                                                            <th style="width:10%">Title</th>
                                                            <th style="width:60%">Description</th>
                                                            <th style="width:10%">Image</th>
                                                            <th style="width:10%">Action</th>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Hotels</label>
                                                            <select class="duallistbox" multiple="multiple">
                                                                <option selected>Alabama</option>
                                                                <option>Alaska</option>
                                                                <option>California</option>
                                                                <option>Delaware</option>
                                                                <option>Tennessee</option>
                                                                <option>Texas</option>
                                                                <option>Washington</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Images </label>
                                                <ul class="uploadfilelist">
                                                    <li>
                                                        <div class="images">
                                                            <div class="pic">
                                                                <p><input type="file" accept="image/*" name="image"
                                                                        id="file" onchange="loadFile(event)"
                                                                        style="opacity: 0;"></p>
                                                                <p><label for="file" style="cursor: pointer;">Upload
                                                                        Image</label></p>
                                                                <p><img id="output" width="100" /></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="adddays05">
                                                <div class="addabtn45"><button type="button" data-toggle="modal"
                                                        data-target="#adddas2" class="btn default">Add Section</button></div>
                                                <div class="modal fade" id="adddas2" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form action="">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Add
                                                                        Section</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="dgdg">Title</label>
                                                                        <input type="text" class="form-control" id="title" name="title"
                                                                            placeholder="Title">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="dgd">Sub Title </label>
                                                                        <input type="text" id="shortDescription" name="shortDescription" class="form-control"
                                                                            placeholder="Sub Title">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Description </label>
                                                                        <div class="card-body">
                                                                            <textarea id="summernote2" name="longDescription">
                                                                          Place <em>some</em> <u>text</u> <strong>here</strong>
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label> Images </label>
                                                                        <ul class="uploadfilelist">
                                                                            <li>
                                                                                <div class="images">
                                                                                    <div class="pic">
                                                                                        <p><input type="file" accept="image/*"
                                                                                                name="image" id="file"
                                                                                                onchange="loadFile(event)"
                                                                                                style="opacity: 0;"></p>
    
                                                                                        <p><label for="file"
                                                                                                style="cursor: pointer;">Upload
                                                                                                Image</label></p>
                                                                                        <p><img id="output" width="100" /></p>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" onclick="store()" class="btn default">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="daystable">
                                                    <table>
                                                        <tr>
                                                            <th style="width:5%">Sl No.</th>
                                                            <th style="width:10%">Title</th>
                                                            <th style="width:60%">Description</th>
                                                            <th style="width:10%">Image</th>
                                                            <th style="width:10%">Action</th>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Livery</td>
                                                            <td>Luxary hotel in middle area</td>
                                                            <td style="width:120px"><img class="adimg44"
                                                                    src="../../dist/img/prod-5.jpg"></td>
                                                            <td>
                                                                <div class="actionwrap01">
                                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Meta Title</label>
                                                <input type="text" class="form-control" id="metaTitle" name="metaTitle" placeholder="Meta Title">
                                            </div>
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <input type="text" class="form-control" id="metaDiscription" name="metaDiscription" placeholder="Meta Description">
                                            </div>
                                            <div class="footer012">
                                                <button type="submit"  class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="addbutton689" data-toggle="modal" data-target="#contentedit66">+</a>
            </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>

    <script>
        $(function store(){
         var title = document.getElementByName("title");
         var shortDescription = document.getElementByName("shortDescription");
         var longDescription = document.getElementByName("longDescription");
         locaStorage.setItem("title",title.value);
         locaStorage.setItem("shortDescription",shortDescription.value);
         locaStorage.setItem("longDescription",longDescription.value);
        })
    </script>
    <script>
        $(function() {
            $('#summernote').summernote()
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
        $(function() {
            $('#summernote2').summernote()
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
        $(function() {
            $('.duallistbox').bootstrapDualListbox()
        })
    </script>
@endsection
@push('scripts')
@endpush
