
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

                    @if($errors->any())
                            @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach

                    @endif

                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
                            </div>
                            <div class="col-md-6 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Patient Register</h3>
                                </div>

                                <form action="{{ url('signUp') }}" method="post">
                                    <input type="hidden" name="from" value="patient">
                                    @csrf
                                    <div class="form-group form-focus">
                                        <input name="name" type="text" class="form-control floating">
                                        <label class="focus-label">Name</label>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group form-focus">
                                        <input  name="phone" type="text" class="form-control floating">
                                        <label class="focus-label">Mobile Number</label>
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group form-focus">
                                        <input name="email" type="email" class="form-control floating">
                                        <label class="focus-label">Your Email Address</label>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group form-focus">
                                        <input  type="password" name="password"type="text" class="form-control floating">
                                        <label class="focus-label">Password </label>
                                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                                    </div>


                                    <div class="pt-3">
                                        <label for="datepicker" class="font-fira-sans text-black text-sm font-normal">{{__('Birth Date')}}</label>
                                        <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                            <input type="date" name="dob" class="datepicker1 w-full text-sm font-fira-sans text-gray block p-2 z-20" placeholder="Select a date" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
                                        </div>
                                        @error('dob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>






                                    <div class="pt-3">
                                        <div class="flex items-center mb-5">
                                            <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Gendar')}}</label>
                                            <div class="ml-10 flex gap-10">
                                                <div class="form-check form-check-inline">
                                                    <input checked class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_male" value="male">
                                                    <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_male">{{ __('Male') }}</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_female" value="female">
                                                    <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_female">{{ __('Female') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Signup</button>
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
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

   @include('layout.footer_site')







{{-- @extends('layout.mainlayout',['activePage' => 'signup'])


@section('content')

<div class="xl:w-3/4 mx-auto">
    <div class="flex justify-between pt-20 pb-20 gap-10 lg:flex-row xxsm:flex-col xxsm:mx-5 xl:mx-0 2xl:mx-0">
        <div class="bg-slate-100 2xl:w-2/4 xxsm:w-full">
            <h1 class="font-fira-sans leading-10 font-medium text-3xl px-5 p-5 ml-5">{{__('Find the best doctor and medicine for you.')}}</h1>
            <div class="">
                <img src="{{asset('assets/image/doctor-nurses.png')}}" class="mt-20" alt="">
            </div>
        </div>

        <div class="2xl:w-2/4 xxsm:w-full">
            <h1 class="font-fira-sans leading-10 font-normal text-3xl">{{__('Welcome,')}}</h1>
            <h1 class="font-fira-sans leading-10 font-medium text-3xl">{{__('Create New Account!')}}</h1>
            <div class="pt-5 flex">
                @if (old('from'))
                @if (old('from') == 'doctor')
                @php
                $active = 'doctor';
                @endphp
                @else
                @php
                $active = 'patient';
                @endphp
                @endif
                @else
                @php
                $active = 'patient';
                @endphp
                @endif
                <div data-attr="doctor" class="signupDiv w-1/3 cursor-pointer py-1 ml-2 border border-[#D8D8D8] {{ $active == 'doctor' ? 'active' : '' }}">
                    <input {{ $active == 'doctor' ? 'checked' : '' }} id="bordered-radio-1" type="radio" value="doctor" name="signup_title" class="border-[#D8D8D8] cursor-pointer signup_title ml-2 text-blue-600">
                    <label for="bordered-radio-1" class="text-sm font-medium text-[#666666]">{{ __('Doctor') }}</label>
                </div>
                <div data-attr="patient" class="signupDiv w-1/3 cursor-pointer py-1 ml-2 border border-[#D8D8D8] {{ $active == 'patient' ? 'active' : '' }}">
                    <input {{ $active == 'patient' ? 'checked' : '' }} id="bordered-radio-2" type="radio" value="patient" name="signup_title" class="border-[#D8D8D8] cursor-pointer signup_title ml-2 text-blue-600">
                    <label for="bordered-radio-2" class="text-sm font-medium text-[#666666]">{{ __('Patient') }}</label>
                </div>
            </div>
            <div class="tab-content contentDisplay" id="tabs-tabContent">
                <div class="{{ $active == 'doctor' ?  'active' : 'hide' }} doctorDiv">
                    <form action="{{ url('doctorRegister') }}" method="post">
                        @csrf
                        <input type="hidden" name="from" value="doctor">
                        <div class="pt-3">
                            <label class="font-fira-sans text-black text-sm font-normal">{{__('Doctor Name')}}</label>
                            <input type="text" name="doc_name" value="{{ old('doc_name') }}" class="@error('doc_name') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter doctor name">
                            @error('doc_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                            <input type="email" name="doc_email" value="{{ old('doc_email') }}" class="@error('doc_email') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter email">
                            @error('doc_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="phone" class="font-fira-sans text-black text-sm font-normal">{{__('Phone Number')}}</label>
                            <input type="tel" name="doc_phone" value="{{ old('doc_phone') }}" class="@error('doc_phone') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light doc_phone">
                            <input type="hidden" name="phone_code" value="+91">
                            @error('doc_phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="password" class="font-fira-sans text-black text-sm font-normal">{{__('Create Password')}}</label>
                            <input type="password" name="doc_password" class="@error('doc_password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter password">
                            @error('doc_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="doc_dob" class="font-fira-sans text-black text-sm font-normal">{{__('Birth Date')}}</label>
                            <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                <input type="text" name="doc_dob" class="@error('doc_dob') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Select a date" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
                            </div>
                            @error('doc_dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <div class="flex items-center mb-5">
                                <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Gendar')}}</label>
                                <div class="ml-10 flex gap-10">
                                    <div class="form-check form-check-inline">
                                        <input checked class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="doc_gender" id="doc_gender_male" value="male">
                                        <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_male">{{ __('Male') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="doc_gender" id="doc_gender_female" value="female">
                                        <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_female">{{ __('Female') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <button type="submit" class="font-fira-sans text-white bg-primary w-full text-sm font-normal py-3">{{__('Submit')}}</button>
                            <h1 class="font-fira-sans font-medium text-sm leading-5 pt-4 text-center">{{__('Already have an
                            account? ')}}
                                <a href="{{url('patient-login')}}" class="text-primary text-normal">{{__('Login')}}</a>
                            </h1>
                        </div>
                    </form>
                </div>
                <div class="{{ $active == 'patient' ?  'active' : 'hide' }} patientDiv">
                    <form action="{{ url('signUp') }}" method="post">
                        <input type="hidden" name="from" value="patient">
                        @csrf
                        <div class="pt-3">
                            <label class="font-fira-sans text-black text-sm font-normal">{{__('Patient Name')}}</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter patient name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Email')}}</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror  w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="phone" class="font-fira-sans text-black text-sm font-normal">{{__('Phone Number')}}</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light phone">
                            <input type="hidden" name="phone_code" value="+91">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="password" class="font-fira-sans text-black text-sm font-normal">{{__('Create Password')}}</label>
                            <input type="password" name="password" class="@error('password') is-invalid @enderror w-full text-sm font-fira-sans text-gray block p-2 z-20 border border-white-light" placeholder="Enter password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <label for="datepicker" class="font-fira-sans text-black text-sm font-normal">{{__('Birth Date')}}</label>
                            <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                <input type="text" name="dob" class="datepicker1 w-full text-sm font-fira-sans text-gray block p-2 z-20" placeholder="Select a date" data-te-datepicker-toggle-ref data-te-datepicker-toggle-button-ref />
                            </div>
                            @error('dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-3">
                            <div class="flex items-center mb-5">
                                <label for="email" class="font-fira-sans text-black text-sm font-normal">{{__('Gendar')}}</label>
                                <div class="ml-10 flex gap-10">
                                    <div class="form-check form-check-inline">
                                        <input checked class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_male" value="male">
                                        <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_male">{{ __('Male') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary checked:border-primary focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="gender_female" value="female">
                                        <label class="form-check-label inline-block text-gray-800  cursor-pointer" for="gender_female">{{ __('Female') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <button type="submit" class="font-fira-sans text-white bg-primary w-full text-sm font-normal py-3">{{__('Submit')}}</button>
                            <h1 class="font-fira-sans font-medium text-sm leading-5 pt-4 text-center">{{__('Already have an
                            account? ')}}
                                <a href="{{url('patient-login')}}" class="text-primary text-normal">{{__('Login')}}</a>
                            </h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ url('assets/js/intlTelInput.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.signupDiv').click(function() {
            $('.signupDiv').removeClass('active');
            $(this).addClass('active');
            $(this).children('input[type=radio]').prop('checked', true);
            var radioVal = $(this).children('input[type=radio]').val();
            $('.invalid-feedback').text('');
            if (radioVal == 'doctor') {
                $('.doctorDiv').show();
                $('.patientDiv').hide();
            }
            if (radioVal == 'patient') {
                $('.doctorDiv').hide();
                $('.patientDiv').show();
            }
        });
    });
    const phoneInputField = document.querySelector(".phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["us", "co", "in", "de"],
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "{{url('assets/js/utils.js')}}",
    });
    phoneInputField.addEventListener("countrychange", function() {
        var phone_code = $('.phone').find('.iti__selected-dial-code').text();
        $('input[name=phone_code]').val('+' + phoneInput.getSelectedCountryData().dialCode);
    });

    const DocphoneInputField = document.querySelector(".doc_phone");
    const docphoneInput = window.intlTelInput(DocphoneInputField, {
        preferredCountries: ["us", "co", "in", "de"],
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "{{url('assets/js/utils.js')}}",
    });
    DocphoneInputField.addEventListener("countrychange", function() {
        $('input[name=phone_code]').val('+' + docphoneInput.getSelectedCountryData().dialCode);
    });
</script>
@endsection --}}
