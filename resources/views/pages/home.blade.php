@extends('layouts.app')

@section('title')
    Booking Hotel | Fyphotel
@endsection

@section('content')
<!-- Header  -->
<header class="text-center">
    <h1 class="mt-5">
        Welcome to Fyphotel
        <br />
    </h1>
    <p class="mt-2">
        Morbi eget imperdiet ipsum
        <br />
    </p>
    <a href="" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a> 
    <p class="mt-4">
        <br />
    </p>

</header>
<main>
    <div class="container ">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-12 col-md-10 stats-detail">
                <form class="form-inline custom-form" method="GET" action="{{ route()}}">
                    @csrf
                    <label for="inputUsername" class="sr-only"></label>
                    <input type="number" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="How many person">
                    <label for="checkIn" class="sr-only">Check In</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control datepicker" id="checkIn" placeholder="Check In">
                    </div>
                    {{-- <label for="inputCity" class="sr-only">Jombang</label>
                    <select name="inputCity" id="inputCity" class="custom-select mb-2 mr-sm-2">
                        <option value="Jombang" selected>Jombang</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Semarang">Semarang</option>
                    </select> --}}

                    <label for="checkOut" class="sr-only">Check Out</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control datepicker" id="checkOut" placeholder="Check Out">
                    </div>

                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                        Add Now
                    </button>
                </form>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Available Rooms</h2>
                    <p>We look forward to making 
                        <br />
                        your stay memorable
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/room-1.jpg');">
                        <div class="travel-country">Junior Room</div>
                        <div class="travel-location">IDR 750.000</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/room-2.jpg');">
                        <div class="travel-country">Superior</div>
                        <div class="travel-location">IDR 825.000</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/room-3.jpg');">
                        <div class="travel-country">Suite</div>
                        <div class="travel-location">IDR 950.000</div>
                        <div class="travel-button mt-auto">
                            <a href="details.html" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/room-4.jpg');">
                        <div class="travel-country">Executive Suite</div>
                        <div class="travel-location">IDR 2.000.0000</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    {{-- <h2>Our Networks</h2> --}}
                    <p>
                       {{-- Companies are trusted us --}}
                       <br />
                       {{-- more than just a trip  --}}
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    {{-- <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner"/> --}}
                </div>
            </div>
        </div>
    </section>
{{-- 
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br />
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">
                                
                                “ Lorem ipsum dolor sit amet consectetur adipisicing elit.  Soluta, rerum aut doloribus provident alias cum mollitia“
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Junior Room
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonial">
                                “  Ipsa accusantium vitae asperiores atque deserunt.  maxime quos dicta corporis odit voluptatem nihil recusandae suscipit id cumque nisi non incidunt? “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Superior
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/testimonial-3.png') }}" alt="User" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shabrina</h3>
                            <p class="testimonial">
                                “  Magnam tempore amet, tenetur praesentium ut quidem maxime dicta accusamus eligendi aperiam corrupti labore assumenda illo? “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Executive Suite
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('.datepicker').each(function() {
            $(this).datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
            }
            })  
        });
    });
    </script>
@endpush