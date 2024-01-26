@extends('layouts.user')

@section('title')
    Login Page
@endsection

@section('content')

    <section class="login-user">
        <div class="left">
           
            <img src="{{ url('frontend/images/loginregis.png') }}" alt="">

        </div>
        <div class="right">
            <a href="{{ route('home')}}">
            <img src="{{ url(('frontend/images/logo-2.png'))}}" class="logo" alt="">
        </a>
            <h1 class="header-third">
                Start Today
            </h1>
            <p class="subheader">
                Because tomorrow become never
            </p>
            <p>
                <a class="btn btn-border btn-google-login" href="{{ route('user.login.google') }}">
                    <img src="{{ url('frontend/images/ic_google.svg')}}" class="icon" alt=""> Sign In with Google
                </a>
            </p>
            {{-- <img src="{{ url('frontend/images/people.png')}}" class="people" alt=""> --}}
        </div>
    </section>
@endsection

@push('prepend-style')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
@endpush