@extends('layouts.app')
@section('title')
    <title>{{__('Error')}} / {{__('Ipathsala')}}</title>
@endsection
@section('css')
@endsection
@section('content')
    <div class="clearfix"></div>
    <div class="banner-inner">
        <div class="text-bnr">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="sec-sec"><h1>{{__('No data Found')}}</h1></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item about-item active">{{__('No data Found')}}</li>
                    </ol>
                </div>
            </div>
        </div>
        <img title="{{__('No data Found')}}" alt="{{__('No data Found')}}"  src="{{ asset('images/banner.jpg') }}" class="w-50" />
    </div>
    <div style="clear:both !important"></div>
    <div class="container">
        <div class="col-xs-12 text-center padding1">
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <h1>{{__('No data Found')}}</h1>
            <p>{{__('No data Found')}}</p>
        </div>
    </div>
    <div style="clear:both !important"></div>
@endsection
@section('js')
@endsection
@push('scripts')
@endpush