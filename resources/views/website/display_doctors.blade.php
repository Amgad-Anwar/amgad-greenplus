
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

    <div style="direction: ltr" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12 order-md-last order-sm-last order-last map-left">
                    <div class="row align-items-center mb-4 dir">
                        <div class="col-md-6 col">
                            <h4>2245 تم ايجاد</h4>
                        </div>
                        <div class="col-md-6 col-auto">
                            <div class="sort-by d-sm-block d-none">
                                <select class="form-select">
                                    <option >ترتيب حسب</option>
                                    <option class="sorting">التقييم</option>
                                    <option class="sorting">الانتشار</option>
                                    <option class="sorting">الاقدم</option>
                                    <option class="sorting">المجاني</option>
                                </select>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($doctors as $doctor)
                        <div class="col-sm-6 col-md-4 col-xl-6">
                            <div class="profile-widget">
                                <div class="doc-img">
                                    <a href="doctor-profile.html">
                                        <img class="img-fluid" alt="User Image" src="{{ url($doctor['fullImage']) }}">
                                    </a>
                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content dir">
                                    <h3 class="title">
                                        <i class="fas fa-check-circle verified"></i>
                                        <a href="doctor-profile.html">د.  {{$doctor['name'] }}</a>
                                    </h3>
                                    <p  style="font-family: 'Cairo', sans-serif !important;" class="speciality text-rtl">  {{$doctor->category->name}} </p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating"> {{ $doctor['rate'] }} ({{ $doctor['review']}}{{__(' reviews') }})</span>
                                    </div>
                                    <ul class="available-info">
                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </li>
                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="far fa-clock"></i> متاح من الأحد الي الخميس
                                        </li>
                                        <li style="font-family: 'Cairo', sans-serif !important;">
                                            <i class="far fa-money-bill-alt"></i>    {{ $doctor['appointment_fees'] }}  <i
                                                class="fas fa-info-circle" data-bs-toggle="tooltip"
                                                title="Lorem Ipsum"></i>
                                        </li>
                                    </ul>
                                    <div class="row row-sm">
                                        <div class="col-6">
                                            <a style="font-family: 'Cairo', sans-serif !important;" href={{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" class="btn view-btn">دخول الملف الشخصي </a>
                                        </div>
                                        <div class="col-6">
                                            <a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('booking/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" class="btn book-btn">حجز الأن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-xl-6 col-lg-12 map-right">
                    <div id="map" class="map-listing"></div>
                </div>

            </div>

        </div>
    </div>




    @include('layout.footer_site')
{{-- @if (count($doctors) > 0)
@if (isset($doctors['data']))
@php
$data = $doctors['data'];
@endphp
@else
@php
$data = $doctors;
@endphp
@endif
@foreach ($data as $doctor)
<div class="mainDiv">
    <div class="mainDiv1 p-10 h-full border border-white-light 1xl:h-[350px] xxmd:h-[300px] xmd:h-[300px] msm:h-[300px]">
        <img class="1xl:mt-8 msm:mt-2 xsm:mt-0 xxsm:mt-0 border-2 border-primary rounded-full p-0.5 m-auto mt-12 object-cover w-36 h-36" src="{{ url($doctor['fullImage']) }}" alt="" />
        <h5 class="font-fira-sans font-normal text-lg leading-6 text-black text-center md:text-md pt-5">{{
            $doctor['name'] }}</h5>
        <p class="font-normal leading-4 text-sm text-primary text-center font-fira-sans md:text-md py-2">{{
            $doctor['treatment']['name'] }}</p>
        <p class="font-normal leading-4 text-sm text-gray text-center md:text-md"><i class="fa-solid fa-star text-yellow"></i> {{ $doctor['rate'] }} ({{ $doctor['review'] }}{{__(' reviews')}})</p>
    </div>

    <div class="hoverDoc bg-white shadow-2xl p-5 relative hover:z-50 xxsm:w-full xlg:w-[450px] lg:h-[300px] lg:overflow-y-auto xl:w-[685px] 1xl:h-[350px] 1xl:overflow-y-auto">
        <div data-id="{{ $doctor['id'] }}" class="cursor-pointer absolute flex align-center justify-center shadow-2xl bg-white-50 add-favourite p-4 rounded-full text-primary">
            <i class="{{ $doctor['is_fav'] == 'true' ? 'fa fa-bookmark' : 'fa-regular fa-bookmark' }}"></i>
        </div>
        <div class="flex gap-10 mt-10 items-center xmd:ml-10 lg:ml-0 xxsm:ml-0 xlg:ml-0 xxsm:flex-col md:flex-row lg:flex-col xl:flex-row">
            <div class="">
                <img class="border-2 border-primary rounded-full p-0.5 object-cover w-36 h-36 ml-5" src="{{ url($doctor['fullImage']) }}" alt="" />
                <h5 class="font-fira-sans font-normal text-xl leading-6 text-black-dark pt-5 text-center">{{$doctor['name'] }}</h5>
                <p class="font-normal leading-4 text-sm text-primary font-fira-sans py-2 text-center">{{$doctor['treatment']['name'] }}</p>
                <p class="font-normal leading-4 text-sm text-gray text-center"><i class="fa-solid fa-star text-yellow"></i> {{ $doctor['rate'] }} ({{ $doctor['review']}}{{__(' reviews') }})</p>
            </div>
            <div class="xxsm:pl-0 xmd:pl-10 xxsm:ml-0 xlg:pl-0 lg:ml-0 lg:pl-0 xlg:ml-5 md:pl-5 md:border-l-2 md:border-white-light xxsm:border-l-0 lg:border-l-0 xl:border-l-2 xl:pl-5">
                <div>
                    <div class="mb-10">
                        <h2 class="font-fira-sans font-normal text-sm leading-4 text-gray">{{$doctor['category']['name']}}</h2>
                        @foreach ($doctor['hospital'] as $hospital)
                        @if($loop->iteration <= 2) <p class="font-fira-sans font-medium text-base leading-5 text-black-dark text-left pt-3">{{ $hospital['name'] }}</p>
                            <p class="font-fira-sans font-normal text-sm leading-4 text-gray text-left pt-2"><span class="mr-2">
                                    <i class="fa-solid fa-location-dot"></i></span class="ml-2">{{ $hospital['address'] }}</p>
                            @else
                            <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}">
                                <p class="font-fira-sans font-normal text-sm leading-4 text-black text-right">{{__('More...')}} </p>
                            </a>
                            @break
                            @endif
                            @endforeach
                    </div>
                    <h1 class="font-fira-sans font-semibold text-2xl text-primary leading-7 pt-5 xmd:pt-2 sm:pt-1 mb-5">
                        <span class="font-light">{{ $currency }}</span> {{ $doctor['appointment_fees'] }}
                    </h1>
                    <div class="flex xl:flex-row xlg:flex-row lg:flex-row xsm:flex-row xxsm:flex-col items-center">
                        <a href="{{ url('booking/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" data-te-ripple-init data-te-ripple-color="light" class="font-fira-sans text-white bg-primary hover:bg-primary text-sm text-center py-2.5 px-5">{{__('Make Appointment')}}</a>
                        <a href="{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" data-te-ripple-init data-te-ripple-color="light" class="font-fira-sans text-primary text-sm font-normal leading-4 underline py-2 ml-3">{{__('View Profile')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif --}}
