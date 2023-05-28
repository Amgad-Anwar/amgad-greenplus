

 <!DOCTYPE html>
 <html lang="en" class="rtl">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
     <title>Green Plus</title>

     <link href="{{ asset('assets2/img/logo.png') }}" rel="icon">

     <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets2/plugins/fontawesome/css/fontawesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets2/plugins/fontawesome/css/all.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets2/css/feather.css') }}">

     <link rel="stylesheet" href="{{ asset('assets2/plugins/fancybox/jquery.fancybox.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('assets2/css/rtl.css') }}">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
 </head>
 <body>

 <div class="main-wrapper">


     @include('layout.header-top_rtl')

     @include('layout.nav_site')

     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Login <span>Green Plus</span></h3>
                                </div>
                                <form action="{{ url('patient-login') }}" method="post">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input type="email"  name="email"  class="form-control floating">
                                        <label class="focus-label">Email</label>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" name="password"  class="form-control floating">
                                        <label class="focus-label">Password</label>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="text-end">
                                        <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Login</button>
                                    <div class="login-or">
                                        <span class="or-line"></span>
                                        <span class="span-or">or</span>
                                    </div>
                                    <div class="row form-row social-login">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-facebook w-100"><i
                                                    class="fab fa-facebook-f me-1"></i> Login</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn btn-google w-100"><i class="fab fa-google me-1"></i>
                                                Login</a>
                                        </div>
                                    </div>
                                    <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('layout.footer_site')













{{-- @extends('layout.mainlayout',['activePage' => 'login'])
@section('content')
<div class="xl:w-3/4 mx-auto">
    <div class="flex justify-between items-center pt-20 pb-20 gap-10 lg:flex-row xxsm:flex-col xxsm:mx-5 xl:mx-0 2xl:mx-0">
        <div class="bg-slate-100 justify-center items-center p-10 2xl:w-2/4 xxsm:w-full">
            <h1 class="font-fira-sans leading-10 font-medium text-3xl mb-10">{{__('Talk to thousands of specialist doctors.')}}</h1>
            <div>
                <img src="{{asset('assets/image/login.png')}}" class="w-full h-3/5" alt="">
            </div>
        </div>
        <div class="2xl:w-2/4 xxsm:w-full">
            <h1 class="font-fira-sans leading-10 font-normal text-3xl">{{__('Welcome Back,')}}</h1>
            <h1 class="font-fira-sans leading-10 font-medium text-3xl">{{__('Login to get started!')}}</h1>
            <form action="{{ url('patient-login') }}" method="post">
                @csrf
                <div class="pt-5">
                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                    <input type="text" name="email" class="@error('email') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class=" pt-3">
                    <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Password')}}</label>
                    <input type="password" name="password" class="@error('password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                @if (session('error'))
                <div class="text-center">
                    <span class="custom_error  text-red font-fira-sans font-normal text-base mt-1">{{ session('error') }}</span>
                </div>
                @endif
                <div class="pt-10">
                    <button type="submit" class="font-fira-sans text-white bg-primary w-full text-sm font-normal py-3">{{__('Login')}}</button>
                    <h1 class="font-fira-sans font-medium text-sm leading-5 pt-4 text-center">{{__('Don’t have an account?  ')}} <a href="{{url('/signup')}}" class="text-primary text-normal">{{__('Signup')}}</a></h1>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection --}}
