@extends('admin.layouts.app')
@section('metades')
    <meta name="description" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="author" content="Touran - Travel & Tour HTMl5 Template" />
    <meta name="keywords" content="Touran - Travel & Tour HTMl5 Template" />
@endsection
@section('title')
    <title>Touran - Travel & Tour HTMl5 Template</title>
@endsection
@section('content')
<div class="content-wrapper">
    <section>
        <div class="container-fluid">
            <div class="addbanner015 adsec01">
                <h2>Add Sections</h2>
                <div class="card">
                    <form method ="POST" action="/admin/post-bannercontain" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form_holder045">
                            <div class="addsec45">Banner Section</div>
                            <div class="field_col06">
                                <label>Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control">
                                <span class="error01">Enter Title Here</span>
                            </div>
                            <div class="field_col06">
                                <label>Link</label>
                                <input type="text" name="link" placeholder="Title" class="form-control">
                                <span class="error01">Enter Title Here</span>
                            </div>
                            <div class="field_col06">
                                <label> Fa Icon</label>
                                <input type="text" name="image" placeholder="Fa Icon" class="form-control">
                            </div>
                            <div class="field_col06">
                                <label> Sequence</label>
                                <input type="number" name="sequence" placeholder="Sequence" class="form-control">
                            </div>
                            <!--<div class="field_col06">
                                <label> Image</label>
                                <div class="uploadfiledes">
                                    <small>Upload Image</small>

                                    <input type="file" name="image" placeholder="Image" class="form-control">
                                </div>
                                <span class="error01">Enter Title Here</span>
                            </div>-->
                            <div class="field_rowfill">
                                <p>Status:</p>
                                <input type="radio" id="active" name="active" value="1">
                                <label for="active">Active</label>
                                <input type="radio" id="inactive" name="inactive" value="0">
                                <label for="inactive">Inactive</label>
                            </div>
                            <!-- <div class="field_rowfill">
                                <label>Description</label>
                                <textarea placeholder="Description" class="form-control"></textarea>
                                <span class="error01">Enter Title Here</span>
                            </div>-->
                            <div class="btmsubmit46">
                                <button type="submit" class="form-control btn dflt_btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>











@endsection

@section('js')

@endsection

@push('scripts')

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>


@endpush
