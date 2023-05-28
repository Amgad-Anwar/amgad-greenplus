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

    <div style="direction: ltr" class="header-top home-three-top">
        <div class="left-top aos" data-aos="fade-up">
            <ul>
                <li><i class="feather-phone me-1"></i> +2 01207807796</li>
                <li><i class="feather-mail me-1"></i> <a
                        href="mailto:info@greenpluss.com">info@greenpluss.com</a></li>
            </ul>
        </div>
        <div class="right-top aos" data-aos="fade-up">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>

    @include('layout.nav_site')



    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">الملف الشخصي للطبيب احمد كارم</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="doctor-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img">
                                <img src="{{ asset('assets2/img/doctors/doctor-thumb-02.jpg') }}" class="img-fluid" alt="User Image">
                            </div>
                            <div class="doc-info-cont mar">
                                <h4 class="doc-name">د . {{ $doctor->name }}  </h4>
                                <p class="doc-speciality">  {{ $doctor->expertise->name }}</p>
                                <p class="doc-department"><img src="{{ asset('assets2/img/specialities/specialities-05.png') }}"
                                                               class="img-fluid" alt="Speciality">التصنيف</p>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(35)</span>
                                </div>
                                <div class="clinic-details">
                                    <p class="doc-location"><i class="fas fa-map-marker-alt"></i> مصر, الاسكندريه - <a
                                            href="javascript:void(0);">مشاهده علي الخريطه</a></p>
                                    <ul class="clinic-gallery">
                                        <li>
                                            <a href="{{ asset('assets2/img/features/feature-01.jpg') }}" data-fancybox="gallery">
                                                <img src="{{ asset('assets2/img/features/feature-01.jpg') }}" alt="Feature">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('assets2/img/features/feature-02.jpg') }}" data-fancybox="gallery">
                                                <img src="{{ asset('assets2/img/features/feature-02.jpg') }}" alt="Feature Image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('assets2/img/features/feature-03.jpg') }}" data-fancybox="gallery">
                                                <img src="{{ asset('assets2/img/features/feature-03.jpg') }}" alt="Feature">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('assets2/img/features/feature-04.jpg') }}" data-fancybox="gallery">
                                                <img src="{{ asset('assets2/img/features/feature-04.jpg') }}" alt="Feature">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clinic-services">
                                    <span>التصنيف الاول</span>
                                    <span class="mar">التصنيف الثاني</span>
                                </div>
                            </div>
                        </div>
                        <div class="doc-info-right">
                            <div class="clini-infos">
                                <ul>
                                    <li><i class="far fa-thumbs-up"></i> 99%</li>
                                    <li><i class="far fa-comment"></i> 35 رأي</li>
                                    <li><i class="fas fa-map-marker-alt"></i> مصر ,الاسكندريه</li>
                                    <li><i class="far fa-money-bill-alt"></i> {{ $doctor->appointment_fees }} جنيه للكشف</li>
                                </ul>
                            </div>
                            <div class="doctor-action">
                                <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="clinic-booking">
                                <a class="apt-btn" href="{{ url('booking/'.$doctor->id.'/'.Str::slug($doctor->name)) }}">حجز موعد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body pt-0">

                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">معملومات عن الطبيب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_locations" data-bs-toggle="tab">مكان الطبيب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">الأراء عن الطبيب</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#doc_business_hours" data-bs-toggle="tab">ساعات العمل</a>
                            </li>
                        </ul>
                    </nav>


                    <div class="tab-content pt-0">

                        <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-md-12 col-lg-9">

                                    <div class="widget about-widget">
                                        <h4 class="widget-title">معلومات عن د.احمد كارم</h4>
                                        <p>{{ $doctor->desc }}</p>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" id="doc_locations" class="tab-pane fade">

                            <div class="location-list">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="clinic-content">
                                            <h4 class="clinic-name"><a href="#">اسم العياده الاولي</a></h4>
                                            <p class="doc-speciality">تخصص العياده الاولي</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(4)</span>
                                            </div>
                                            <div class="clinic-details mb-0">
                                                <h5 class="clinic-direction"><i class="fas fa-map-marker-alt"></i> عموان العياده الاولي <br><a
                                                            href="javascript:void(0);">المكان علي الخريطه</a></h5>
                                                <ul>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-01.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-01.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-02.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-02.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-03.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-03.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-04.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-04.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="clinic-timing">
                                            <div>
                                                <p class="timings-days">
                                                    <span> الاثنين - الخميس </span>
                                                </p>
                                                <p class="timings-times">
                                                    <span>10:00 AM - 2:00 PM</span>
                                                    <span>4:00 PM - 9:00 PM</span>
                                                </p>
                                            </div>
                                            <div>
                                                <p class="timings-days">
                                                    <span>السبت</span>
                                                </p>
                                                <p class="timings-times">
                                                    <span>10:00 AM - 2:00 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="consult-price">
                                            جنيه 250
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="location-list">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="clinic-content">
                                            <h4 class="clinic-name"><a href="#">اسم العياده الثانيه</a></h4>
                                            <p class="doc-speciality">تخصص العياده الثانيه</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">(4)</span>
                                            </div>
                                            <div class="clinic-details mb-0">
                                                <p class="clinic-direction"><i class="fas fa-map-marker-alt"></i> عنوان العياده الثانيه <br><a
                                                            href="javascript:void(0);">المكان علي الخريطه</a></p>
                                                <ul>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-01.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-01.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-02.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-02.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-03.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-03.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ asset('assets2/img/features/feature-04.jpg') }}"
                                                           data-fancybox="gallery2">
                                                            <img src="{{ asset('assets2/img/features/feature-04.jpg') }}"
                                                                 alt="Feature Image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="clinic-timing">
                                            <div>
                                                <p class="timings-days">
                                                    <span> الثلاثاء - الجمعه </span>
                                                </p>
                                                <p class="timings-times">
                                                    <span>11:00 AM - 1:00 PM</span>
                                                    <span>6:00 PM - 11:00 PM</span>
                                                </p>
                                            </div>
                                            <div>
                                                <p class="timings-days">
                                                    <span>السبت - الاثنين</span>
                                                </p>
                                                <p class="timings-times">
                                                    <span>8:00 AM - 10:00 AM</span>
                                                    <span>3:00 PM - 7:00 PM</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="consult-price">
                                            جنيه 350
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div role="tabpanel" id="doc_reviews" class="tab-pane fade">

                            <div class="widget review-listing">
                                <ul class="comments-list">

                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                 src="{{ asset('assets2/img/patients/patient.jpg') }}">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">احمد كارم</span>
                                                    <span class="comment-date">تم التعليق منذ يومين</span>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                 src="{{ asset('assets2/img/patients/patient.jpg') }}">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">احمد كارم</span>
                                                    <span class="comment-date">تم التعليق منذ يومين</span>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="comment">
                                            <img class="avatar avatar-sm rounded-circle" alt="User Image"
                                                 src="{{ asset('assets2/img/patients/patient.jpg') }}">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">احمد كارم</span>
                                                    <span class="comment-date">تم التعليق منذ يومين</span>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                                <div class="all-feedback text-center">
                                    <a href="#" class="btn btn-primary btn-sm">
                                        كل التعليقات <strong>(167)</strong>
                                    </a>
                                </div>

                            </div>


                            <div class="write-review">
                                <h4>اكتب تعليق عن <strong>د.احمد كارم</strong></h4>

                                <form>
                                    <div class="form-group">
                                        <label>عنوان التعليق</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>التعليق</label>
                                        <textarea id="review_desc" maxlength="100" class="form-control"></textarea>
                                        <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span
                                                id="chars">100</span> characters remaining</small></div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="terms-accept">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" id="terms_accept">
                                                <label for="terms_accept">انا اوافق علي جميع <a href="#">الشروظ والاحكام</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">اضافه التعليق</button>
                                    </div>
                                </form>

                            </div>

                        </div>


                        <div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">

                                    <div class="widget business-widget">
                                        <div class="widget-content">
                                            <div class="listing-hours">
                                                <div class="listing-day current">
                                                    <div class="day">اليوم <span>5 Nov 2023</span></div>
                                                    <div class="time-items">
                                                        <span class="open-status"><span class="badge bg-success-light">موجود الأن</span></span>
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">الاثنين</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">الثلاثاء</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">الاربعاء</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">الخميس</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">الجمعه</div>
                                                    <div class="time-items">
                                                        <span class="time"><span
                                                                class="badge bg-danger-light">Closed</span></span>

                                                    </div>
                                                </div>
                                                <div class="listing-day">
                                                    <div class="day">السبت</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                                <div class="listing-day closed">
                                                    <div class="day">الاحد</div>
                                                    <div class="time-items">
                                                        <span class="time">07:00 AM - 09:00 PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

