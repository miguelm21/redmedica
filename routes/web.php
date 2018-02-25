<?php

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

Route::get('/', function () {
    return redirect()->route('home');
});

route::get('home','homeController@home')->name('home');
route::resource('user','userController');
route::resource('medico','medicoController');
route::resource('medicalCenter','medicalCenterController');
route::get('confirm/MedicalCenter/{id}/{code}','medicalCenterController@confirmMedicalCenter')->name('confirmMedicalCenter');
route::get('confirm/medico/{id}/{code}','medicoController@confirmMedico')->name('confirmMedico');

route::get('confirm/medico/{id}','medicoController@successRegMedico')->name('successRegMedico');

route::get('confirm/MedicalCenter/{id}','medicalCenterController@successRegMedicalCenter')->name('successRegMedicalCenter');

route::post('resend/mail/confirmation','medicoController@resendMailMedicoConfirm')->name('resendMailMedicoConfirm');

route::post('list/resutl','homeController@tolist')->name('tolist');

route::post('login2','Auth\LoginController@login2')->name('login2');

route::post('logout','Auth\LoginController@logout')->name('logout');

route::get('medical/centers/list','medicalCenterController@MedicalCenterList')->name('MedicalCenterList');
route::get('medicos/list','medicoController@medicosList')->name('medicosList');
