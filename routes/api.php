<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserApiController;
use App\Models\User;



use App\Http\Controllers\SuperAdmin\CustomController;
use App\Models\Appointment;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\DoctorSubscription;
use App\Models\Faviroute;
use App\Models\Hospital;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Treatments;
use App\Models\WorkingHour;
use Carbon\Carbon;
use App\Models\HospitalGallery;
use App\Models\Lab;
use App\Models\LabSettle;
use App\Models\LabWorkHours;
use App\Models\Language;
use App\Models\Medicine;
use App\Models\MedicineCategory;
use App\Models\MedicineChild;
use App\Models\Offer;
use App\Models\Pathology;
use App\Models\PathologyCategory;
use App\Models\Pharmacy;
use App\Models\PharmacySettle;
use App\Models\PharmacyWorkingHour;
use App\Models\Prescription;
use App\Models\PurchaseMedicine;
use App\Models\Radiology;
use App\Models\RadiologyCategory;
use App\Models\Report;

use App\Models\UserAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:api','scopes:'.request()->ip()])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/amgad2',[UserApiController::class,'apiDoctors']);
Route::get('doctor_details_amgad/{id}',[UserApiController::class,'amgadapiSingleDoctor']);

Route::post('/login',[UserApiController::class,'apiLogin']);
Route::post('/register',[UserApiController::class,'apiRegister']);
Route::post('/check_otp',[UserApiController::class,'apiCheckOtp']);
Route::get('/resendOtp/{user_id}',[UserApiController::class,'apiResendOtp']);
Route::post('/doctors',[UserApiController::class,'apiDoctors']);
Route::get('/treatments',[UserApiController::class,'apiTreatments']);
Route::get('/offers',[UserApiController::class,'apiOffers']);
Route::post('near_by_doctor',[UserApiController::class,'apiNearByDoctor']);
Route::post('doctor_details/{id}',[UserApiController::class,'apiSingleDoctor']);
Route::post('/timeslot',[UserApiController::class,'apiTimeslot']);
Route::get('/setting',[UserApiController::class,'apiSetting']);
Route::get('/blogs',[UserApiController::class,'apiBlogs']);
Route::get('/blog_details/{id}',[UserApiController::class,'apiSingleBlog']);
Route::get('/pharamacies',[UserApiController::class,'apipharmacy']);
Route::get('/pharmacy_details/{id}',[UserApiController::class,'apiSinglepharmacy']);
Route::get('/medicine_details/{id}',[UserApiController::class,'apiSingleMedicine']);
Route::post('/forgot_password',[UserApiController::class,'apiForgotPassword']);
Route::post('treatment_wise_doctor/{treatment_id}',[UserApiController::class,'apiTreatmentDoctor']);
Route::get('/banner',[UserApiController::class,'apiBanner']);

Route::middleware('auth:api')->group(function ()
{
    Route::post('/book_appointment',[UserApiController::class,'apiBooking']);
    Route::get('appointments',[UserApiController::class,'apiAppointments']);
    Route::get('prescription/{appointment_id}',[UserApiController::class,'apiAppointmentPrescription']);

    Route::post('update_profile',[UserApiController::class,'apiUpdateProfile']);
    Route::post('update_image',[UserApiController::class,'apiUpdateImage']);
    Route::post('book_medicine',[UserApiController::class,'apiBookMedicine']);
    Route::get('medicines',[UserApiController::class,'apiMedicines']);
    Route::get('single_medicine/{purchase_medicide_id}',[UserApiController::class,'apiSingleMedicineDetails']);
    Route::post('cancel_appointment',[UserApiController::class,'apiCancelAppointment']);
    Route::get('address',[UserApiController::class,'apiShowAddress']);
    Route::post('add_address',[UserApiController::class,'apiAddAddress']);
    Route::get('delete_address/{id}',[UserApiController::class,'apiDeleteAddress']);
    Route::post('add_review',[UserApiController::class,'apiAddReview']);
    Route::post('check_offer',[UserApiController::class,'apiCheckCoupen']);
    Route::get('user_notification',[UserApiController::class,'apiUserNotification']);
    Route::get('add_bookmark/{doctor_id}',[UserApiController::class,'apiAddBookmark']);
    Route::get('faviroute_doctor',[UserApiController::class,'apiFaviroute']);
    Route::post('/generateAgoraToken',[UserApiController::class,'apiGenerateToken']);
    Route::get('/video_call_history',[UserApiController::class,'apiVideoCallHistory']);
    Route::post('/add_call_history',[UserApiController::class,'apiAddHistory']);
    Route::get('/send_notification',[UserApiController::class,'apiSendNotification']);
    Route::get('/delete-account', [UserApiController::class,'deleteAccount']);

});
// Route::get('/send_notification',[UserApiController::class,'apiSendNotification']);

// ************* DOCTOR *******************//
Route::post('doctor_login',[DoctorApiController::class,'apiDoctorLogin']);
Route::post('doctor_register',[DoctorApiController::class,'apiDoctorRegister']);
Route::get('allMedicines',[DoctorApiController::class,'apiMedicines']);

Route::middleware('auth:api')->group(function ()
{
    Route::get('doctor_appointment',[DoctorApiController::class,'apiDoctorAppointment']);
    Route::get('appointment_details/{id}',[DoctorApiController::class,'apiSingleAppointment']);
    Route::post('add_prescription',[DoctorApiController::class,'apiAddPrescription']);
    Route::get('working_hours',[DoctorApiController::class,'apiWorkingHours']);
    Route::post('update_time',[DoctorApiController::class,'apiUpdateWorkingHours']);
    Route::get('doctor_profile',[DoctorApiController::class,'apiLoginDoctor']);
    Route::post('update_doctor',[DoctorApiController::class,'apiUpdateDoctor']);
    Route::get('doctor_review',[DoctorApiController::class,'apiDoctorReview']);
   // Route::get('treatment',[DoctorApiController::class,'apiTreatment']);
   // Route::get('categories/{treatment_id}',[DoctorApiController::class,'apiCategory']);
//Route::get('expertise/{caegory_id}',[DoctorApiController::class,'apiExpertise']);
  //  Route::get('hospitals',[DoctorApiController::class,'apiHospital']);
    Route::post('status_change',[DoctorApiController::class,'apiStatusChange']);
    Route::get('appointment_history',[DoctorApiController::class,'apiAppointmentHistory']);
    Route::get('payment',[DoctorApiController::class,'apiPayment']);
    Route::post('payment',[DoctorApiController::class,'apiPayment']);
    Route::get('subscription',[DoctorApiController::class,'apiSubscription']);
    Route::get('finance_details',[DoctorApiController::class,'apiFinanceDetails']);
    Route::get('notification',[DoctorApiController::class,'apiNotification']);
       Route::get('notification_amgad',[DoctorApiController::class,'amgadapiNotification']);
    Route::post('purchase_subscrption',[DoctorApiController::class,'apiPurchaseSubscription']);
    Route::post('doctor_update_image',[DoctorApiController::class,'apiUpdateImage']);
    Route::get('cancel_appointment',[DoctorApiController::class,'apiCancelAppointment']);
      Route::get('cancel_appointment_amgad',[DoctorApiController::class,'amgadapiCancelAppointment']);
    Route::post('doctor_change_password',[DoctorApiController::class,'apiDoctorChangePassword']);
    Route::post('/generateDoctorAgoraToken',[DoctorApiController::class,'apiDoctorGenerateToken']);





});
 Route::get('treatment',[DoctorApiController::class,'apiTreatment']);
Route::post('update_doctor_amgad',[DoctorApiController::class,'apiUpdateDoctoramgad']);
 Route::get('doctor_profile_amgad',[DoctorApiController::class,'amgadapiLoginDoctor']);
 Route::get('amgad',[UserApiController::class,'amgad']);
  Route::get('doctor_appointment_amgad',[DoctorApiController::class,'amgadapiDoctorAppointment']);
  Route::get('filter',[DoctorApiController::class,'filter']);
    //  Route::post('update_doctor_amgad',[DoctorApiController::class,'apiUpdateDoctor']);
 //   Route::get('appointments',[UserApiController::class,'apiAppointments']);



// test chat
Route::apiResource('chat', App\Http\Controllers\ChatController::class)->only(['index','store','show']);
Route::apiResource('chat_message', ChatMessageController::class)->only(['index','store']);
Route::apiResource('user/{id}', UserController::class)->only(['index']);

Route::get('chat/store',[ App\Http\Controllers\ChatController::class,'store' ]);
Route::get('chat',[ App\Http\Controllers\ChatController::class,'show' ]);
Route::get('chat_message/store',[ App\Http\Controllers\ChatMessageController::class,'store' ]);
Route::get('chat_message',[ App\Http\Controllers\ChatMessageController::class,'index' ]);



Route::get('categories/{treatment_id}',[DoctorApiController::class,'apiCategory']);
Route::get('hospitals',[DoctorApiController::class,'apiHospital']);
Route::get('expertise/{caegory_id}',[DoctorApiController::class,'apiExpertise']);


Route::get('push_notification', function(Request $request){

    $r = User::find($request->r_id);
    $s = User::find($request->s_id);
    $msg = $request->msg;

    $SERVER_API_KEY = 'AAAAJvupYf0:APA91bEb-83oFOI1n8AjcunMAGCMgyFEvCeLAuVxzAwXNn8P3RgwDfTo4VXLFVlw4TdRQpS7nHTYoZ9dnP8pq10k32o2xaTUBhTyc6nhTCyaya_Gy_gamdwyi-WSuZd9liv3Kjn3dQSm';
    $token_1 =  $r->device_token  ;
    $data = [
        "registration_ids" => [
            $token_1
        ],
        "notification" => [
            "title" => $s->name ,
            "body" =>  $msg ,
            "sound"=> "default" // required for sound on ios

        ],
    ];
    $dataString = json_encode($data);
    $headers = [
        'Authorization: key=' . $SERVER_API_KEY,
        'Content-Type: application/json',
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
    $response = curl_exec($ch);


} );




//labs=================================
//===// api 1 to get lab and main data
Route::get('/lab_test/{id}',function($id ){
    $lab = Lab::find($id);
    $pathologyCategories = PathologyCategory::where('status',1)->get();
    $doctors = Doctor::whereStatus(1)->get();
    $date = Carbon::now(env('timezone'))->format('Y-m-d');
    $timeslots = (new CustomController)->LabtimeSlot($lab->id,$date);
    $radiology_categories = RadiologyCategory::whereStatus(1)->get();
    $setting = Setting::first();

    return response(['success' => true , 'data' =>  [
        'lab' =>   $lab ,
        'pathologyCategories' =>   $pathologyCategories ,
        'setting' =>   $setting ,
        'doctors' =>   $doctors ,
        'timeslots' =>   $timeslots ,
        'radiology_categories' =>   $radiology_categories ,
    ]]);
});


//===// api 2 to get related radiology options
Route::get('/radiology_category_wise/{id}/{lab_id}',function($id , $lab_id){
    $pathology = Radiology::where([['radiology_category_id',$id],['lab_id',$lab_id],['status',1]])->get();
    return response(['success' => true , 'data' => $pathology]);
});

//===// api 2 to get related pathology options
Route::get('/pathology_category_wise/{id}/{lab_id}',function($id , $lab_id){
    $pathology = Pathology::where([['pathology_category_id',$id],['lab_id',$lab_id],['status',1]])->get();
    return response(['success' => true , 'data' => $pathology]);
});

//===// api 2 to get hours avalible
Route::get('/lab_timeslot',function(Request $request){
    $timeslots = (new CustomController)->LabtimeSlot($request->lab_id,$request->date);
    return response(['success' => true , 'data'  => $timeslots , 'date' => Carbon::parse($request->date)->format('d M')]);

});

//===// api 2 to book lab test report
Route::post('/test_report',function(Request $request)   {
    $request->validate([
        'patient_name' => 'required',
        'age' => 'required|numeric',
        'phone_no' => 'required|numeric',
        'gender' => 'required',
        'date' => 'required',
        'time' => 'required',
        'doctor_id' => 'required_if:prescription_required,1',
        'prescription' => 'required_if:prescription_required,1'
    ]);
    $data = $request->all();
    $lab = Lab::find($request->lab_id);
    $data['report_id'] =  '#' . rand(100000, 999999);
    if(isset($data['prescription']))
    {
        $test = explode('.', $data['prescription']);
        $ext = end($test);
        $name = uniqid() . '.' . $data['prescription']->getClientOriginalExtension(); ;
        $location = public_path() . '/report_prescription/upload';
        $data['prescription']->move($location,$name);
        $data['prescription'] = $name;
    }
    $data['user_id'] = $request->user_id;
    if(isset($data['pathology_id'])){
        $data['pathology_id'] = implode(',',$data['pathology_id']);
    }
    if(isset($data['radiology_id'])){
        $data['radiology_id'] = implode(',',$data['radiology_id']);
    }
    $data = array_filter($data, function($a) {return $a !== "";});
    $report = Report::create($data);
    $settle = array();

    $com = $lab->commission * $request->amount;
    $admin_commission = $com / 100;
    $lab_commission = $request->amount - $admin_commission;

    $settle['lab_id'] = $lab->id;
    $settle['report_id'] = $report->id;
    $settle['admin_amount'] = $admin_commission;
    $settle['lab_amount'] = $lab_commission;
    $settle['payment'] = $report->payment_status == 1 ? 1 : 0;
    $settle['lab_status'] = 0;
    LabSettle::create($settle);
    return response(['success' => true]);
});

//===// api 2 to get hours avalible
Route::get('/all_labs',function(){
    $labs = Lab::all();
    return response(['success' => true , 'data'  => $labs ]);

});

Route::get('/user/report/{user_id}',function($user_id){
    $test_reports = Report::with('lab:id,name')->where('user_id',auth()->user()->id)->orderBy('id','DESC')->get();
    $currency = Setting::first()->currency_symbol;
    return response(['success' => true , 'data'  => [
        'test_reports'=>$test_reports,
        'currency'=>$currency,
    ] ]);

});
















//endlabs================================


