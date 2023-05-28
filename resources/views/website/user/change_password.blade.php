




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

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    @if ($errors->any())
                                    @foreach ($errors->all() as $error )

                                    <div class="aler alert-danger">
                                        <h2>{{ $error }}</h2>
                                    </div>
                                    @endforeach

                                    @endif

                                    <form action="{{ url('update_change_password') }}" method="post" class="h-100">
                                        @csrf
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input name="old_password" type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input name="new_password" type="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input  name="confirm_new_password" type="password" class="form-control">
                                        </div>
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Save Changes
                                            </button>
                                        </div>

                                        {{--

                                            --}}
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('layout.footer_site')












{{-- @extends('layout.mainlayout',['activePage' => 'user'])

@section('css')
<style>
    .sidebar li.active {
        background: linear-gradient(45deg, #00000000 50%, #f4f2ff);
        border-left: 2px solid var(--site_color);
    }

    [multiple]:focus,
    [type=date]:focus,
    [type=datetime-local]:focus,
    [type=email]:focus,
    [type=month]:focus,
    [type=number]:focus,
    [type=password]:focus,
    [type=search]:focus,
    [type=tel]:focus,
    [type=text]:focus,
    [type=time]:focus,
    [type=url]:focus,
    [type=week]:focus,
    select:focus,
    textarea:focus {
        --tw-ring-color: #fff !important;
        border-top-color: #e5e7eb !important;
        border-left-color: #e5e7eb !important;
        border-bottom-color: #e5e7eb !important;
    }
</style>
@endsection

@section('content')
<div class="xl:w-3/4 mx-auto pt-10">
    <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 pt-10">
        <div class="flex mb-20 xxsm:flex-col sm:flex-col md:flex-col xmd:flex-row xmd:space-x-5 xxsm:space-x-0">
            <div class="2xl:w-1/5 1xl:w-1/5 xl:w-1/4 xlg:w-80 lg:w-72 xxmd:w-72 xmd:w-72 md:w-72 h-auto">
                @include('website.user.userSidebar',['active' => 'changePassword'])
            </div>
            <div class="w-full sm:ml-0 xxsm:ml-0 flex justify-center items-center shadow-lg p-5 mt-10 xmd:mt-0">
                <form action="{{ url('update_change_password') }}" method="post" class="h-100">
                    @csrf
                    <div class="p-2">
                        <p class="font-fira-sans font-medium text-2xl leading-10 pb-5">{{__('Change Password')}}</p>
                        <div class="w-fit justify-center">
                            <div class="">
                                <div class="mb-3 xl:w-96">
                                    <label for="current_password font-fira-sans font-medium text-base text-gray leading-5">{{__('Current
                                    Password')}}</label>
                                    <div class="flex w-full mb-4">
                                        <input type="password" name="old_password" class="border-l border-r-[0px] border-t border-b border-white-100 password relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out m-0 focus:outline-none" placeholder="Old password" aria-label="Search" aria-describedby="button-addon3">
                                        <button class="eye px-6 py-2 border-l-[0px] border-r border-t border-b border-white-100 font-medium text-xs leading-tight uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="button" id="button-addon3">
                                            <i class="fa fa-eye text-[#666666]" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-3 xl:w-96">
                                    <label for="new_password font-fira-sans font-medium text-base text-gray leading-5">{{__('New
                                    Password')}}</label>
                                    <div class="flex w-full mb-4">
                                        <input type="password" name="new_password" class="border-l border-r-[0px] border-t border-b border-white-100 password relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out m-0 focus:outline-none" placeholder="New password" aria-label="Search" aria-describedby="button-addon3">
                                        <button class="eye px-6 py-2  border-l-[0px] border-r border-t border-b border-white-100 font-medium text-xs leading-tight uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="button" id="button-addon3">
                                            <i class="fa fa-eye text-[#666666]" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-3 xl:w-96">
                                    <label for="confirm_password font-fira-sans font-medium text-base text-gray leading-5">{{__('Confirm
                                    Password')}}</label>
                                    <div class="flex w-full mb-4">
                                        <input type="password" name="confirm_new_password" class="border-l border-r-[0px] border-t border-b border-white-100 password relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out m-0 focus:outline-none" placeholder="Confirm Password" aria-label="Search" aria-describedby="button-addon3">
                                        <button class="eye px-6 py-2  border-l-[0px] border-r border-t border-b border-white-100 font-medium text-xs leading-tight uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="button" id="button-addon3">
                                            <i class="fa fa-eye text-[#666666]" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-3 xl:w-96">
                                    <div class="flex w-full mb-4 justify-center">
                                        <button class="px-6 py-2 border border-primary text-white rounded-md bg-primary font-medium text-xs leading-tight uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="submit" id="button-addon3">
                                            {{__("Update")}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(".eye").on('click', function() {
        $(this).find('i').toggleClass("fa-eye fa-eye-slash");
        if ($(this).parent('div').find('input').attr('type') == "password") {
            $(this).parent('div').find('input').attr('type', "text");
        } else {
            $(this).parent('div').find('input').attr('type', "password");
        }
    });
</script>
@endsection --}}
