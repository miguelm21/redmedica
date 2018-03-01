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

route::get('/', function () {
    return redirect()->route('home');
});

route::get('home','homeController@home')->name('home');
route::resource('user','userController');
route::resource('medico','medicoController');
route::resource('medicalCenter','medicalCenterController');
route::get('confirm/MedicalCenter/{id}/{code}','medicalCenterController@confirmMedicalCenter')->name('confirmMedicalCenter');
route::get('confirm/medico/{id}/{code}','medicoController@confirmMedico')->name('confirmMedico');

route::get('confirm/medico/{id}','medicoController@successRegMedico')->name('successRegMedico');
route::get('confirm/assistant/{id}','assistantController@successRegAssistant')->name('successRegAssistant');

route::get('confirm/MedicalCenter/{id}','medicalCenterController@successRegMedicalCenter')->name('successRegMedicalCenter');

route::post('resend/mail/confirmation','medicoController@resendMailMedicoConfirm')->name('resendMailMedicoConfirm');

route::post('list/result','homeController@tolist')->name('tolist');

route::post('login2','Auth\LoginController@login2')->name('login2');

route::post('logout','Auth\LoginController@logout')->name('logout');

route::get('medical/centers/list','medicalCenterController@MedicalCenterList')->name('MedicalCenterList');
route::get('medicos/list','medicoController@medicosList')->name('medicosList');

route::resource('specialty_categories','specialtyCategoriesController');
route::resource('specialty','specialtyController');
route::resource('assistant','assistantController');
route::resource('administrators','administratorsController');
route::resource('plans','plansController');

route::get('cities/{id}/administrator','administratorsController@citiesAdmin')->name('citiesAdmin');
route::post('cities/administrator/store','administratorsController@citiesAdminStore')->name('citiesAdminStore');
route::get('delete/city/{id}/administrator','administratorsController@deleteCityAdmin')->name('deleteCityAdmin');


route::get('confirm/assistant/{id}/{code}','assistantController@confirmAssistant')->name('confirmAssistant');

route::get('confirm/assistant/{id}/{code}','assistantController@confirmAssistant')->name('confirmAssistant');
route::get('register/assistant/{id}/step4','assistantController@AvisoConfirmAccountAssistant')->name('AvisoConfirmAccountAssistant');

route::resource('permissionSet','permissionSetController');
route::get('permission/admin/{id}','permissionSetController@listPermissionSet')->name('listPermissionSet');
route::get('permission/{id}/set/admin/','permissionSetController@PermissionSet')->name('PermissionSet');

route::get('permissions/{id}/store/{id2}/','PermissionSetController@PermissionSetStore')->name('PermissionSetStore');

route::get('edit/price/{id}/plan','permissionSetController@PermissionSet')->name('editPrice');
