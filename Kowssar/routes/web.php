<?php

Route::get('/', 'CashDeskController@home');
//UserController
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//PatientController
Route::get('/ViewPatients', 'PatientController@ViewPatients');
Route::post('/AddPatient', 'PatientController@AddPatient');
Route::get('/remove/{patient}', 'PatientController@removePatient');
//InsuranceController
Route::get('/ViewInsurance', 'InsuranceController@ViewInsurance');
Route::post('/AddInsurance', 'InsuranceController@AddInsurance');
Route::get('/ViewService', 'ServiceController@ViewService');
Route::post('/AddService', 'ServiceController@AddService');
Route::get('/ViewCashDesk', 'CashDeskController@ViewCashDesk');
Route::get('/ViewTableReferralPhysician', 'ReferralPhysicianController@ViewTableReferralPhysician');
Route::get('/ViewAddReferralPhysician/{patient}', 'ReferralPhysicianController@ViewAddReferralPhysician');
Route::patch('/AddReferralPhysician/{patient}', 'ReferralPhysicianController@AddReferralPhysician');
Route::get('/ViewTableDoctorReport', 'DoctorReportController@ViewTableDoctorReport');
Route::get('/ViewAddDoctorReport/{patient}', 'DoctorReportController@ViewAddDoctorReport');
Route::patch('/AddReport/{patient}', 'DoctorReportController@AddReport');
Route::get('/ViewTableMedicalDocuments', 'MedicalDocumentsController@ViewTableMedicalDocuments');
Route::get('/payment/{patient}', 'PaymentController@payment');
Route::get('/ViewUpdatePatient/{patient}', 'PatientController@ViewUpdatePatient');
Route::patch('/UpdatePatient/{patient}', 'PatientController@UpdatePatient');
Route::post('/singup', 'SingUpController@singup');

