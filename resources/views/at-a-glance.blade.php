@extends('layouts.app')
@section('metades')
    <meta name="description" content="The best Travel Agents in India. FOR BOOKING ☎ CALL +91-9836-11-7777" />
    <meta name="author" content="Meilleur Holidays" />
    <meta name="keywords" content="Meilleur Holidays" />
@endsection
@section('title')
    <title>Packages - Travel Agents in Kolkata - Meilleur Holidays</title>
@endsection
@section('css')
    <style>
        .page-link-item-pages .py-2 {
            display: inline-block;
        }

        .page-link-item-pages svg {
            width: 22px;
        }

        .page-link-item-pages p {
            display: none;
        }

        .page-link-item-pages .flex {
            visibility: hidden;
        }

        .page-link-item-pages .hidden {
            visibility: visible;
        }
    </style>
@endsection
@section('content')
    <section class="inner-area parallax-bg" data-background="{{ asset('images/img/scenery01.jpg') }}" data-type="parallax" data-speed="3">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-12">
                        <h1>Tour Packages</h1>
                        <p>Home <a href="#">All Tour Packages</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="special-packages-sec pt-85 pb-60">
        <div class="container">
            <div class="row grid-mb">
                {{-- <div class="col-md-4">
                    <div class="filterbox56">
                        <h2>Choose Option By</h2>
                        <div class="filter44">
                            <div class="checksec">
                                <h3>Inclusion</h3>
                                <ul>
                                    <li>
                                        <label class="checkbox69">Weekend Holidays
                                            <input type="checkbox"  class="typeCheckbox" value="36">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Tea Tourism
                                            <input type="checkbox" class="typeCheckbox" value="37">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox69">Internatinal Tour
                                            <input type="checkbox" class="typeCheckbox" value="38">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <!-- <div class="listsearchcover">
                        <form action="{{ route('packagesDetails') }}" method="GET">
                            <div class="searchbox">
                                <input type="text" name="search" placeholder="Type Destination...">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div> -->
                    <div class="mobile_menu045 sidenav" id="mySidenav1">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
                        <div class="filterbox56 mobile">
                            <h2>Choose Option By</h2>
                            <div class="filter44">
                                
                            </div>
                        </div>
                    </div>
                    @if (count($data) > 0)
                        <div class="row">
                            @foreach ($data as $item)
                                <div class=" col-lg-4 col-md-4  col-sm-4">
                                    <div class="special-packages">
                                        <div class="thumb">
                                            <img src="{{ asset('package') }}/{{ $item['image'] }}" alt="">
                                            <div class="post-title-box">
                                                <div class="price-box">
                                                    <h5>{{ $item['price'] }}/-</h5>
                                                </div>
                                                <div class="title-box">
                                                    {!! $item['shortDescription'] !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <ul class="info">
                                                <li><a href="#"><i class="fa fa-calendar"></i>{!! $item['duration'] !!}</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-user"></i>{!! $item['numberOfPerson'] !!}</a>
                                                </li>
                                            </ul>
                                            <p>{!! $item['whatYouWillGet'] !!}</p>
                                            <div class="listboxbtm14">
                                                <a class="btn-theme" href="">Book Now</a>
                                                <a class="btn-theme" href="{{ url('/packages') }}/{{ $item['slug'] }}">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="page-link-item text-center pt-30 pb-20">
                        <ul class="page-link-item-pages">
                            {!! $data->links() !!}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('js')
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#navbar-collapse-1 ul.navbar-nav li.nav-item').removeClass('active');
            $('#navbar-collapse-1 ul.navbar-nav li.toursinindia-class').addClass('active');
        });
    </script>
    <script>
         $(document).on('change', '.typeCheckbox', function() {
            $.ajax({
                type: "GET",
                url: "{{ route('packages') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "value": $(this).val()
                },
                cache: false,
                success: function(data) {}
            });
        })
    </script>
@endpush