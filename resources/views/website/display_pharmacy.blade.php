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
                    <h2 class="breadcrumb-title">الصيدليات</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content pharmacy-cart-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-3 theiaStickySidebar">

                    <div class="filter-new">
                        <div class="filter-header">
                            <h4>التصنيفات </h4>
                        </div>
                        <div style="direction: ltr" class="filter-widget filter-checkbox">
                            <div>
                                <label class="custom_check">
                                    <input type="checkbox" name="gender_type">
                                    <span class="checkmark"></span> الادويه
                                </label>
                            </div>
                            <div>
                                <label class="custom_check">
                                    <input type="checkbox" name="gender_type">
                                    <span class="checkmark"></span> Treatment
                                </label>
                            </div>
                            <div>
                                <label class="custom_check">
                                    <input type="checkbox" name="gender_type" checked>
                                    <span class="checkmark"></span> Organic
                                </label>
                            </div>
                            <div>
                                <label class="custom_check">
                                    <input type="checkbox" name="gender_type">
                                    <span class="checkmark"></span> Open 24 hours
                                </label>
                            </div>
                            <div>
                                <label class="custom_check">
                                    <input type="checkbox" name="gender_type" checked>
                                    <span class="checkmark"></span> Home Delivery
                                </label>
                            </div>
                            <div>
                                <label class="custom_check mb-0">
                                    <input type="checkbox" name="gender_type" checked>
                                    <span class="checkmark"></span> Hospital Equipment
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="filter-new">
                        <div class="filter-header">
                            <h4>المكان</h4>
                        </div>
                        <div class="filter-widget">
                            <div class="filter-location">
                                <select class="select">
                                    <option>الاسكندريه</option>
                                    <option>القاهره</option>
                                    <option>البحيره</option>
                                    <option>الجيزه</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="filter-new">
                        <div class="filter-header">
                            <h4>التقييمات</h4>
                        </div>
                        <div class="filter-widget filter-checkbox">
                            <label class="custom_check w-100">
                                <input type="checkbox" name="reviews">
                                <span class="checkmark"></span>
                                <span class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    </span>
                            </label>
                            <label class="custom_check w-100">
                                <input type="checkbox" name="reviews" checked>
                                <span class="checkmark"></span>
                                <span class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    </span>
                            </label>
                            <label class="custom_check w-100">
                                <input type="checkbox" name="reviews">
                                <span class="checkmark"></span>
                                <span class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                </span>
                            </label>
                            <label class="custom_check w-100">
                                <input type="checkbox" name="reviews">
                                <span class="checkmark"></span>
                                <span class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </span>
                            </label>
                            <label class="custom_check w-100 mb-0">
                                <input type="checkbox" name="reviews">
                                <span class="checkmark"></span>
                                <span class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                </span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-xl-9">

                    <div class="filter-info">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 d-md-block custom-short-by">
                                <div class="pharm-viewicon">
                                    <p><span>10</span> matches found for Pharmacy in Los Angeles</p>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 d-md-block custom-short-by">
                                <div class="sort-by sort-byone">
                                <span class="sortby-fliter">
                                <select class="select">
                                <option>Default Sorting</option>
                                <option class="sorting">Rating</option>
                                <option class="sorting">Popular</option>
                                <option class="sorting">Latest</option>
                                <option class="sorting">Free</option>
                                </select>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>




    @foreach ($pharmacies as $pharmacy)


                    <div class="card pharmacy-card">
                        <div class="card-body">
                            <div class="doctor-widget pharmacy-widget">
                                <div class="doc-info-left">
                                    <div class="doctor-img1">
                                        <a href="pharmacy-details.html">
                                            <img src="{{ url($pharmacy['fullImage']) }}" class="img-fluid" alt>
                                        </a>
                                        <div class="pharmacy-pro-tags">
                                            <span class="pharmacy-closed">Closed</span>
                                        </div>
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
                                                    <i class="feather-clock"></i> {{ $pharmacy['email'] }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="pharmacy-booking">
                                            <a class="btn view-details-btn" href="{{ url('pharmacy-details/'.$pharmacy['id'].'/'.Str::slug($pharmacy['name'])) }}">المزيد من التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    @endforeach


                    <div class="col-md-12 text-center">
                        <div class="product-pagination pharmacy-search-pagination">
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0);" tabindex="-1"><i
                                                class="fas fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0);">2 <span class="visually-hidden">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0);"><i
                                                class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


 @include('layout.footer_site')
