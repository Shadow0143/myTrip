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
            <div class="addbanner015">
                <a href="{{ url('admin\bannercontain-add') }}" class="addbanner-text">Add Page</a>
                <div class="card">
                    <table id="addbann454" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        foreach ($bannercontainlist as $key => $list) {
                        @endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $list->title }}</td>
                                <td></td>
                                <td>
                                    <div class="">
                                        <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <a href="{{ url('admin/bannercontain-edit/'.$list->id) }}"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/bannercontain-destroy/'.$list->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            @php
                            $i++;}
                        @endphp
                        </tbody>
                    </table>
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
