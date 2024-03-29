@extends('layouts.success')

@section('title', 'Checkout Success')
@section('alternate-navbar-title', 'Checkout Page')

@section('content')
<main>
    <section class="section-success-content">
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
            <h1>Yay! Success</h1>
            <p>
                Berhasil checkout
                <br>
                please read it as well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</div>
</main>
@endsection