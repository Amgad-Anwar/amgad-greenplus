




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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Laboratory Name</th>
                                                        <th>Prescription</th>
                                                        <th class="text-center">Date & time</th>
                                                        <th class="text-center">Payment Type</th>
                                                        <th>Amount</th>
                                                        <th>Report</th>
                                                      {{--   <th>Action</th> --}}
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                            @foreach ($test_reports as $test_report)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $test_report->lab['name'] }}</td>
                                                        <td>
                                                            @if ($test_report->prescription != null)
                                                            <a href="" data-fancybox="gallery2">
                                                                {{  $test_report->prescription }}
                                                            </a>
                                                            @else
                                                            {{__('Prescirption Not available')}}
                                                            @endif
                                                        </td>
                                                        <td class="text-center">{{ $test_report->date }} | {{ $test_report->time }}</td>
                                                        <td class="text-center">{{ $test_report->payment_type }}</td>
                                                        <td>{{ $test_report->amount }}</td>
                                                        <td>
                                                          <div class="table-action">
                                                                <a href="#"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="fas fa-download"></i> @if ($test_report->upload_report == null)
                                                            {{ __('Report Not Availabel.') }}
                                                            @else
                                                            <a class="text-primary" href="{{ 'download_report/'.$test_report->id }}">
                                                                {{ __('Download Report') }}
                                                            </a>
                                                            @endif
                                                                </a>
                                                            </div>
{{--
                                                            @if ($test_report->upload_report == null)
                                                            {{ __('Report Not Availabel.') }}
                                                            @else
                                                            <a class="text-primary" href="{{ 'download_report/'.$test_report->id }}">
                                                                {{ __('Download Report') }}
                                                            </a>
                                                            @endif --}}

                                                        </td>
                                                       {{--  <td>
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-danger-light">
                                                                    <i class="fas fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td> --}}
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
<style>
    .sidebar li.active {
        background: linear-gradient(45deg, #00000000 50%, #f4f2ff);
        border-left: 2px solid var(--site_color);
    }
</style>
@endsection

@section('content')
<div class="xl:w-3/4 mx-auto">
    <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 pt-10 h-full">
        <div class="flex h-full mb-20 xxsm:flex-col sm:flex-col xmd:flex-row xmd:space-x-5">
            <div class="2xl:w-1/5 1xl:w-1/5 xl:w-1/4 xlg:w-80 lg:w-72 xxmd:w-72 !xmd:w-72 md:w-72 h-auto">
                @include('website.user.userSidebar',['active' => 'testReport'])
            </div>
            <div class="w-full md:w-full xxmd:w-full xmd:w-80 lg:w-2/3 xlg:w-2/3 1xl:w-full 2xl:w-full sm:ml-0 xxsm:ml-0 shadow-lg overflow-hidden p-5 mt-10 2xl:mt-0 xmd:mt-0">
                <div class="border border-white-100 overflow-hidden">
                    <div class="flex flex-col p-3">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden table-responsive p-5">
                                    <table class="min-w-full datatable">
                                        <thead class="border-b">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">#</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Laboratory Name') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Prescription') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Date & time') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Payment Type') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Amount') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Report') }}</th>
                                                <th scope="col" class="text-sm font-medium px-6 py-4 text-left">{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($test_reports as $test_report)
                                            <tr class="border-b transition duration-300 ease-in-out hover:bg-gray-50">
                                                <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                                                <td class="text-sm px-6 py-4">{{ $test_report->lab['name'] }}</td>
                                                <td class="text-sm px-6 py-4">
                                                    @if ($test_report->prescription != null)
                                                    <a href="{{ 'report_prescription/upload/'.$test_report->prescription }}" data-fancybox="gallery2">
                                                        <img src="{{ 'report_prescription/upload/'.$test_report->prescription}}" alt="Feature Image" width="50px" height="50px">
                                                    </a>
                                                    @else
                                                    {{__('Prescirption Not available')}}
                                                    @endif
                                                </td>
                                                <td class="text-sm px-6 py-4">{{ $test_report->date }}<span class="block text-primary">{{ $test_report->time }}</span></td>
                                                <td class="text-sm px-6 py-4">{{ $test_report->payment_type }}</td>
                                                <td class="text-sm px-6 py-4">{{ $currency }}{{ $test_report->amount }}</td>
                                                <td class="text-sm px-6 py-4">
                                                    @if ($test_report->upload_report == null)
                                                    {{ __('Report Not Availabel.') }}
                                                    @else
                                                    <a class="text-primary" href="{{ 'download_report/'.$test_report->id }}">
                                                        {{ __('Download Report') }}
                                                    </a>
                                                    @endif
                                                </td>
                                                <td class="text-sm px-6 py-4">
                                                    <a onclick="single_report({{ $test_report->id }})" class="px-6 whitespace-nowrap pt-2.5 pb-2 border-solid border-2 border-primary font-medium text-xs leading-normal uppercase rounded transition duration-150 ease-in-out align-center" href="javascript:void(0)" data-te-toggle="modal" data-te-target="#exampleModalScrollable" data-te-ripple-init data-te-ripple-color="light">
                                                        <svg width="16" height="12" viewBox="0 0 16 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 9.27219C8.90909 9.27219 9.68194 8.95413 10.3185 8.31801C10.9547 7.68141 11.2727 6.90856 11.2727 5.99947C11.2727 5.09038 10.9547 4.31753 10.3185 3.68092C9.68194 3.0448 8.90909 2.72674 8 2.72674C7.09091 2.72674 6.31806 3.0448 5.68146 3.68092C5.04533 4.31753 4.72727 5.09038 4.72727 5.99947C4.72727 6.90856 5.04533 7.68141 5.68146 8.31801C6.31806 8.95413 7.09091 9.27219 8 9.27219ZM8 7.9631C7.45455 7.9631 6.99103 7.77207 6.60946 7.39001C6.22739 7.00844 6.03636 6.54492 6.03636 5.99947C6.03636 5.45401 6.22739 4.99026 6.60946 4.60819C6.99103 4.22662 7.45455 4.03583 8 4.03583C8.54545 4.03583 9.00921 4.22662 9.39127 4.60819C9.77285 4.99026 9.96364 5.45401 9.96364 5.99947C9.96364 6.54492 9.77285 7.00844 9.39127 7.39001C9.00921 7.77207 8.54545 7.9631 8 7.9631ZM8 11.454C6.2303 11.454 4.61818 10.96 3.16364 9.97183C1.70909 8.98419 0.654545 7.66007 0 5.99947C0.654545 4.33886 1.70909 3.0145 3.16364 2.02638C4.61818 1.03874 6.2303 0.544922 8 0.544922C9.7697 0.544922 11.3818 1.03874 12.8364 2.02638C14.2909 3.0145 15.3455 4.33886 16 5.99947C15.3455 7.66007 14.2909 8.98419 12.8364 9.97183C11.3818 10.96 9.7697 11.454 8 11.454Z" />
                                                        </svg>
                                                        <span class="ml-2 text-primary">{{ __('View') }}</span>
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
</div>
<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalScrollableLabel"> {{ __('Appointment Details') }}</h5>
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="relative overflow-y-auto p-4">
                <table class="table min-w-full mt-4">
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Report Id') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans report_id"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient name') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans patient_name"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient phone number') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans patient_phone"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient age') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans patient_age"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient gender') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans patient_gender"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('amount') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans amount"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('payment status') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans payment_status"></td>
                    </tr>
                    <tr>
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('payment type') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans payment_type"></td>
                    </tr>
                    <tr class="pathology_category_id">
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Pathology category') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans pathology_category"></td>
                    </tr>
                    <tr class="radiology_category_id">
                        <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Radiology category') }}</td>
                        <td class="text-sm font-light px-2 py-2 font-fira-sans radiology_category"></td>
                    </tr>
                    <table class="table types text-left min-w-full mt-4">
                    </table>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection --}}
