@extends('admin.layouts.app')


@section('content')



<div class="content-wrapper">

<section>
    <div class="container-fluid">


        <div class="addbanner015">
        <a href="{{ url('admin\client-add') }}" class="addbanner-text">Add Client</a>
            <div class="card">

                <table id="addbann454" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Banner</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    @php
                    $i=1;
                    foreach ($clientlist as $key => $list) {
                    @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $list->name }}</td>

                            <td><img src="{{ URL::to('/') }}/clientimage/{{ $list->image }}" class="addbanner" alt=""></td>
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
                                        <td><a href="{{ url('admin/client-edit/'.$list->id) }}"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="{{ url('admin/client-destroy/'.$list->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
