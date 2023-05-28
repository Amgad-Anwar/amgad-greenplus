@extends('layout.mainlayout',['activePage' => 'home'])

@section('content')

<section style="direction: ltr" class="home-banner-three">
    <div class="owl-carousel home-three-slider owl-theme">
        <div class="item">
            <img src="{{ asset('assets2/img/banner-4.jpg') }}" class="img-fluid" alt>
        </div>
        <div class="item">
            <img src="{{ asset('assets2/img/banner-4.jpg') }}" class="img-fluid" alt>
        </div>
        <div class="item">
            <img src="{{ asset('assets2/img/banner-4.jpg') }}" class="img-fluid" alt>

        </div>
    </div>

    <div class="banner-wrapper-three">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-wrapper doc-form banner-wrapper-left">
                        <div class="app-form app-form-one">
                            <form action="#" class="doctor-form">
                                <div class="row text-rtl">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>انا ابحث عن دكتور</label>

                                            <select class="select form-control text-rtl">
                                                <option>اختر التخصص</option>
                                                <option>اسم التخصص</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>في محافظه</label>
                                            <select class="select form-control text-rtl">
                                                <option>اسم المحافظه</option>
                                                <option>محافظه الاسكندريه</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>في منطقه</label>
                                            <select class="select form-control">
                                                <option>اسم المنطقه</option>
                                                <option>منطقه سموحه</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label> او اكتب اسم الدكتور</label>
                                            <input class="form-control text-rtl" type="text" placeholder="اكتب اسم الدكتور">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <a href="#" class="btn btn-one w-100">ابحث الان</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner-wrapper doc-form d-lg-block d-md-none banner-wrapper-right">
                        <div class="app-form">
                            <div class="banner-three-content text-rtl">
                                <h2>بنقدملك كل اللي تحتاجه</h2>
                                <h2><span>في مكان واحد بس</span></h2>
                                <p>ابحث ، قارن واحجز استشارات طبية بسهولة مع اكبر شبكة دكاترة فى مصر اطلب أدويتك وهتوصلك خلال 60 دقيقة تتبع خطواتك اليومية واكسب النقاط عند تحقيق الهدف اليومي.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-doctor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4" style="align-items: center;display: flex;">
                <div class="about-content aos" data-aos="fade-up">
                    <h2>أحجز مع الطبيب الذي تحتاجه</h2>
                    <p>أعلي الأطباء تقييما في جرين بلس </p>
                    <a href="javascript:;">كل الأطباء</a>
                </div>
            </div>
            <div style="direction: ltr" class="col-lg-8 aos" data-aos="fade-up">
                <div class="doctor-slider slider">
@foreach ($doctors as $doctor )

                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="{{ asset("$doctor->fullImage") }}" >
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">{{ $doctor->name }}</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(17)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>   {{$doctor['expertise']['name'] }}
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>{{ $doctor->start_time }} to {{ $doctor->end_time }}
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> {{ $doctor->appointment_fees }} $
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href='{{ url('doctor-profile/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}' class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('booking/'.$doctor['id'].'/'.Str::slug($doctor['name'])) }}" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

@endforeach

{{--

                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Darren Elder</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(35)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $50 - $300
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Deborah Angel</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(27)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Georgia, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $400
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Sofia Brient</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Louisiana, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $150 - $250
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Marvin Campbell</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(66)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Michigan, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $50 - $700
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Katharine Berthold</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(52)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Texas, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $500
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Linda Tobin</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(43)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Kansas, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $1000
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Paul Richard</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(49)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> California, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $400
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>

<section style="direction: ltr" class="section section-deals">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
                <div class="section-header sec-head text-center">
                    <h2>افضل المنتجات الطبيه</h2>
                    <div class="owl-nav slide-nav-9 nav-control"></div>
                </div>
                <div class="deals-sliders owl-carousel owl-theme">
                    <div class="deals-box aos" data-aos="fade-up">
                        <div class="row dir">
                            <div class="col-sm-5">
                                <div class="deal-pro-img">
                                    <div class="deal-pro-tags">
                                        <span class="offer">-25% خصم</span>
                                        <a href="javascript:void(0);" class="favourite-icon favourite-icon-bg">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="#"><img src="assets/img/products/product-01.jpg" alt
                                                                        class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="deal-pro-detail">
                                    <h6>تصنيف المنتج</h6>
                                    <h4><a href="#">اسم المنتج</a></h4>
                                    <ul style="direction: ltr" class="brand-pro">
                                        <li>المنتج من <span>جرين بلس</span></li>
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
                                                <li><span>(256)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h2>جنيه 120 <span>جنيه 125.50</span></h2>
                                    <a href="#" class="btn book-btn"><img
                                            src="assets/img/icons/cart-icon.svg" alt class="w-auto d-inline-block">
                                         اضف الي السله</a>
                                    <ul class="day-deal">
                                        <li>
                                            <div class="time-box">
                                                <h6>25</h6>
                                                <p>يوم</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>05</h6>
                                                <p>ساعات</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>30</h6>
                                                <p>دقيقه</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>50</h6>
                                                <p>ثانيه</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deals-box aos" data-aos="fade-up">
                        <div class="row dir">
                            <div class="col-sm-5">
                                <div class="deal-pro-img">
                                    <div class="deal-pro-tags">
                                        <span class="offer">-25% خصم</span>
                                        <a href="javascript:void(0);" class="favourite-icon favourite-icon-bg">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="#"><img src="assets/img/products/product-01.jpg" alt
                                                         class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="deal-pro-detail">
                                    <h6>تصنيف المنتج</h6>
                                    <h4><a href="#">اسم المنتج</a></h4>
                                    <ul style="direction: ltr" class="brand-pro">
                                        <li>المنتج من <span>جرين بلس</span></li>
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
                                                <li><span>(256)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h2>جنيه 120 <span>جنيه 125.50</span></h2>
                                    <a href="#" class="btn book-btn"><img
                                            src="assets/img/icons/cart-icon.svg" alt class="w-auto d-inline-block">
                                        اضف الي السله</a>
                                    <ul class="day-deal">
                                        <li>
                                            <div class="time-box">
                                                <h6>25</h6>
                                                <p>يوم</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>05</h6>
                                                <p>ساعات</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>30</h6>
                                                <p>دقيقه</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>50</h6>
                                                <p>ثانيه</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deals-box aos" data-aos="fade-up">
                        <div class="row dir">
                            <div class="col-sm-5">
                                <div class="deal-pro-img">
                                    <div class="deal-pro-tags">
                                        <span class="offer">-25% خصم</span>
                                        <a href="javascript:void(0);" class="favourite-icon favourite-icon-bg">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="#"><img src="assets/img/products/product-01.jpg" alt
                                                         class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="deal-pro-detail">
                                    <h6>تصنيف المنتج</h6>
                                    <h4><a href="#">اسم المنتج</a></h4>
                                    <ul style="direction: ltr" class="brand-pro">
                                        <li>المنتج من <span>جرين بلس</span></li>
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
                                                <li><span>(256)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h2>جنيه 120 <span>جنيه 125.50</span></h2>
                                    <a href="#" class="btn book-btn"><img
                                            src="assets/img/icons/cart-icon.svg" alt class="w-auto d-inline-block">
                                        اضف الي السله</a>
                                    <ul class="day-deal">
                                        <li>
                                            <div class="time-box">
                                                <h6>25</h6>
                                                <p>يوم</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>05</h6>
                                                <p>ساعات</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>30</h6>
                                                <p>دقيقه</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>50</h6>
                                                <p>ثانيه</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deals-box aos" data-aos="fade-up">
                        <div class="row dir">
                            <div class="col-sm-5">
                                <div class="deal-pro-img">
                                    <div class="deal-pro-tags">
                                        <span class="offer">-25% خصم</span>
                                        <a href="javascript:void(0);" class="favourite-icon favourite-icon-bg">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="deal-product-img">
                                        <a href="#"><img src="assets/img/products/product-01.jpg" alt
                                                         class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="deal-pro-detail">
                                    <h6>تصنيف المنتج</h6>
                                    <h4><a href="#">اسم المنتج</a></h4>
                                    <ul style="direction: ltr" class="brand-pro">
                                        <li>المنتج من <span>جرين بلس</span></li>
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
                                                <li><span>(256)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <h2>جنيه 120 <span>جنيه 125.50</span></h2>
                                    <a href="#" class="btn book-btn"><img
                                            src="assets/img/icons/cart-icon.svg" alt class="w-auto d-inline-block">
                                        اضف الي السله</a>
                                    <ul class="day-deal">
                                        <li>
                                            <div class="time-box">
                                                <h6>25</h6>
                                                <p>يوم</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>05</h6>
                                                <p>ساعات</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>30</h6>
                                                <p>دقيقه</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="time-box">
                                                <h6>50</h6>
                                                <p>ثانيه</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-content aos" data-aos="fade-up">
                    <a href="javascript:;">كل المنتجات</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section home-tile-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="section-header text-center aos" data-aos="fade-up">
                    <h2>حلول جديدة لرعاية أفضل ليك
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="card text-center doctor-book-card aos" data-aos="fade-up">
                            <img src="assets/img/doctors/doctor-07.jpg" alt class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">لديك سؤال طبي؟</h3>
                                    <p>ارسل سؤالك الطبى واحصل على اجابة <br>من دكتور متخصص
                                    </p>
                                    <a href="#" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">أسال الأن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card text-center doctor-book-card aos" data-aos="fade-up">
                            <img src="assets/img/img-pharmacy1.jpg" alt class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">صيدلية</h3>
                                    <p>اطلب ادويتك و كل اللي تحتاجه من الصيدلية.</p>
                                    <a href="#" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0"> اطلب الأن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card text-center doctor-book-card aos" data-aos="fade-up">
                            <img src="assets/img/lab-image.jpg" alt class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">زيارة منزلية</h3>
                                    <p>اختار التخصص، والدكتور هيجيلك البيت.</p>
                                    <a href="#" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0"> احجز زيارة </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="specialities-section">
    <div class="shapes">
        <img src="assets/img/shapes/shape-3.png" alt class="img-fluid shape-3">
        <img src="assets/img/shapes/shape-4.png" alt class="img-fluid shape-4">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading bg-area aos" data-aos="fade-up">
                    <h2>ابحث عن التخصص الذي تحتاجه</h2>
                    <p>Find experienced doctors across all specialties</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/1.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Urology</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/3.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Neurology</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/2.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Orthopedic</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/4.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Cardiologist</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/1.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Urology</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/3.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Neurology</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/2.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Orthopedic</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="specialist-card d-flex">
                    <div class="specialist-img">
                        <img src="assets/img/category/4.png" alt class="img-fluid">
                    </div>
                    <div class="specialist-info">
                        <a href="#"><h4>Cardiologist</h4></a>
                        <p>21 Doctors</p>
                    </div>
                    <div class="specialist-nav ms-auto">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-section">
    <div class="container aos" data-aos="fade-up">
        <div class="section-header text-center aos" data-aos="fade-up">
            <h2 style="font-family: 'Cairo', sans-serif !important;" class="color-primary">الخدمات التي نقدمها</h2>
            <p class="sub-title color-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="service-grid">
                    <div class="effect-oscar">
                        <img src="assets/img/services/services-01.jpg" class="img-fluid services-img" alt>
                        <div class="services-caption">
                            <div class="services-inner">
                                <div class="service-grid-icon">
                                    <img src="assets/img/icons/icon6.svg" class="img-fluid" alt>
                                </div>
                                <p>Orthopedic</p>
                                <a href="doctor-profile.html" class="service-link">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="service-grid">
                    <div class="effect-oscar">
                        <img src="assets/img/services/services-02.jpg" class="img-fluid services-img" alt>
                        <div class="services-caption">
                            <div class="services-inner">
                                <div class="service-grid-icon">
                                    <img src="assets/img/icons/icon3.svg" class="img-fluid" alt>
                                </div>
                                <p>Cardiologist</p>
                                <a href="doctor-profile.html" class="service-link">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="service-grid">
                    <div class="effect-oscar">
                        <img src="assets/img/services/services-03.jpg" class="img-fluid services-img" alt>
                        <div class="services-caption">
                            <div class="services-inner">
                                <div class="service-grid-icon">
                                    <img src="assets/img/icons/icon4.svg" class="img-fluid" alt>
                                </div>
                                <p>Dentist</p>
                                <a href="doctor-profile.html" class="service-link">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 aos" data-aos="fade-up">
                <div class="service-grid">
                    <div class="effect-oscar">
                        <img src="assets/img/services/services-04.jpg" class="img-fluid services-img" alt>
                        <div class="services-caption">
                            <div class="services-inner">
                                <div class="service-grid-icon">
                                    <img src="assets/img/icons/icon2.svg" class="img-fluid" alt>
                                </div>
                                <p>Neurology</p>
                                <a href="doctor-profile.html" class="service-link">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-letter-bg">
    <div class="container">
        <div class="news-bg">
            <div class="row">
                <div class="col-lg-8 col-md-12 news-left aos" data-aos="fade-up">
                    <div>
                        <h2 style="font-family: 'Cairo', sans-serif !important;">قم بتنزيل التطبيق الأن</h2>
                        <p style="font-family: 'Cairo', sans-serif !important;">Tابحث ، قارن واحجز استشارات طبية بسهولة مع اكبر شبكة دكاترة فى مصر اطلب أدويتك وهتوصلك خلال 60 دقيقة تتبع خطواتك اليومية واكسب النقاط عند تحقيق الهدف اليومي.</P>
                    </div>
                    <div>
                        <button class="btn">Google Play</button>
                        <button class="btn">App Store</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 aos" data-aos="fade-up">
                    <div class="news-img">
                        <img src="assets/img/Mobile.png" class="img-fluid" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
