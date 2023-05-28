<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserApiController;
use App\Models\User;

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
 
 
 