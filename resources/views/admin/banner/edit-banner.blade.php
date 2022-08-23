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
<form method ="POST" action="/admin/update-banner" enctype="multipart/form-data">

    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $editdata->id }}">
                <div class="form_holder045">

                    <div class="addsec45">Banner Section</div>

                    <div class="field_col06">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $editdata->title }}" class="form-control">
                        <span class="error01">Enter Title Here</span>
                    </div>

                    <div class="field_col06">
                        <label>Sub Title</label>
                        <input type="text" name="sub_title" value="{{ $editdata->sub_title }}" class="form-control">
                        <span class="error01">Enter Title Here</span>
                    </div>



                    <div class="field_col06">
                        <label>Banner Image</label>
                        <div class="uploadfiledes">
                            <small>Upload Image</small>

                            <input type="file" name="banner" value="{{ $editdata->banner_image }}" class="form-control">
                            <img src="{{URL::to('/')}}/banner/{{ $editdata->banner_image }}" >
                        </div>
                        <span class="error01">Enter Title Here</span>
                    </div>



<div class="btmsubmit46"><button type="submit" class="form-control btn dflt_btn">Submit</button></div>

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


<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <script type="text/javascript">

        $(document).ready(function() {
            $('#addbann454').DataTable();
        } );

    </script>

@endpush
