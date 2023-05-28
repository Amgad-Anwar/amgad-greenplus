<header class="header">
    <div class="nav-bg home-three-nav">
        <nav class="navbar navbar-expand-lg header-nav nav-transparent">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon blue-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                            </span>
                </a>
                <a href="index.html" class="navbar-brand logo">
                    <img style="width: 142px;" src="{{ asset('assets2/img/logo.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img style="width: 142px;" src="{{ asset('assets2/img/logo.png') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                            class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav black-font">
                    <li class="active"><a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('/') }}">الرئيسية</a></li>
                    <li><a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('/show-alldoctors') }}">الأطباء</a></li>
                    <li><a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('/all-pharmacies') }}">الأدوية</a></li>
                    <li><a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('products_show') }}">منتجاتنا</a></li>
                    <li class="has-submenu"><a style="font-family: 'Cairo', sans-serif !important;" href="service.html">خدماتنا المميزه <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a style="font-family: 'Cairo', sans-serif !important;" href="service-details.html">اسم الحدمه</a></li>
                            <li><a style="font-family: 'Cairo', sans-serif !important;" href="#">اسم الحدمه</a></li>
                            <li class="active"><a style="font-family: 'Cairo', sans-serif !important;" href="#">اسم الحدمه</a></li>
                        </ul>
                    </li>
                    <li style="margin-right: 20px;"><a style="font-family: 'Cairo', sans-serif !important;" href="{{ url('contact_site') }}">تواصل معنا</a></li>
                </ul>
                <ul class="nav header-navbar-rht right-menu">
                 @guest

                    <li class="nav-item">
                        <a style="font-family: 'Cairo', sans-serif !important;" class="nav-link login-blue-bg" href="{{ url('patient-login') }}">تسجيل الدخول</a>
                    </li>
                    <li style="margin-right: 10px;" class="nav-item">
                        <a style="font-family: 'Cairo', sans-serif !important;" class="nav-link signup-white-bg" href="{{ url('signup') }}">مستخدم جديد</a>
                    </li>
                    @endguest

                    @auth

  <div class="py-2">
                        <a href="{{ url('user_profile') }}"  class="block px-4 py-2 text-sm ">{{ __('Dashboard') }}</a>
                    </div>

                    <div class="py-2">
                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm ">{{ __('Sign out') }}</a>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth

                </ul>
            </div>
        </nav>
    </div>
</header>
