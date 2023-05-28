




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



    @if ($errors->any())

    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
        <h2>{{ $error }}</h2>
        @endforeach
    </div>

    @endif

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">


                    @include('website.user.sidebar')

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-start">العناوين الخاصه</h4>
                                    <a href="#modal_medical_form" class="btn btn-primary float-end"
                                       data-bs-toggle="modal">اضافه عنوان</a>
                                </div>
                                <div class="card-body">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>العنوان</th>
                                                        <th>التعديل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($addresses as $address)
                                                    <tr>
                                                        <td>{{$loop->iteration }}</td>
                                                        <td> {{$address->address }}</td>
                                                        </td>
                                                        <td>
                                                            <div class="table-action">
{{--  --}}

                                                                 {{--  --}}
                                                                 <a href="#edit_medical_form{{$address->id}}"
                                                                   class="btn btn-sm bg-info-light"
                                                                   data-bs-toggle="modal">
                                                                    <i class="fas fa-edit"></i> تعديل
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-danger-light">
                                                                    <i class="fas fa-trash-alt"></i> مسح
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
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






    @include('layout.footer_site')






{{-- @extends('layout.mainlayout',['activePage' => 'user'])

@section('css')
<link rel="stylesheet" href="{{ url('assets/css/intlTelInput.css') }}" />
<style>
    .sidebar li.active {
        background: linear-gradient(45deg, #00000000 50%, #f4f2ff);
        border-left: 2px solid var(--site_color);
    }

    .iti {
        display: block !important;
    }
</style>
@endsection

@section('content')
<div class="xl:w-3/4 mx-auto">
    <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 pt-10">
        <div class="flex h-full mb-20 xxsm:flex-col sm:flex-col xmd:flex-row xmd:space-x-5">
            <div class="2xl:w-1/5 1xl:w-1/5 xl:w-1/4 xlg:w-80 lg:w-72 xxmd:w-72 !xmd:w-72 md:w-72 h-auto">
                @include('website.user.userSidebar',['active' => 'profileSetting'])
            </div>
            <div class="w-full md:w-full xxmd:w-full xmd:w-80 lg:w-2/3 xlg:w-2/3 1xl:w-full 2xl:w-full sm:ml-0 xxsm:ml-0 shadow-lg overflow-hidden p-5 mt-10 2xl:mt-0 xmd:mt-0">
                <form action="{{ url('update_user_profile') }}" method="post" class="h-100" enctype="multipart/form-data">
                    @csrf
                    <div class="change-avtar">
                        <div class="avatar-upload relative">
                            <div class="avatar-edit absolute">
                                <input type='file' name="image" id="image" class="d-none" accept=".png, .jpg, .jpeg" />
                                <label for="image" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="Select new profile pic"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url({{ 'images/upload/'.auth()->user()->image }});"></div>
                            </div>
                            <div class="mt-2">
                                <p class="text-center patient-image">{{ __('Patient Image') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex xxsm:flex-col sm:flex-row justify-center w-full">
                        <div class="mb-3 sm:w-1/2 xxsm:w-full">
                            <label for="name" class="form-label inline-block mb-2 text-gray">{{ __('Name')
                            }}</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray focus:outline-none" id="name" placeholder="{{ __('Name') }}" />
                        </div>
                        <div class="mb-3 sm:w-1/2 xxsm:w-full sm:ml-2 xxsm:ml-0">
                            <label for="email" class="form-label inline-block mb-2 text-gray">{{ __('Email')
                            }}</label>
                            <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray focus:outline-none" id="email" placeholder="{{ __('Email') }}" />
                        </div>

                    </div>
                    <div class="flex xxsm:flex-col sm:flex-row justify-center w-full">
                        <div class="mb-3 sm:w-1/2 xxsm:w-full">
                            <label for="phoneNumber" class="form-label inline-block mb-2 text-gray">{{ __('Phone
                            number') }}</label>
                            <input type="text" name="phone" value="{{ auth()->user()->phone_code }}&nbsp;{{ auth()->user()->phone }}" class="phone form-control block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray focus:outline-none" id="phoneNumber" placeholder="{{ __('Phone number') }}" />
                            <input type="hidden" name="phone_code" value="+91">
                        </div>
                        <div class="mb-3 sm:w-1/2 xxsm:w-full sm:ml-2 xxsm:ml-0">
                            <label for="language" class="form-label inline-block mb-2 text-gray">{{ __('Language')
                            }}</label>
                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <select name="language" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding bg-no-repeat border
                                    border-solid border-gray-light rounded transition ease-in-out m-0 focus:text-gray focus:outline-none" aria-label="Default select example">
                                        @foreach ($languages as $language)
                                        <option value="{{ $language->name }}" {{ $language->name == auth()->user()->language
                                        ? 'selected' : '' }}>{{ $language->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex xxsm:flex-col sm:flex-row justify-center w-full">
                        <div class="mb-3 sm:w-1/2 xxsm:w-full">
                            <label for="dob" class="form-label inline-block mb-2 text-gray">{{ __('Date of birth')
                            }}</label>
                            <div class="datepicker relative mb-3" data-mdb-toggle-button="true">
                                <input name="dob" type="text" min="{{ Carbon\Carbon::now(env('timezone'))->format('d/m/Y') }}" class="@error('dob') is-invalid @enderror font-fira-sans form-control block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray focus:outline-none active" placeholder="Select a date" data-mdb-toggle="datepicker" value="{{ auth()->user()->dob }}" />
                                @error('dob')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 sm:w-1/2 xxsm:w-full sm:ml-2 xxsm:ml-0">
                            <label for="language" class="form-label inline-block mb-2 text-gray">{{ __('Gender')
                            }}</label>
                            <div class="flex justify-center">
                                <div class="mb-3 w-full">
                                    <select name="gender" class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray  bg-clip-padding bg-no-repeat
                                     border border-solid border-gray-light rounded transition ease-in-out m-0 focus:text-gray focus:outline-none
                                     " aria-label="Default select example">
                                        <option {{ auth()->user()->gender == 'male' ? 'selected' : '' }} value="male">{{
                                        __('Male') }}</option>
                                        <option {{ auth()->user()->gender == 'female' ? 'selected' : '' }} value="female">{{
                                        __('Female') }}</option>
                                        <option {{ auth()->user()->gender == 'other' ? 'selected' : '' }} value="other">{{
                                        __('Other') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-full xxsm:flex-col msm:flex-row">
                        <div class="w-full mb-4">
                            <a class="px-6 py-3 border border-red text-white bg-red rounded-md font-medium text-xs leading-tight uppercase focus:outline-none
                            focus:ring-0 transition duration-150 ease-in-out" href="javascript:void(0);" onclick="delete_account()">
                                {{__("Delete Account")}}
                            </a>
                        </div>
                        <div class="w-full mb-4 flex msm:justify-end xxsm:justify-start ">
                            <button class="px-6 py-3 border border-primary text-white bg-primary rounded-md font-medium text-xs leading-tight uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="submit" id="button-addon3">
                                {{__("Update")}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script src="{{ url('assets/js/intlTelInput.min.js') }}"></script>
<script>
    const phoneInputField = document.querySelector(".phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["us", "co", "in", "de"],
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "{{url('assets/js/utils.js')}}",
    });
    phoneInputField.addEventListener("countrychange", function() {
        var phone_code = $('.phone').find('.iti__selected-dial-code').text();
        $('input[name=phone_code]').val('+' + phoneInput.getSelectedCountryData().dialCode);
    });

    $(document).ready(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var type = $('#imagePreview').attr('data-id');
                    var fileName = document.getElementById("image").value;
                    var idxDot = fileName.lastIndexOf(".") + 1;
                    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
                    if (extFile == "jpg" || extFile == "jpeg" || extFile == "png") {
                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    } else {
                        $('input[type=file]').val('');
                        alert("Only jpg/jpeg and png files are allowed!");
                        if (type == 'add') {
                            $('#imagePreview').css('background-image', 'url()');
                            $('#imagePreview').hide();
                            $('#imagePreview').fadeIn(650);
                        }
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    });
</script>
@endsection --}}







{{-- @extends('layout.mainlayout',['activePage' => 'user'])

@section('css')
<style>
  .sidebar li.active {
    background: linear-gradient(45deg, #00000000 50%, #f4f2ff);
    border-left: 2px solid var(--site_color);
  }

  .mapClass {
    height: 200px;
    border-radius: 12px;
  }
</style>
@endsection

@section('content')
<div class="xl:w-3/4 mx-auto">
  <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 pt-10">
    <div class="flex h-full mb-20 xxsm:flex-col sm:flex-col xmd:flex-row xmd:space-x-5">
      <div class="2xl:w-1/5 1xl:w-1/5 xl:w-1/4 xlg:w-80 lg:w-72 xxmd:w-72 xmd:w-72 md:w-72 h-auto">
        @include('website.user.userSidebar',['active' => 'patientAddress'])
      </div>
      <div class="w-full md:w-full xxmd:w-full xmd:w-80 lg:w-2/3 xlg:w-2/3 1xl:w-full 2xl:w-full sm:ml-0 xxsm:ml-0 shadow-lg overflow-hidden p-5 mt-10 2xl:mt-0 xmd:mt-0">
        <div class="border border-white-100 overflow-hidden">
          <div class="flex flex-col p-3 rounded-md">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden table-responsive rounded-sm p-5">
                  <div class="flex justify-end Appointment-detail">
                    <a class="btn ms-auto " href="javascript:void(0)" role="button" data-from="add_new" data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init data-te-ripple-color="light">{{ __('Add new') }}</a>
                  </div>
                  <table class="min-w-full datatable ">
                    <thead class="border-b text-center">
                      <tr>
                        <th scope="col" class="text-sm font-medium px-6 py-4 text-left">#</th>
                        <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Address')}}</th>
                        <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Action')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($addresses as $address)
                      <tr class="border-b border-white-100 transition duration-300 ease-in-out hover:bg-gray-50">
                        <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="text-sm px-6 py-4">{{ $address->address }}</td>
                        <td class="text-sm px-6 py-4 flex">
                          <a href="javascript:void(0)" onclick="editAddress({{ $address->id }})" data-te-toggle="modal" data-te-target="#editAddress" data-te-ripple-init data-te-ripple-color="light" class="bg-[#eef7f2] px-6 whitespace-nowrap pt-2.5 pb-2  font-medium text-xs leading-normal uppercase rounded transition duration-150 ease-in-out align-center ">
                            <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16.3 6.425L12.05 2.225L13.45 0.825C13.8333 0.441667 14.3043 0.25 14.863 0.25C15.421 0.25 15.8917 0.441667 16.275 0.825L17.675 2.225C18.0583 2.60833 18.2583 3.071 18.275 3.613C18.2917 4.15433 18.1083 4.61667 17.725 5L16.3 6.425ZM14.85 7.9L4.25 18.5H0V14.25L10.6 3.65L14.85 7.9Z" fill="#219653" />
                            </svg>
                            <span class="text-[#3ba267]">{{ __('Edit') }}</span>
                          </a>
                          <a href="javascript:void(0)" onclick="deleteData({{ $address->id }})" class="bg-[#fcf0f2] ml-2 px-6 whitespace-nowrap pt-2.5 pb-2  font-medium text-xs leading-normal uppercase rounded transition duration-150 ease-in-out align-center">
                            <svg width="15" height="15" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3 18.5C2.45 18.5 1.97933 18.3043 1.588 17.913C1.196 17.521 1 17.05 1 16.5V3.5H0V1.5H5V0.5H11V1.5H16V3.5H15V16.5C15 17.05 14.8043 17.521 14.413 17.913C14.021 18.3043 13.55 18.5 13 18.5H3ZM5 14.5H7V5.5H5V14.5ZM9 14.5H11V5.5H9V14.5Z" fill="#D34053" />
                            </svg>
                            <span class="text-[#d54b5d]">{{ __('Delete') }}</span>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
{{-- add address --}}
{{-- <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
  <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalScrollableLabel"> {{ __('Add Address') }}</h5>
        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="relative overflow-y-auto p-4">
        <form class="addAddress" method="post">
          <input type="hidden" name="from" value="add_new">
          <div class="w-auto border border-white-light" id="map" style="height: 200px">{{ __('Rajkot') }}</div>
          <input type="hidden" name="lat" class="lat" value="{{ $setting->lat }}">
          <input type="hidden" name="lang" class="lng" value="{{ $setting->lang }}">
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
          <textarea name="address" class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white-50 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
          <span class="invalid-div text-red"><span class="address text-sm  text-red-600 font-fira-sans"></span></span>
        </form>
      </div>
      <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button type="button" class="inline-block rounded bg-white-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" onclick="addAddress()" class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light"> Save changes
        </button>
      </div>
    </div>
  </div>
</div>
</div> --}}

{{-- edit address --}}
{{-- <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editAddress" tabindex="-1" aria-labelledby="editAddressLabel" aria-hidden="true">
  <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="editAddressLabel"> {{ __('Add Address') }}</h5>
        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="relative overflow-y-auto p-4">
        <form class="" method="post">
          <input type="hidden" name="from" value="edit">
          <input type="hidden" name="id" id="address_id" value="">
          <div class="w-auto border border-white-light" id="map2" style="height: 200px">{{ __('Rajkot') }}</div>
          <input type="hidden" name="lat" class="lat" value="{{ $setting->lat }}">
          <input type="hidden" name="lang" class="lng" value="{{ $setting->lang }}">
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
          <textarea name="address" class="mt-2 form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white-50 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
          <span class="invalid-div text-red"><span class="address text-sm  text-red-600 font-fira-sans"></span></span>
        </form>
      </div>
      <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <button type="button" class="inline-block rounded bg-white-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
          Close
        </button>
        <button type="button" onclick="updateAddress()" class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light"> Save changes
        </button>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
@section('js')
<script src="{{url('assets/js/address.js')}}"></script>
@if (App\Models\Setting::first()->map_key)
<script src="https://maps.googleapis.com/maps/api/js?key={{App\Models\Setting::first()->map_key}}&callback=initAutocomplete&libraries=places&v=weekly" async></script>
@endif
@endsection
 --}}
