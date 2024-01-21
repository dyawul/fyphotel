@extends('layouts.success')

@section('title', 'Pick Room')
@section('alternate-navbar-title', 'Choose Room')

@section('content')

<main>
<section class="section-details-header">
    <div class="container">
    <div class="row">
        <div class="col p-0">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Paket Room
                    </li>
                    <li class="breadcrumb-item active">
                        Room Available
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
</section>
<section class="section-pick-content" id="pickContent">

    <div class="container pick-container">
        <h1>13 Room Available</h1>
        <p>
            Choose Room
        </p>
        <div class="section-pick-rooms row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/room-1.jpg');">
                    <div class="travel-country">Junior Room</div>
                    <div class="travel-location">IDR 750.000</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details px-4">
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
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
                            Choose This
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection