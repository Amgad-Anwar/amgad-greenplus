




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
                        <div class="card-body pt-0">

                            <nav class="user-tabs mb-4">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-bs-toggle="tab">Appointments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_prescriptions"
                                           data-bs-toggle="tab">Prescriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pat_medical_records" data-bs-toggle="tab"><span
                                                class="med-records">Medical Records</span></a>
                                    </li>
                                </ul>
                            </nav>


                            <div class="tab-content pt-0">

                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Appointment Id</th>
                                                        <th>Doctor name</th>
                                                        <th>Appointment date</th>
                                                        <th>Appointment time</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>

                                                    @foreach ($appointments as $appointment)
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $appointment->appointment_id }}</td>



                                         <td>
                                                            <h2 class="table-avatar">
                                                                <a href="{{ url('doctor-profile/'.$appointment->doctor['id'].'/'.Str::slug($appointment->doctor['name'])) }}"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="{{ url($appointment->doctor['fullImage']) }}"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="{{ url('doctor-profile/'.$appointment->doctor['id'].'/'.Str::slug($appointment->doctor['name'])) }}">{{ $appointment->doctor->name }}<span>{{ $appointment->doctor->expertise->name }}</span></a>
                                                            </h2>
                                                        </td> -


                                                        </td>
                                                        <td>{{ $appointment->date }}</td>
                                                        <td>{{ $appointment->time }}</td>
                                                        <td> {{ $appointment->amount }} </td>
                                                        <td>{{-- <span
                                                                class="badge rounded-pill bg-success-light">Confirm
                                                            </span> --}}
                                                               @if($appointment->appointment_status == 'pending' || $appointment->appointment_status == 'PENDING')
                                                            <span class="badge rounded-pill border border-yellow-100 bg-yellow-100 px-3 py-1 text-yellow rounded-full">{{__('Pending')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'approve' || $appointment->appointment_status == 'APPROVE')
                                                            <span class="badge rounded-pill border border-green-100 bg-green-100 px-3 py-1 text-green rounded-full">{{__('Approved')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'cancel' || $appointment->appointment_status == 'CANCEL')
                                                            <span class="badge rounded-pill border border-red-100 bg-red-100 px-3 py-1 text-red rounded-full">{{__('Cancelled')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'complete' || $appointment->appointment_status == 'COMPLETE')
                                                            <span class="badge rounded-pill bg-success border border-sky-100 bg-sky-100 px-3 py-1 text-sky rounded-full ">{{__('Completed')}}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="../invoice-view.html"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-danger">
                                                                    <i class="far fa-eye"></i> Cancel
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


                                <div class="tab-pane fade" id="pat_prescriptions">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Appointment Id</th>
                                                        <th>Created by</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($prescriptions as $prescription)


                                                    <tr>
                                                        <td>{{ Carbon\Carbon::parse($prescription->created_at)->format('d F Y') }}</td>
                                                        <td>{{ $prescription->appointment->id }}</td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href=""{{ url('doctor_profile/' . $prescription->doctor['id'] . '/' . Str::slug($prescription->doctor['name'])) }}"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                    src="{{ $prescription->doctor['fullImage'] }}"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="{{ url('doctor_profile/' . $prescription->doctor['id'] . '/' . Str::slug($prescription->doctor['name'])) }}">{{$prescription->doctor['name'] }} <span>{{ $appointment->doctor->expertise->name }}</span></a>
                                                            </h2>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Download
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


                                <div id="pat_medical_records" class="tab-pane fade">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Amount</th>
                                                        <th>Payment type</th>
                                                        <th>Attachment</th>
                                                        <th>Payment Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        {{--
                                                            @foreach ($purchaseMedicines as $purchaseMedicine)
                                                    <tr class="bg-white-50 border-b transition duration-300 ease-in-out hover:bg-gray-50">
                                                        <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                                                        <td class="text-sm px-6 py-4">{{ $purchaseMedicine->medicine_id }}</td>
                                                        <td class="text-sm px-6 py-4">{{ $currency }}{{ $purchaseMedicine->amount }}</td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if (isset($purchaseMedicine->pdf) || $purchaseMedicine->pdf != null)
                                                            <a href="{{ url('prescription/upload/' . $purchaseMedicine->pdf) }}" data-fancybox="gallery2">
                                                                {{ $purchaseMedicine->pdf }}
                                                            </a>
                                                            @else
                                                            {{ __('Not available') }}
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">{{ $purchaseMedicine->payment_type }}</td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if ($purchaseMedicine->payment_status == 1)
                                                            <span class="btn btn-sm btn-success">{{ __('Paid') }}</span>
                                                            @else
                                                            <span class="btn btn-sm btn-danger">{{ __('Remaining') }}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <a onclick="show_medicines({{ $purchaseMedicine->id }})"
                                                                class="bg-green-100 p-2 rounded-lg ml-2" href="javascript:void(0)"
                                                                 data-te-toggle="modal" data-te-target="#purchased_medicine"
                                                                  data-te-ripple-init data-te-ripple-color="light">
                                                                <i class="text-green fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                            --}}
                                                            @foreach ($purchaseMedicines as $purchaseMedicine)
                                                    <tr>
                                                        <td><a href="javascript:void(0);">{{ $purchaseMedicine->medicine_id }}</a></td>
                                                        <td>{{ $currency }}{{ $purchaseMedicine->amount }}</td>
                                                        <td>{{ $purchaseMedicine->payment_type }}</td>
                                                        <td><a href="#">  @if (isset($purchaseMedicine->pdf) || $purchaseMedicine->pdf != null)
                                                            <a href="{{ url('prescription/upload/' . $purchaseMedicine->pdf) }}" data-fancybox="gallery2">
                                                                {{ $purchaseMedicine->pdf }}
                                                            </a>
                                                            @else
                                                            {{ __('Not available') }}
                                                            @endif</a></td>
                                                        <td>  @if ($purchaseMedicine->payment_status == 1)
                                                            <span class="btn btn-sm btn-success">{{ __('Paid') }}</span>
                                                            @else
                                                            <span class="btn btn-sm btn-danger">{{ __('Remaining') }}</span>
                                                            @endif</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="#"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
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


                                <div id="pat_billing" class="tab-pane fade">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Doctor</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0010</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Ruby Perrin
                                                                    <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$450</td>
                                                        <td>14 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0009</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$300</td>
                                                        <td>13 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0008</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$150</td>
                                                        <td>12 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0007</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$50</td>
                                                        <td>11 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0006</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$600</td>
                                                        <td>10 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0005</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Katharine Berthold
                                                                    <span>Orthopaedics</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$200</td>
                                                        <td>9 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0004</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$100</td>
                                                        <td>8 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0003</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$250</td>
                                                        <td>7 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0002</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$175</td>
                                                        <td>6 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="invoice-view.html">#INV-0001</a>
                                                        </td>
                                                        <td>
                                                            <h2 class="table-avatar">
                                                                <a href="doctor-profile.html"
                                                                   class="avatar avatar-sm me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                         src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                         alt="User Image">
                                                                </a>
                                                                <a href="doctor-profile.html">Dr. Olga Barlow <span>#0010</span></a>
                                                            </h2>
                                                        </td>
                                                        <td>$550</td>
                                                        <td>5 Nov 2019</td>
                                                        <td class="text-end">
                                                            <div class="table-action">
                                                                <a href="invoice-view.html"
                                                                   class="btn btn-sm bg-info-light">
                                                                    <i class="far fa-eye"></i> View
                                                                </a>
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-sm bg-primary-light">
                                                                    <i class="fas fa-print"></i> Print
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
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
    <div class="xxsm:mx-5 xl:mx-0 2xl:mx-0 pt-10">
        <div class="flex h-full mb-20 xxsm:flex-col sm:flex-col xmd:flex-row xmd:space-x-5 ">
            <div class="2xl:w-1/5 1xl:w-1/5 xl:w-1/4 xlg:w-80 lg:w-72 xxmd:w-72 !xmd:w-72 md:w-72 h-auto">
                @include('website.user.userSidebar',['active' => 'dashboard'])
            </div>
            <div class="w-full md:w-full xxmd:w-full xmd:w-80 lg:w-2/3 xlg:w-2/3 1xl:w-full 2xl:w-full sm:ml-0 xxsm:ml-0 shadow-lg overflow-hidden p-5 mt-10 2xl:mt-0 xmd:mt-0">
                <div class="border border-white-100 overflow-hidden ">
                    <ul class="mb-5 flex list-none flex-col flex-wrap border-b-0 pl-2 md:flex-row" role="tablist" data-te-nav-ref>
                        <li role="presentation">
                            <a href="#tabs-home" class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-semibold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-home"  role="tab" aria-controls="tabs-home" aria-selected="false">{{ __('Appointments') }}</a>
                        </li>
                        <li role="presentation">
                            <a href="#tabs-profile" class="focus:border-transparen my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-semibold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-profile" data-te-nav-active role="tab" aria-controls="tabs-profile" aria-selected="true">{{ __('Prescriptions') }}</a>
                        </li>
                        <li role="presentation">
                            <a href="#tabs-messages" class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-xs font-semibold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-messages" role="tab" aria-controls="tabs-messages" aria-selected="false">{{ __('Purchased Medicine') }}</a>
                        </li>
                    </ul>
                    <div class="mb-6">
                        <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" >
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden table-responsive p-5">
                                            <table class="min-w-full datatable">
                                                <thead class="border-b">
                                                    <tr>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">#</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Id') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Report Image') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Date') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Amount') }}({{ $currency }})</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Status') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($appointments as $appointment)
                                                    <tr class=" border-b transition duration-300 ease-in-out hover:bg-gray-50">
                                                        <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                                                        <td class="text-sm px-6 py-4">{{ $appointment->appointment_id }}</td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if ($appointment->report_image != null)
                                                            @foreach ($appointment->report_image as $item)
                                                            <a href="{{ $item }}" data-fancybox="gallery2">
                                                                <img src="{{ $item }}" alt="Feature Image" class="w-12 h-12 rounded-full p-0.5 m-auto" width="42px" height="42px">
                                                            </a>
                                                            @endforeach
                                                            @else
                                                            {{__('Image Not available')}}
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <span>{{ $appointment->time }}</span>
                                                        </td>
                                                        <td class="text-sm px-6 py-4">{{ $currency }}{{ $appointment->amount }}
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if($appointment->appointment_status == 'pending' || $appointment->appointment_status == 'PENDING')
                                                            <span class="border border-yellow-100 bg-yellow-100 px-3 py-1 text-yellow rounded-full">{{__('Pending')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'approve' || $appointment->appointment_status == 'APPROVE')
                                                            <span class="border border-green-100 bg-green-100 px-3 py-1 text-green rounded-full">{{__('Approved')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'cancel' || $appointment->appointment_status == 'CANCEL')
                                                            <span class="border border-red-100 bg-red-100 px-3 py-1 text-red rounded-full">{{__('Cancelled')}}</span>
                                                            @endif
                                                            @if($appointment->appointment_status == 'complete' || $appointment->appointment_status == 'COMPLETE')
                                                            <span class="border border-sky-100 bg-sky-100 px-3 py-1 text-sky rounded-full">{{__('Completed')}}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <div class="flex">
                                                                <a onclick="show_appointment({{ $appointment->id }})" class="bg-green-100 p-2 rounded-lg ml-2" href="javascript:void(0)" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init data-te-ripple-color="light">
                                                                    <i class="text-green fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                                @if ($appointment->appointment_status == 'complete' || $appointment->appointment_status == 'cancel')
                                                                @if ($appointment->isReview == false)
                                                                <a onclick="appointId({{ $appointment->id }})" class="bg-yellow-100 p-2 rounded-lg ml-2" href="javascript:void(0)" data-te-toggle="modal" data-te-target="#addReview" data-te-ripple-init data-te-ripple-color="light">
                                                                    <i class="text-yellow fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                                @endif
                                                                @endif
                                                                @if ($appointment->appointment_status != 'cancel' && $appointment->appointment_status != 'complete')
                                                                <a href="#cancel_reason" onclick="appointId({{ $appointment->id }})" class="bg-red-100 py-2 px-3 rounded-lg ml-2 d-flex justify-content-between" href="javascript:void(0)" data-te-toggle="modal" data-te-target="#cancel_reason" data-te-ripple-init data-te-ripple-color="light"><i class="text-red fa-solid fa-trash-can"></i></a>
                                                                @endif
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
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab" data-te-tab-active>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden table-responsive p-5">
                                            <table class="min-w-full datatable">
                                                <thead class="bg-white-50 border-b">
                                                    <tr>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">#</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Id') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Date') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Created by') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($prescriptions as $prescription)
                                                    <tr class="bg-white-50 border-b transition duration-300 ease-in-out hover:bg-gray-50">
                                                        <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                                                        <td class="text-sm px-6 py-4">{{$prescription->appointment['appointment_id'] }}</td>
                                                        <td class="text-sm px-6 py-4">{{ Carbon\Carbon::parse($prescription->created_at)->format('d F Y') }}
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <a href="{{ url('doctor_profile/' . $prescription->doctor['id'] . '/' . Str::slug($prescription->doctor['name'])) }}" class="avatar avatar-sm mr-2">
                                                                <img class="rounded-full" src="{{ $prescription->doctor['fullImage'] }}" alt="User Image" width="50px" height="50px">
                                                            </a>
                                                            <a href="{{ url('doctor_profile/' . $prescription->doctor['id'] . '/' . Str::slug($prescription->doctor['name'])) }}">{{$prescription->doctor['name'] }}</a>
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <div class="table-action">
                                                                <div class="flex space-x-2">
                                                                    <div>
                                                                        <a href="{{ url('downloadPDF/' . $prescription->id) }}" type="button" class="justify-between px-6 pt-2.5 pb-2 bg-white-50 border-solid border-2 border-primary font-semibold text-xs leading-normal uppercase rounded transition duration-150 ease-in-out flex align-center">
                                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.021 15.8043 14.55 16 14 16H2ZM8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12Z" />
                                                                            </svg>
                                                                            <span class="ml-2 text-primary">{{ __('Download') }}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
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
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden table-responsive p-5">
                                            <table class="min-w-full datatable">
                                                <thead class="bg-white-50 border-b">
                                                    <tr>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">#</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Appointment Id') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Amount') }}({{ $currency }})</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Attachment') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Payment type') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Payment Status') }}</th>
                                                        <th scope="col" class="text-sm font-semibold px-6 py-4 text-left">{{__('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($purchaseMedicines as $purchaseMedicine)
                                                    <tr class="bg-white-50 border-b transition duration-300 ease-in-out hover:bg-gray-50">
                                                        <td class="text-sm px-6 py-4">{{ $loop->iteration }}</td>
                                                        <td class="text-sm px-6 py-4">{{ $purchaseMedicine->medicine_id }}</td>
                                                        <td class="text-sm px-6 py-4">{{ $currency }}{{ $purchaseMedicine->amount }}</td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if (isset($purchaseMedicine->pdf) || $purchaseMedicine->pdf != null)
                                                            <a href="{{ url('prescription/upload/' . $purchaseMedicine->pdf) }}" data-fancybox="gallery2">
                                                                {{ $purchaseMedicine->pdf }}
                                                            </a>
                                                            @else
                                                            {{ __('Not available') }}
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">{{ $purchaseMedicine->payment_type }}</td>
                                                        <td class="text-sm px-6 py-4">
                                                            @if ($purchaseMedicine->payment_status == 1)
                                                            <span class="btn btn-sm btn-success">{{ __('Paid') }}</span>
                                                            @else
                                                            <span class="btn btn-sm btn-danger">{{ __('Remaining') }}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-sm px-6 py-4">
                                                            <a onclick="show_medicines({{ $purchaseMedicine->id }})" class="bg-green-100 p-2 rounded-lg ml-2" href="javascript:void(0)" data-te-toggle="modal" data-te-target="#purchased_medicine" data-te-ripple-init data-te-ripple-color="light">
                                                                <i class="text-green fa fa-eye" aria-hidden="true"></i>
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
    </div>
</div>


    <!-- Modal -->
    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none " id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="exampleModalCenter"> {{ __('Appointment Details') }}</h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="relative overflow-y-auto p-4">
                    <div class="border border-white-light p-2">
                        <h5 class="font-bold text-base font-fira-sans px-2">{{ __('Hospital Details') }}</h5>
                        <table class="min-w-full">
                            <tr>
                                <td class="text-sm text-gray-600  px-2 py-2 text-left font-fira-sans">{{ __('appointment Id')}}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans appointment_id"></td>
                            </tr>
                            <tr>
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Hospital') }}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans hospital"></td>
                            </tr>
                            <tr>
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Doctor name') }}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans doctor_name"></td>
                            </tr>
                            <tr>
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Appointment date') }}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans date"></td>
                            </tr>
                            <tr>
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Appointment time') }}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans time"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="border border-white-light p-2 mt-3">
                        <h5 class="font-bold text-base font-fira-sans px-2">{{ __('Patient Details') }}</h5>
                        <table class="min-w-full">
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient name') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans patient_name"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient age') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans patient_age"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('illness information') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans illness_info"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient address') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans patient_address"></td>
                            </tr>
                        </table>
                    </div>

                    <div class="border border-white-light p-2 mt-3">
                        <h5 class="font-bold text-base font-fira-sans px-2">{{ __('Payment Details') }}</h5>
                        <table class="min-w-full">
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Amount') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans amount"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Payment Status') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans payment_status"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('Payment type') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans payment_type"></td>
                            </tr>
                            <tr>
                                <td class="w-2/4 text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{ __('patient address') }}</td>
                                <td class="w-2/4 text-sm font-light px-2 py-2 font-fira-sans patient_address"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="addReview" tabindex="-1" aria-labelledby="addReviewLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="addReviewLabel"> {{ __('Review') }}</h5>
                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="{{ url('/addReview') }}" method="post" id="reviewForm">
                    @csrf
                    <div class="relative overflow-y-auto p-4">
                        <input type="hidden" name="appointment_id" value="">
                        <label class="col-form-label font-fira-sans">{{ __('Rating') }}</label>
                        <div id="full-stars-example-two">
                            <div class="rating-group">
                                <input disabled checked class="rating__input rating__input--none" name="rate" id="rating3-none" value="0" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rate" id="rating3-1" value="1" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rate" id="rating3-2" value="2" type="radio">
                                <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rate" id="rating3-3" value="3" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rate" id="rating3-4" value="4" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rate" id="rating3-5" value="5" type="radio">
                            </div>
                            <span class="invalid-div text-danger"><span class="rate text-sm text-base text-red-600 font-fira-sans"></span></span>
                        </div>
                        <div class="mt-2">
                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlTextarea1" class="form-label font-fira-sans inline-block mb-2 text-gray">{{ __('Write Review') }}</label>
                                <textarea name="review" class="font-fira-sans block w-full px-3 py-1.5 text-base font-normal text-gray bg-white-50 bg-clip-padding border border-solid border-white-light rounded transition ease-in-out m-0 focus:text-gray focus:bg-white-50 focus:border-primary focus:outline-none" id="exampleFormControlTextarea1" rows="3" placeholder="{{ __('Write your review') }}"></textarea>
                                <span class="invalid-div text-red"><span class="review text-sm  text-red-600 font-fira-sans"></span></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button type="button" class="inline-block rounded bg-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Close
                        </button>
                        <button type="button" onclick="addReview()" class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light"> Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="purchased_medicine" tabindex="-1" aria-labelledby="purchased_medicineLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="purchased_medicineLabel"> {{ __('Purchased medicine details') }}</h5>
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="relative overflow-y-auto p-4">
                <div class="border p-2">
                    <div class="font-fira-sans px-2 text-base">{{ __('Shipping Details') }}</div>
                    <table class="min-w-full mt-3">
                        <tbody>
                            <tr>
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{__('shipping At')}}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans shippingAt"></td>
                            </tr>
                            <tr class="shippingAddressTr">
                                <td class="text-sm text-gray-600 px-2 py-2 text-left font-fira-sans">{{__('shipping Adddress')}}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans shippingAddress"></td>
                            </tr>
                            <tr class="shippingAddressTr">
                                <td class="text-sm font-light px-2 py-2 font-fira-sans">{{__('Delivery Charge')}}</td>
                                <td class="text-sm font-light px-2 py-2 font-fira-sans deliveryCharge"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border p-2 mt-3">
                    <div class="font-fira-sans text-right">{{ __('Medicine Details') }}</div>
                    <table class="min-w-full mt-2">
                        <thead class="bg-[#f4fbfd]">
                            <th class="text-sm font-light px-2 py-2 font-fira-sans">{{__('Medicine name')}}</th>
                            <th class="text-sm font-light px-2 py-2 font-fira-sans">{{__('Medicine qty')}}</th>
                            <th class="text-sm font-light px-2 py-2 font-fira-sans">{{__('Medicine price')}}</th>
                        </thead>
                        <tbody class="tbody">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-te-modal-init class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="cancel_reason" tabindex="-1" aria-labelledby="cancel_reasonLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="cancel_reasonLabel"> {{ __('Appointment Cancel') }}</h5>
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="relative overflow-y-auto p-4">
                <form method="post" id="cancelForm">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="cancel_by" value="user">
                    <table class="table">
                        @foreach (json_decode($cancel_reason) as $cancel_reason)
                        <tr>
                            <td>
                                <div class="relative flex items-center my-1 mt-2">
                                    <input type="radio" class="d-none custom_radio" id="cod{{$loop->iteration}}" name="payment" onchange="seeData('#codPayment')" checked>
                                    <label for="cod{{$loop->iteration}}" class="absolute custom-radio"></label>
                                    <label for="cod{{$loop->iteration}}" class="ms-4 normal-label">{{$cancel_reason}}</label>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
            </div>
            <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <button type="button" class="inline-block rounded bg-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                    Close
                </button>
                <button type="submit" class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" onclick="cancelAppointment()" data-te-ripple-init data-te-ripple-color="light"> Save changes
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{url('assets/js/custom.js')}}"></script>
@endsection --}}


