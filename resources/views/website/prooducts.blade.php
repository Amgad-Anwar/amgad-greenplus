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
                    <h2 class="breadcrumb-title">المنتجات</h2>
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
                            <h4>Shop by Category</h4>
                        </div>
                        <div class="filter-widget">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);">Medicine <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Mask <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Blood Pressure <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Hand Gloves <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Nutritions <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Safety Guard <span><i class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Pills <span><i class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Testing kit <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Pharmacies <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);javascript:void(0);">Vitamins <span><i
                                            class="fas fa-angle-right"></i></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Surgical Mask <span><i class="fas fa-angle-right"></i></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-xl-9">

                    <div class="filter-info">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-12 d-md-block custom-short-by">
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

                    <div class="pro-grid">
                        <div class="row">
                            @if (isset($products['data']))
                            @php
                            $data = $products['data'];
                            @endphp
                            @else
                            @php
                            $data = $products;
                            @endphp
                            @endif
                           @foreach ($data as $value )

                           <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="prod-widget">
                                <div class="deal-pro-img">
                                    <div class="deal-pro-tags">
                                        <span class="offer"></span>
                                        <a href="javascript:void(0);" class="favourite-icon favourite-icon-filled">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <img src="{{ asset('uploads' . '/'.$value->image) }}" alt class="img-fluid">
                                    </a>
                                </div>
                                <div class="deal-pro-detail">
                                    <h6>{{ $value->name }}</h6>
                                    <h4><a href="#">{{ $value->name }}</a></h4>
                                    <ul class="brand-pro">

                                        <li>
                                            <ul class="ratings">
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li><span>(40)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h2>{{ $value->price_pr_strip }}</h2>
                                 <a href="cart.html" class="btn book-btn"><img
                                            src="assets/img/icons/cart-icon.svg" alt
                                            class="w-auto d-inline-block me-1"> Add to Cart</a>

                                           
                            </div>
                        </div>
                           @endforeach


                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="product-pagination">
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
