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
    <style>
        body {
            font-family: sans-serif;
            background-color: #eeeeee;
        }

        .file-upload {
            background-color: #ffffff;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #ff8836;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #e37b34;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #e37b34;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-bottom: 20px;
            border: 4px dashed #e37b34;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #f5924e;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #072b19;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Compose</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="file-upload">
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                        <h3>Drag and drop a file or select add Image</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                class="image-title">Uploaded Image</span></button>
                    </div>
                </div>
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                    Image</button>
            </div>
        </section>
        <section>

        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#compose-textarea').summernote()
        })

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
@endpush
