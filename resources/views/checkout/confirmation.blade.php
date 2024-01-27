@extends('layouts.success')

@section('title', 'Confirmation')
@section('alternate-navbar-title', 'Confirmation')

@section('content')

<main>
<section class="section-details-header">
    <div class="container">
    <div class="row">
        <div class="col p-0">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item">
                        Choose Room
                    </li>
                    <li class="breadcrumb-item active">
                        Confirmation
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
</section>
<section class="section-pick-content" id="pickContent">

    <div class="container pick-container">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row mb-3">
                                <label for="room_number" class="col-sm-2 col-form-label">Room</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="room_number" name="room_number"
                                        placeholder="col-form-label" value="{{ $room->number }} " readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="room_type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="room_type" name="room_type"
                                        placeholder="col-form-label" value="{{ $room->type->name }} " readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="room_capacity" class="col-sm-2 col-form-label">Capacity</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="room_capacity" name="room_capacity"
                                        placeholder="col-form-label" value="{{ $room->capacity }} " readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="room_price" class="col-sm-2 col-form-label">Price / Day</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="room_price" name="room_price"
                                        placeholder="col-form-label"
                                        value="{{ Helper::convertToRupiah($room->price) }}" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12 mt-2">
                            <form method="POST"
                                action=" {{ route('checkout.store', ['room' => $room->id])}}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="check_in" class="col-sm-2 col-form-label">Check In</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="check_in" name="check_in"
                                            placeholder="col-form-label" value="{{ $stayFrom }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="check_out" class="col-sm-2 col-form-label">Check Out</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="check_out" name="check_out"
                                            placeholder="col-form-label" value="{{ $stayUntil }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="how_long" class="col-sm-2 col-form-label">Total Day</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="how_long" name="how_long"
                                            placeholder="col-form-label"
                                            value="{{ $dayDifference }} {{ Helper::plural('Day', $dayDifference) }} "
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="total_price" class="col-sm-2 col-form-label">Total Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="total_price" name="total_price"
                                            placeholder="col-form-label"
                                            value="{{ Helper::convertToRupiah(Helper::getTotalPayment($dayDifference, $room->price)) }} "
                                            readonly>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Pay DownPayment</button>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</section>
</main>
@endsection