




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
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                 @include('website.user.sidebar')

                </div>
                @foreach ($doctors as $doctor)
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row row-grid">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="profile-widget">
                                <div class="doc-img">
                                    <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}">
                                        <img class="img-fluid" alt="User Image" src="{{ url($doctor['fullImage']) }}">
                                    </a>
                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content dir">
                                    <h3 class="title">
                                        <i class="fas fa-check-circle verified"></i>
                                        <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}"> {{ $doctor->name}}</a>
                                    </h3>
                                    <p  style="font-family: 'Cairo', sans-serif !important;" class="speciality text-rtl">  {{ $doctor['treatment']['name'] }}  </p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating">(17)</span>
                                    </div>
                                    <ul class="available-info">

                                        @foreach ($doctor['hospital'] as $hospital)
                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="fas fa-map-marker-alt"></i>  {{ $hospital['address'] }}
                                        </li>
                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="far fa-clock"></i> متاح من الأحد الي الخميس
                                        </li>
                                       {{--  <p class="font-fira-sans font-medium text-base leading-5 text-black-dark text-left pt-3">{{ $hospital['name'] }}</p> --}}

                                        @endforeach


                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="far fa-money-bill-alt"></i>   {{ $doctor['appointment_fees'] }}   <i
                                                class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                title="Lorem Ipsum"></i>
                                        </li>
                                    </ul>
                                    <div class="row row-sm">
                                        <div class="col-6">
                                            <a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" class="btn view-btn">{{__('View Profile')}}</a>
                                        </div>
                                        <div class="col-6">
                                            <a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('booking/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" class="btn book-btn"> {{__('Make Appointment')}} </a>
                                        </div>

                                        {{--
                                              <a href="{{ url('booking/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" data-te-ripple-init data-te-ripple-color="light" class="font-fira-sans lg:px-1 lg:w-44 xsm:w-36 md:px-3 text-sm xl:py-3 xlg:py-3 xl:px-4 xlg:px-4 lg:py-3 xmd:py-1 md:py-3 sm:py-3 sm:px-2 msm:py-2 msm:px-3 xsm:px-3 xsm:py-2 xxsm:py-2 xxsm:px-3 text-white bg-primary hover:bg-primary text-center">{{__('Make Appointment')}}</a>
                                    <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" data-te-ripple-init data-te-ripple-color="light" class="font-fira-sans text-primary text-sm font-normal leading-4 underline 2xl:mx-5 xl:mx-5 xlg:mx-2 lg:mx-2 md:mx-5 lg:py-3 xmd:py-2 md:py-2 sm:py-0 msm:py-2 xsm:py-2 xxsm:py-2">{{__('View Profile')}}</a>
                                             --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>




    @include('layout.footer_site')




