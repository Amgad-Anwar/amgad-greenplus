{{-- @extends('layout.mainlayout',['activePage' => 'pharmacy'])

@section('content')
<div class="xl:w-3/4 mx-auto">
    <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 flex justify-center 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row md:flex-row sm:flex-row msm:flex-col xsm:flex-col xxsm:flex-col msm:pt-5 mt-10 ">
        <div class="flex bg-white w-full 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row  md:flex-col sm:flex-col msm:flex-col xsm:flex-col xxsm:flex-col border border-white-light justify-between">
            <div class="flex 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row md:flex-row sm:flex-row msm:flex-row xsm:flex-col xxsm:flex-col">
                <div class="bg-white 2xl:w-60 xl:w-60 xlg:w-60 xl:h-80 xlg:h-80 lg:h-80 lg:w-60 xmd:w-52 xmd:h-72 md:w-full md:h-72 sm:w-full sm:h-72 msm:w-96 msm:h-72 xsm:w-full xsm:h-60 xxsm:w-full xxsm:h-60">
                    <div class="flex flex-col justify-center items-center xmd:mt-5 md:mt-10 lg:mt-10 sm:mt-14 msm:mt-10 xsm:mt-11 xxsm:mt-11">
                        <img class="2xl:w-28  2xl:h-28 xlg:h-20 xlg:w-20 xl:h-20 xl:w-20 lg:h-20 lg:w-20 md:h-20 md:w-20 sm:h-20 sm:w-20 msm:w-20 msm:h-20 xsm:h-20 xsm:w-20 xxsm:h-20 xxsm:w-20  rounded-full" src="{{ $pharmacy->full_image }}" alt="" />
                        <h5 class="font-fira-sans font-normal text-xl leading-6 text-black-dark text-center md:text-md pt-5">{{ $pharmacy->name }}</h5>
                        <p class="font-normal leading-4 text-sm text-gray text-center md:text-md pt-3"><i class="fa-solid fa-door-open text-primary"></i> {{__('Opens At ')}}{{ $pharmacy['openTime'] }}</p>
                    </div>
                </div>
                <div class="bg-white 2xl:w-96 xl:w-80 xlg:w-72 xl:h-80 xlg:h-80 lg:h-80 lg:w-64 xmd:w-60 xmd:h-72 md:w-full md:h-72 sm:w-full sm:h-72 msm:w-96 msm:h-72 xsm:w-full xsm:h-72 xxsm:w-full xxsm:h-72">
                    <div class="flex flex-col justify-center xmd:mt-5 md:mt-5 lg:mt-10 sm:mt-0 msm:mt-5 xsm:mt-5 xxsm:mt-1  border-l border-white-light">
                        <div class="2xl:px-10 xl:px-10 xlg:px-10 lg:px-10 xmd:px-10 md:px-10 xxsm:px-5">
                            <p class="font-fira-sans font-normal text-sm leading-4 text-gray text-left pt-5">
                            <p class="font-fira-sans font-normal text-sm leading-4 text-gray text-left"><span><i class="fa-solid fa-phone"></i></span> {{ $pharmacy['phone'] }}</p>
                            <p class="font-fira-sans font-normal text-sm leading-4 text-gray text-left py-4"><span class="text-bold">{{__('@')}}</span> {{ $pharmacy['email'] }}</p>
                            <p class="font-fira-sans font-normal text-sm leading-4 text-gray text-left pt-2"><span><i class="fa-solid fa-location-dot"></i></span> {{ $pharmacy['address'] }}</p>
                        </div>
                        <div class="2xl:pt-6 2xl:px-10 xl:px-10 xl:pt-4 xlg:px-10 lg:px-10 xmd:px-10 md:px-10 xxsm:px-5 xlg:mt-6 lg:mt-6 xmd:mt-5 md:mt-5 sm:mt-5 msm:mt-6 xsm:mt-6 xxsm:mt-6">
                            <a href="{{ url('pharmacy-product/'.$pharmacy['id'].'/'.Str::slug($pharmacy['name'])) }}" class="lg:px-1 lg:w-44 xsm:w-36 md:px-2 text-sm xl:py-2 xlg:py-2 xl:px-4 xlg:px-4 lg:py-2 xmd:py-1 md:py-2 sm:py-2 sm:px-2 msm:py-2 msm:px-3 xsm:px-3 xsm:py-2 xxsm:py-2 xxsm:px-3 text-white bg-primary text-center" data-te-ripple-init data-te-ripple-color="light">{{__('Browse Productss')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white 2xl:w-96 xl:w-80 xlg:w-72 xl:h-80 xlg:h-80 lg:h-80 lg:w-64 xmd:w-52 xmd:h-72 md:w-full md:h-0 sm:w-full sm:h-0 msm:w-96 msm:h-20 xsm:w-full xsm:h-20 xxsm:w-full xxsm:h-20">
                <div class="flex flex-col items-end 2xl:mt-14 xl:mt-10 xlg:mt-10  lg:mt-10 xmd:mt-8 md:mt-0 sm:mt-0 msm:mt-0 xsm:mt-0 xxsm:mt-0">
                    <div class="2xl:mx-11 xl:mx-11 xlg:mx-11 lg:mx-11 xmd:mx-11 md:mx-10 sm:mx-10 msm:mx-2 xsm:mx-5 xxsm:mx-5 2xl:mt-40 xl:mt-40 xlg:mt-40 lg:mt-40 xmd:mt-40 md:mt-0 sm:mt-0 msm:mt-0 xsm:mt-0 xxsm:mt-0">
                        <a href="tel:{{ $pharmacy['phone'] }}" class="text-primary"><i class="fa-solid fa-phone border border-primary 2xl:p-2 xl:p-2 xlg:p-2 lg:p-2 xmd:p-1 xxsm:p-2"></i></a>
                        <a href="mailto:{{ $pharmacy['email'] }}" class="text-primary"><i class="fa-solid fa-envelope border border-primary 2xl:p-2 xl:p-2 xlg:p-2 lg:p-2 xmd:p-1 xxsm:p-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- main container --}}
{{--     <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 mb-14"> --}}
        {{-- first div --}}
{{--         <div class="flex 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row md:row sm:flex-col sms:flex-col xsm:flex-col
       xxsm:flex-col"> --}}
            {{-- first part --}}
{{--             <div class="2xl:w-3/4 xxsm:w-full border-r border-white-light">
                <div class="border-b border-white-light  pb-6 pt-6">
                    <h1 class="text-xl font-normal leading-6 font-fira-sans text-black pb-4">{{__('Overview')}}</h1>
                    {!! $pharmacy['description'] !!}
                </div>

            </div> --}}
            {{-- second part --}}
       {{--      <div class="border-b border-white-light">
                <div class="pl-5 2xl:w-96 xl:w-96 xlg:w-96 lg:w-96 xmd:w-96 md:w-96 sm:w-96 xsm:w-80 xxsm:w-40 xxsm:pl-0">
                    <h1 class="text-xl font-normal leading-6 font-fira-sans text-black pt-10">{{__('Business Hours')}} </h1>
                    <div class="flex 2xl:flex-row xl:flex-row xlg:flex-col lg:flex-col xsm:flex-row xxsm:flex-col justify-between pt-6 px-3">
                        <div class="">
                            <h1 class="text-base font-fira-sans leading-5 font-normal text-black"><span class="text-primary">{{__('Today • ')}}</span>{{ $today_date[0] }}</h1>
                            <p class="font-fira-sans leading-4 text-sm font-normal text-gray pt-2">
                                @foreach (json_decode($today_date[1]) as $date)
                                <span class="flex flex-col pt-1">{{ $date->start_time }} - {{ $date->end_time }}</span>
                                @endforeach
                            </p>
                        </div>
                        <div class="xlg:pt-2">
                            <button type="button" class="text-white bg-primary text-center py-2 px-2 text-xs font-normal leading-3 font-fira-sans rounded-full">{{__('Open Now')}}</button>
                        </div>
                    </div>

                    @foreach ($pharmacyWorkingHours as $pharmacyWorkingHour)
                    <div class="flex justify-between {{ $loop->first ? 'pt-6' : 'pt-2' }}">
                        <div class="">
                            <h1 class="font-fira-sans leading-4 text-sm font-normal text-black">{{ $pharmacyWorkingHour->day_index }}</h1>
                        </div>
                        @if ($pharmacyWorkingHour->status)
                        <div>
                            <p class="font-fira-sans leading-4 text-sm font-normal text-gray pt-2">{{__('07:00 AM - 09:00 PM')}}</p>
                        </div>
                        @else
                        <div>
                            <p class="font-fira-sans leading-4 text-sm font-normal text-red pt-2">{{__('Closed')}}</p>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}








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

    <div class="breadcrumb-bar-six">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">اسم الصيدليه</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content pharmacy-cart-content">
        <div class="container">

            <div class="card pharmacy-card">
                <div class="card-body">
                    <div class="doctor-widget pharmacy-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img1">
                                <a href="pharmacy-details.html">
                                    <img src="{{ url($pharmacy['fullImage']) }}" class="img-fluid" alt>
                                </a>
                            </div>
                            <div style="padding-right: 10px" class="doc-info-cont">
                                <h4 class="doc-name"><a href="{{ url('pharmacy-details/'.$pharmacy['id'].'/'.Str::slug($pharmacy['name'])) }}">{{ $pharmacy['name'] }}</a></h4>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(256)</span>
                                </div>
                                <div class="clinic-details">
                                    <div class="clini-infos">
                                        <p class="doc-location">
                                            <i class="feather-map-pin"></i>  {{ $pharmacy['address'] }}
                                        </p>
                                        <p class="doc-location text-ellipse">
                                            <i class="feather-tag"></i>  {{ $pharmacy['phone'] }}
                                        </p>
                                        <p class="doc-location">
                                            <i class="feather-clock"></i>start {{ $pharmacy['start_time'] }} - end {{ $pharmacy['end_time'] }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="doc-info-right d-flex align-items-center justify-content-center">
                            <div class="pharmacy-booking pharmacy-booking-right">
                                <a class="btn browse-products-btn" href="#" data-bs-toggle="modal"
                                   data-bs-target="#voice_call">
                                    <i class="feather-phone-call"></i> اتصل الأن
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pharmacy-details-info">

                <div class="product-description-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link description-link active" href="#about_store" data-bs-toggle="tab">عن الصيدليه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pharmacy_locations" data-bs-toggle="tab">العنوان والفروع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link reviews-link" href="#pharmacy_reviews" data-bs-toggle="tab">التقيمات</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content pt-0">

                    <div role="tabpanel" id="about_store" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="widget about-widget">
                                    <h4 class="widget-title">عن الصيدليه</h4>
                                    <p>    {!! $pharmacy['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" id="pharmacy_locations" class="tab-pane fade">

                        <div class="card pharmacy-card">
                            <div class="card-body">
                                <div class="doctor-widget pharmacy-widget">
                                    <div class="doc-info-left">
                                        <div class="doctor-img1">
                                            <a href="pharmacy-details.html">
                                                <img src="assets/img/pharmacy/pharmacy-02.jpg" class="img-fluid" alt>
                                            </a>
                                            <div class="pharmacy-pro-tags">
                                                <span class="pharmacy-closed">Closed</span>
                                            </div>
                                        </div>
                                        <div style="padding-right: 10px" class="doc-info-cont">
                                            <h4 class="doc-name"><a href="pharmacy-details.html">اسم الفرع</a></h4>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(150)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <div class="clini-infos">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i> عنوان الفرع
                                                    </p>
                                                    <p class="doc-location text-ellipse">
                                                        <i class="feather-tag"></i> تصنيف الفرع
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-clock"></i> 24Hrs (Mon - Sun)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="pharmacy-booking">
                                                <a class="btn view-details-btn" href="javascript:void(0);">العنوان علي الخريطه</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card pharmacy-card">
                            <div class="card-body">
                                <div class="doctor-widget pharmacy-widget">
                                    <div class="doc-info-left">
                                        <div class="doctor-img1">
                                            <a href="pharmacy-details.html">
                                                <img src="assets/img/pharmacy/pharmacy-02.jpg" class="img-fluid" alt>
                                            </a>
                                            <div class="pharmacy-pro-tags">
                                                <span class="pharmacy-closed">Closed</span>
                                            </div>
                                        </div>
                                        <div style="padding-right: 10px" class="doc-info-cont">
                                            <h4 class="doc-name"><a href="pharmacy-details.html">اسم الفرع</a></h4>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(150)</span>
                                            </div>
                                            <div class="clinic-details">
                                                <div class="clini-infos">
                                                    <p class="doc-location">
                                                        <i class="feather-map-pin"></i> عنوان الفرع
                                                    </p>
                                                    <p class="doc-location text-ellipse">
                                                        <i class="feather-tag"></i> تصنيف الفرع
                                                    </p>
                                                    <p class="doc-location">
                                                        <i class="feather-clock"></i> 24Hrs (Mon - Sun)
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="pharmacy-booking">
                                                <a class="btn view-details-btn" href="javascript:void(0);">العنوان علي الخريطه</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div role="tabpanel" id="pharmacy_reviews" class="tab-pane fade">

                        <div class="widget review-listing mt-0">
                            <div class="pharmacy-review-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="review-based">
                                            <h2>4.5 <span>/5</span></h2>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p>Based on 125 Reviews</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="review-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <div class="review-progress">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 90%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-progress-percent">
                                                <p>90%</p>
                                            </div>
                                        </div>
                                        <div class="review-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="review-progress">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                                         aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 96%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-progress-percent">
                                                <p>96%</p>
                                            </div>
                                        </div>
                                        <div class="review-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="review-progress">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 75%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-progress-percent">
                                                <p>75%</p>
                                            </div>
                                        </div>
                                        <div class="review-ratings">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="review-progress">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                                         aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 51%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-progress-percent">
                                                <p>51%</p>
                                            </div>
                                        </div>
                                        <div class="review-ratings mb-0">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="review-progress">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                                         aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                                         style="width: 35%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review-progress-percent">
                                                <p>35%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pharmacy-comments-list">

                                <div class="comment">
                                    <div class="pharmacy-comments-inner">
                                        <div class="pharmacy-comments-profile">
                                            <div class="pharmacy-comments-img">
                                                <img src="assets/img/pharmacy/pharmacy-user1.jpg" alt>
                                            </div>
                                            <div style="padding-right: 10px" class="pharmacy-comments-profile-text">
                                                <h4>احمد كارم</h4>
                                                <p>مصر, الاسكندريه</p>
                                            </div>
                                        </div>
                                        <div class="pharmacy-comments-reviewed">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>منذ 25 يوم</p>
                                        </div>
                                    </div>
                                    <div class="pharmacy-comment-content">
                                        <p>
                                            “ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam,
                                            quriesstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in volueryptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. “
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="feedback-btn">
                                <a href="javascript:void(0);" class="btn">
                                    Show More Feedback (25)
                                </a>
                            </div>

                        </div>


                        <div class="pharmacy-write-review">
                            <div class="pharmacy-write-header">
                                <h4>Add a Review</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>

                            <form class="write-review-form">
                                <div class="form-group">
                                    <label class="write-review-rating">Your Rating</label>
                                    <div class="star-rating">
                                        <input id="star-1" type="radio" name="rating" value="star-1">
                                        <label for="star-1" title="1 star">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-2" type="radio" name="rating" value="star-2">
                                        <label for="star-2" title="2 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-3" type="radio" name="rating" value="star-3">
                                        <label for="star-3" title="3 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-4" type="radio" name="rating" value="star-4">
                                        <label for="star-4" title="4 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                        <input id="star-5" type="radio" name="rating" value="star-5">
                                        <label for="star-5" title="5 stars">
                                            <i class="active fa fa-star"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Review <span class="text-danger">*</span></label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox" name="terms">
                                                    <span class="checkmark"></span> Save my name, email, and website in
                                                    this browser for the next time I comment.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group submit-btn-info">
                                            <button type="submit" class="btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('layout.footer_site')
