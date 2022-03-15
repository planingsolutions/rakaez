@extends('layout.login')

@section('tittle', 'الدخول الي لوحة التحكم')

@section('content')

<div class="login-left ">
    <img class="img-fluid" src="{{asset('assets/img/logo.jpeg') }}" alt="Logo">
</div>
<div class="login-right">
    <div class="login-right-wrap">
        <h1>تسجيل الدخول</h1>
        <p class="account-subtitle">الي لوحة التحكم</p>

        @if(Session::has('success'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif

        <form method="POST" action="{{route('adminpanal.login')}}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="name" value="{{old('name')}}" placeholder="البريد الالكتروني">
                @error('name')
                <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control " name="password" placeholder="كلمة السر">
                @error('password')
                <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn12 btn-block" type="submit"style="border:1px solid white; background-color:#81295b; color:white;" >تسجيل الدخول</button>
            </div>
        </form>

        <div class="login-or">
            <span class="or-line"></span>
            <!-- <span class="span-or">or</span> -->
        </div>

    </div>
</div>

@endsection