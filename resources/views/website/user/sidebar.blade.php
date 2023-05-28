<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="{{ url(Auth::user()['fullImage']) }} " alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3> {{ Auth::user()->name }} </h3>
                <div class="patient-details">
                    <h5><i class="fas fa-birthday-cake"></i>{{ Auth::user()->dob }}</h5>
                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Alexandria, Egypt</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{ url('user_profile') }}">
                        <i class="fas fa-columns"></i>
                        <span>لوحه التحكم</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('favourit_user') }}">
                        <i class="fas fa-bookmark"></i>
                        <span>المفضله</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/test-report') }}">
                        <i class="fas fa-users"></i>
                        <span>تقارير المعمل</span>
                    </a>
                </li>
                <li>
                    <a href="orders-list.html">
                        <i class="fas fa-list-alt"></i>
                        <span>الطلبات</span>
                    </a>
                </li>
                <li>
                <li>
                    <a href="{{ url('/patient-address') }}">
                        <i class="fas fa-file-medical-alt"></i>
                        <span>العناوين الخاصه</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/profile-setting') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>اعدادت الملف الشخصي</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/change-password') }}">
                        <i class="fas fa-lock"></i>
                        <span>تغيير الرقم السري</span>
                    </a>
                </li>
                <li>
                    <a href="../index.html">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>تسجيل خروج</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
