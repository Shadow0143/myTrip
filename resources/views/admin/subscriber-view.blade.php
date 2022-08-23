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
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Suscribers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Suscribers</a></li>
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
                                <h3>Suscribers</h3>
                                @if (!empty($subscriber))
                                    <table id="addbann454" class="table table-striped table-bordered" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Title</th>
                                            </tr>
                                        </thead>

                                        @foreach ($subscriber as $key => $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item['subscriber_email'] }}</td>

                                                </tr>
                                            </tbody>
                                        @endforeach

                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
@endsection
@push('scripts')
@endpush
