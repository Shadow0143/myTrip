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
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="addcontent58wrap">
                <h2>Suppliment</h2>
                <div class="addcontholder154">
                    <div class="row">
                        <div class="col-md-4 col-12 addcontform">
                            <form action="{{ route('addSupplementSave') }}" method="post">
                                @csrf
                                <table width="100%">
                                    <tr>
                                        <td style="width:100px"><label>Enquiry Id</label></td>
                                        <td><input type="text" id="enqueryId" name="enqueryId"
                                                value="{{ $_GET['enqueryId'] }}"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Details</label></td>
                                        <td> <input type="text" id="details" name="details"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Date Of Service</label></td>
                                        <td><input type="date" id="dateOfService" name="dateOfService"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Location</label></td>
                                        <td> <input type="text" id="location" name="location"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit">Create</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="adrow56">
                                <a href="#">Show All Row</a>
                                <a href="#">Remove Deleted Rows</a>
                            </div>
                            <div class="addtablecol44">
                                <table width="100%" class="addtablcont7878">
                                    <tr>
                                        <th>Enquery Id</th>
                                        <th>Details</th>
                                        <th>Date Of Service</th>
                                        <th>Location</th>
                                    </tr>
                                    @if (count($data) > 0)
                                        @foreach ($data as $item)
                                            <div>
                                                <tr>
                                                    <td>{{ $item['enqueryId'] }}</td>
                                                    <td>{{ $item['details'] }}</td>
                                                    <td>{{ $item['dateOfService'] }}</td>
                                                    <td>{{ $item['location'] }}</td>
                                                </tr>
                                                {{-- <tr>
                                                    <td colspan="10" style="padding: 4px;">
                                                        <span><b> System Track:</b> Recorded by on 02/04/2022</span>
                                                        <span>Deleted by on 02/4/2022</span>
                                                        <span><b
                                                                style="background-color: #888; color:#fff; padding:1px 4px;">User
                                                                Comment:</b> Nice Arrangement</span>
                                                    </td>
                                                    <td>sdfs</td>
                                                </tr> --}}

                                            </div>
                                    @endforeach
                                    @endif
                                    {{-- <tr>
                                        <td colspan="11" class="nofound45">No Result Found</td>
                                    </tr> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </script>
@endpush
