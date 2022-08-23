<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\doctor_controller;
use App\Http\Controllers\citie_controller;
use App\Http\Controllers\area_controller;
use App\Http\Controllers\specialist_controller;
use App\Http\Controllers\state_controller;
use App\Http\Controllers\companie_controller;
use App\Http\Controllers\manager_controller;
use App\Http\Controllers\mr_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\stockiest_controller;
use App\Http\Controllers\service_controller;
use App\Http\Controllers\drspecialitie_controller;
use App\Http\Controllers\patient_controller;
use App\Http\Controllers\patient_slots_controller;
use App\Http\Controllers\doc_fav_medicines_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\book_by_otp_controller;
use App\Http\Controllers\appointment_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/login', function (){return view('patient.login');});
Route::get('/register',[patient_controller::class,'create'])->middleware('patientbeforelogin');
Route::post('/register',[patient_controller::class,'store']);
//Route::get('/register', function (){return view('patient.register');});
Route::get('/login',[patient_controller::class,'patientlog'])->middleware('patientbeforelogin');
Route::post('/patientlogin',[patient_controller::class,'patientlogin']);
Route::get('/patientlogout',[patient_controller::class,'patientlogout']);

Route::group(['middleware'=>['patientafterlogin']], function(){

Route::get('/', function (){return view('patient.index');});
Route::get('/index', function (){return view('patient.index');});
Route::get('/about', function (){return view('patient.about');});
Route::get('/contact', function (){return view('patient.contact');});
Route::get('/index', function (){return view('patient.index');});



Route::get('/patient-dashboard', function (){return view('patient.patient-dashboard');});

//Route::get('/search', function (){return view('patient.search');});
Route::get('/favourites', function (){return view('patient.favourites');});

//Route::get('/doctor-profile', function (){return view('patient.doctor-profile');});
Route::get('/doctor-profile/{id}',[doctor_controller::class,'doctorview']);

Route::get('/booking', function (){return view('patient.booking');});
Route::get('/checkout', function (){return view('patient.checkout');});
Route::get('/booking-success', function (){return view('patient.booking-success');});
Route::get('/prescription', function (){return view('patient.prescription');});
Route::get('/prescription-view', function (){return view('patient.prescription-view');});

//Route::get('/profile-settings', function (){return view('patient.profile-settings');});

Route::get('/editpatient',[patient_controller::class,'editpatient']);
Route::post('/editpatient/{patient_id}',[patient_controller::class,'updatepatient']);

Route::get('/change-password', function (){return view('patient.change-password');});
Route::get('/forgot-password', function (){return view('patient.forgot-password');});

Route::get('/search',[doctor_controller::class,'doctorlist']);

//Route::get('/booking', function (){return view('patient.booking');});
Route::get('/booking/{id}',[patient_slots_controller::class,'showpatient']);
Route::post('/booking/{id}',[patient_slots_controller::class,'showpatient']);

Route::post('/book_appointment',[patient_slots_controller::class,'book_appointment']);
Route::post('/book_by_otp',[book_by_otp_controller::class,'book_by_otp']);
Route::get('/book_by_otp',[book_by_otp_controller::class,'book_by_otp']);
//Route::post('/book_appointment/{id}',[patient_slots_controller::class,'book_appointment']);

Route::get('/chat', function (){return view('patient.chat');});
Route::get('/voice-call', function (){return view('patient.voice-call');});
Route::get('/video-call', function (){return view('patient.video-call');});

Route::get('reviews', function (){return view('patient.reviews');});
Route::get('calendar', function (){return view('patient.calendar');});
Route::get('components', function (){return view('patient.components');});

});

//===========================================================================================================
Route::get('/doctor',[doctor_controller::class,'login'])->middleware('doctorbeforelogin');
Route::post('/doctorlogin',[doctor_controller::class,'doctorlogin']);
Route::get('/doctorlogout',[doctor_controller::class,'doctorlogout']);

//Route::get('/doctor', function (){return view('doctor.login');});

Route::group(['middleware'=>['doctorafterlogin']], function(){

Route::get('/doctor-change-password', function (){return view('doctor.change-password');});
Route::get('/doctor-forgot-password', function (){return view('doctor.forgot-password');});

Route::get('/doctor-dashboard', function (){return view('doctor.doctor-dashboard');});
Route::get('/editdoctor',[doctor_controller::class,'editdoctor']);
Route::post('/editdoctor/{doctor_id}',[doctor_controller::class,'updatedoctor']);
//Route::get('/doctor-profile-settings', function (){return view('doctor.doctor-profile-settings');});
Route::get('/doctor-social-media', function (){return view('doctor.social-media');});

//Route::get('/doctor-service-specialization', function (){return view('doctor.add-service-specialization');});
Route::get('/doctor-service-specialization',[service_controller::class,'create']);
Route::post('/addservice',[service_controller::class,'addservice']);
Route::get('/doctor-service-specialization',[service_controller::class,'index']);
Route::get('/addservice/{id}',[service_controller::class,'servicedelete']);
Route::get('/addspecialitie/{id}',[service_controller::class,'specialdelete']);

//Route::get('/addspeciality',[drspecialitie_controller::class,'addspeciality']);
Route::post('/addspecialitie',[service_controller::class,'addspecialitie']);


Route::get('/doctor-my-patients', function (){return view('doctor.my-patients');});
Route::get('/doctor-patient-profile', function (){return view('doctor.patient-profile');});

Route::get('/doctor-appointments', function (){return view('doctor.appointments');});

//Route::get('/doctor-patient-schedule-timings', function (){return view('doctor.patient-schedule-timings');});
Route::get('/doctor-patient-schedule-timings',[patient_slots_controller::class,'create']);
Route::post('/doctor-patient-schedule-timings',[patient_slots_controller::class,'store']);


//Route::get('/doctor-my-medicine', function (){return view('doctor.my-medicine');});
Route::get('/doctor-my-medicine',[doc_fav_medicines_controller::class,'create']);
Route::post('/addlistmedicine',[doc_fav_medicines_controller::class,'addlistmedicine']);
Route::post('/addmedicine',[doc_fav_medicines_controller::class,'addmedicine']);
Route::get('/doctor-my-medicine/{id}',[doc_fav_medicines_controller::class,'destroy']);
//Route::get('/doctor-my-medicine',[doc_fav_medicines_controller::class,'index']);

Route::get('/doctor-mr-dashboard', function (){return view('doctor.mr-dashboard');});
Route::get('/doctor-mr-schedule-timings', function (){return view('doctor.mr-schedule-timings');});
Route::get('/doctor-mr-appointments', function (){return view('doctor.mr-appointments');});
Route::get('/doctor-mr-find', function (){return view('doctor.mr-find');});


Route::get('/doctor-manager-dashboard', function (){return view('doctor.manager-dashboard');});
Route::get('/doctor-manager-schedule-timings', function (){return view('doctor.manager-schedule-timings');});
Route::get('/doctor-manager-appointments', function (){return view('doctor.manager-appointments');});
Route::get('/doctor-manager-find', function (){return view('doctor.manager-find');});

Route::get('/doctor-company-dashboard', function (){return view('doctor.company-dashboard');});
Route::get('/doctor-company-schedule-timings', function (){return view('doctor.company-schedule-timings');});
Route::get('/doctor-company-appointments', function (){return view('doctor.company-appointments');});
Route::get('/doctor-company-find', function (){return view('doctor.company-find');});



Route::get('/doctor-chat-doctor', function (){return view('doctor.chat-doctor');});
Route::get('/doctor-invoices', function (){return view('doctor.invoices');});
Route::get('/doctor-reviews', function (){return view('doctor.reviews');});
Route::get('/doctor-calendar', function (){return view('doctor.calendar');});
Route::get('/doctor-components', function (){return view('doctor.components');});
Route::get('/doctor-invoice-view', function (){return view('doctor.invoice-view');});
Route::get('/doctor-blank-page', function (){return view('doctor.blank-page');});

});
//===========================================================================================================

Route::get('/admin-login',[admin_controller::class,'login']);
Route::post('/adminlogin',[admin_controller::class,'adminlogin']);
Route::get('/logout',[admin_controller::class,'logout']);

Route::group(['middleware'=>['afterlogin']], function(){

Route::get('/admin', function (){return view('admin.index');});
Route::get('/admin-profile',[admin_controller::class,'profile']);
Route::get('/editadmin/{id}',[admin_controller::class,'editadmin']);
Route::post('/admin-profile/{id}',[admin_controller::class,'update']);
Route::get('/admin-settings', function (){return view('admin.settings');});

Route::get('/admin-medicine',[doc_fav_medicines_controller::class,'adminmedicinemanage']);

Route::get('/admin-contact',[contact_controller::class,'index']);

//Route::get('/admin-location', function (){return view('admin.location');});
//Route::get('/admin-location',[state_controller::class,'create']);
Route::post('/addstate',[state_controller::class,'addstate']);
Route::post('/addcity',[state_controller::class,'addcity']);
Route::post('/addarea',[state_controller::class,'addarea']);
Route::get('/admin-location',[state_controller::class,'index']);
Route::get('/addstate/{id}',[state_controller::class,'statedelete']);
Route::get('/addcity/{id}',[state_controller::class,'citydelete']);
Route::get('/addarea/{id}',[state_controller::class,'areadelete']);

Route::get('/admin-specialities',[specialist_controller::class,'index']);
Route::get('/admin-add-specialities',[specialist_controller::class,'create']);
Route::post('/admin-add-specialities',[specialist_controller::class,'store']);
Route::get('/edit-specialist/{id}',[specialist_controller::class,'edit']);
Route::post('/edit-specialist/{id}',[specialist_controller::class,'update']);
Route::get('/admin-add-specialities/{id}',[specialist_controller::class,'destroy']); 
//
//Route::get('/admin-patient', function (){return view('admin.patient-list');});
Route::get('/admin-patient',[patient_controller::class,'index']);
Route::get('/register/{id}',[patient_controller::class,'destroy']); 
Route::get('/admin-patient-appointment', function (){return view('admin.patient-appointment');});
Route::get('/admin-patient-cancel-appointment', function (){return view('admin.patient-cancel-appointment');});

Route::get('/edit/{id}',[doctor_controller::class,'edit']);
Route::post('/edit/{id}',[doctor_controller::class,'update']);
Route::get('/admin-doctor',[doctor_controller::class,'index']);
Route::get('/admin-add-doctor',[doctor_controller::class,'create']);
Route::post('/admin-add-doctor',[doctor_controller::class,'store']);
Route::get('/admin-add-doctor/{id}',[doctor_controller::class,'destroy']); 
Route::get('/admin-doctor-appointment', function (){return view('admin.doctor-appointment');});
Route::get('/admin-doctor-cancel-appointment', function (){return view('admin.doctor-cancel-appointment');});

Route::get('/admin-add-company',[companie_controller::class,'admincompanycreate']);
Route::post('/admin-add-company',[companie_controller::class,'admincompanystore']);
Route::get('/admin-company',[companie_controller::class,'admincompanyindex']);
Route::get('/edit-company/{id}',[companie_controller::class,'admincompanyedit']);
Route::post('/edit-company/{id}',[companie_controller::class,'admincompanyupdate']);
Route::get('/admin-add-company/{id}',[companie_controller::class,'admincompanydestroy']); 
Route::get('/admin-company-appointment', function (){return view('admin.company-appointment');});
Route::get('/admin-company-cancel-appointment', function (){return view('admin.company-cancel-appointment');});

Route::get('/admin-add-manager',[manager_controller::class,'adminmanagercreate']);
Route::post('/admin-add-manager',[manager_controller::class,'adminmanagerstore']);
Route::get('/admin-manager',[manager_controller::class,'adminmanagerindex']);
Route::get('/edit-manager/{id}',[manager_controller::class,'adminmanageredit']);
Route::post('/edit-manager/{id}',[manager_controller::class,'adminmanagerupdate']);
Route::get('/admin-add-manager/{id}',[manager_controller::class,'adminmanagerdestroy']); 
Route::get('/admin-manager-appointment', function (){return view('admin.manager-appointment');});
Route::get('/admin-manager-cancel-appointment', function (){return view('admin.manager-cancel-appointment');});

Route::get('/admin-add-mr',[mr_controller::class,'create']);
Route::post('/admin-add-mr',[mr_controller::class,'store']);
Route::get('/admin-mr',[mr_controller::class,'index']);
Route::get('/edit-mr/{id}',[mr_controller::class,'edit']);
Route::post('/edit-mr/{id}',[mr_controller::class,'update']);
Route::get('/admin-add-mr/{id}',[mr_controller::class,'destroy']); 
Route::get('/admin-mr-appointment', function (){return view('admin.mr-appointment');});
Route::get('/admin-mr-cancel-appointment', function (){return view('admin.mr-cancel-appointment');});

Route::get('/admin-stockiest',[stockiest_controller::class,'index']);

Route::get('/admin-reviews', function (){return view('admin.reviews');});
Route::get('/admin-transactions-list', function (){return view('admin.transactions-list');});
Route::get('/admin-invoice-report', function (){return view('admin.invoice-report');});
Route::get('/admin-forgot-password', function (){return view('admin.forgot-password');});
Route::get('/admin-lock-screen', function (){return view('admin.lock-screen');});
Route::get('/admin-error-404', function (){return view('admin.error-404');});
Route::get('/admin-error-500', function (){return view('admin.error-500');});
Route::get('/admin-blank-page', function (){return view('admin.blank-page');});
Route::get('/admin-components', function (){return view('admin.components');});


});
//===========================================================================================================

Route::get('/company',[companie_controller::class,'login']);
Route::post('/companylogin',[companie_controller::class,'companylogin']);
Route::get('/companylogout',[companie_controller::class,'companylogout']);


Route::group(['middleware'=>['afterlogincompany']], function(){

    Route::get('/company-dashboard', function (){return view('company.index');});
    Route::get('/company-profile',[companie_controller::class,'companyprofile']);
    Route::get('/editcompany{id}',[companie_controller::class,'editcompany']);
    Route::post('/company-profile/{id}',[companie_controller::class,'companyupdate']);
    
    Route::get('/company-doctor',[doctor_controller::class,'companydoctorindex']);
    Route::get('/company-doctor-appointment', function (){return view('company.doctor-appointment');});
    Route::get('/company-doctor-cancel-appointment', function (){return view('company.doctor-cancel-appointment');});
    
    Route::get('/company-add-manager',[manager_controller::class,'companymanagercreate']);
    Route::post('/company-add-manager',[manager_controller::class,'companymanagerstore']);
    Route::get('/company-manager',[manager_controller::class,'companymanagerindex']);
    Route::get('/company-edit-manager/{id}',[manager_controller::class,'companymanageredit']);
    Route::post('/company-edit-manager/{id}',[manager_controller::class,'companymanagerupdate']);
    Route::get('/company-add-manager/{id}',[manager_controller::class,'companymanagerdestroy']); 
    Route::get('/company-manager-appointment', function (){return view('company.manager-appointment');});
    Route::get('/company-manager-cancel-appointment', function (){return view('company.manager-cancel-appointment');});
    
    Route::get('/company-add-mr',[mr_controller::class,'companymrcreate']);
    Route::post('/company-add-mr',[mr_controller::class,'companymrstore']);
    Route::get('/company-mr',[mr_controller::class,'companymrindex']);
    Route::get('/company-edit-mr/{id}',[mr_controller::class,'companymredit']);
    Route::post('/company-edit-mr/{id}',[mr_controller::class,'companymrupdate']);
    Route::get('/company-add-mr/{id}',[mr_controller::class,'companymrdestroy']); 
    Route::get('/company-mr-appointment', function (){return view('company.mr-appointment');});
    Route::get('/company-mr-cancel-appointment', function (){return view('company.mr-cancel-appointment');});
    
    Route::get('/company-stockiest',[stockiest_controller::class,'companystockiestindex']);
    Route::get('/company-add-stockiest',[stockiest_controller::class,'companystockiescreate']);
    Route::post('/company-add-stockiest',[stockiest_controller::class,'companystockieststore']);

    Route::post('/companyaddmedicine',[doc_fav_medicines_controller::class,'companyaddmedicine']);
    Route::get('/company-medicine-manager',[doc_fav_medicines_controller::class,'companymedicinecreate']);
    Route::get('/companyaddmedicine/{id}',[doc_fav_medicines_controller::class,'companymedicinedelete']);
    
    Route::get('/company-divisions-manager',[doc_fav_medicines_controller::class,'companydivisioncreate']);
    Route::post('/companyadddivision',[doc_fav_medicines_controller::class,'companyadddivision']);
    Route::get('/companyadddivision/{id}',[doc_fav_medicines_controller::class,'companydivisiondelete']);
    
    
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/manager',[manager_controller::class,'login']);
    Route::post('/managerlogin',[manager_controller::class,'managerlogin']);
    Route::get('/managerlogout',[manager_controller::class,'managerlogout']);
    
    Route::get('/manager-dashboard', function (){return view('manager.index');});
    Route::get('/manager-profile',[manager_controller::class,'managerprofile']);
    Route::get('/editmanager{id}',[manager_controller::class,'editmanager']);
    Route::post('/manager-profile/{id}',[manager_controller::class,'managerupdate']);
    
    Route::get('/manager-doctor',[doctor_controller::class,'managerdoctorindex']);
    Route::get('/manager-doctor-appointment', function (){return view('manager.doctor-appointment');});
    Route::get('/manager-doctor-cancel-appointment', function (){return view('manager.doctor-cancel-appointment');});
    
    Route::get('/manager-add-mr',[mr_controller::class,'managermrcreate']);
    Route::post('/manager-add-mr',[mr_controller::class,'managermrstore']);
    Route::get('/manager-mr',[mr_controller::class,'managermrindex']);
    Route::get('/manager-edit-mr/{id}',[mr_controller::class,'managermredit']);
    Route::post('/manager-edit-mr/{id}',[mr_controller::class,'managermrupdate']);
    Route::get('/manager-add-mr/{id}',[mr_controller::class,'managermrdestroy']); 
    Route::get('/manager-mr-appointment', function (){return view('manager.mr-appointment');});
    Route::get('/manager-mr-cancel-appointment', function (){return view('manager.mr-cancel-appointment');});
    
    Route::get('/manager-stockiest',[stockiest_controller::class,'managerstockiestindex']);
    Route::get('/manager-add-stockiest',[stockiest_controller::class,'managerstockiescreate']);
    Route::post('/manager-add-stockiest',[stockiest_controller::class,'managerstockieststore']);

    Route::post('/manageraddmedicine',[doc_fav_medicines_controller::class,'manageraddmedicine']);
    Route::get('/manager-medicine-manager',[doc_fav_medicines_controller::class,'managermedicinecreate']);
    Route::get('/manageraddmedicine/{id}',[doc_fav_medicines_controller::class,'managermedicinedelete']);
    
   
    