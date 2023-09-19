<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Customize web Routes
|--------------------------------------------------------------------------
|
 */


Route::group(['prefix' => 'certification'], function () { 
    Route::get('/', 'App\Admin\Controllers\AdminCertificationsController@index')->name('admin_certification.index');
    // Route::get('create', function () {
    //     return redirect()->route('admin_certification.index');
    // });
//     Route::post('/create', $nameSpaceAdminCertification.'\AdminCertificationsController@postCreate')->name('admin_certification.create');
//     Route::get('/edit/{id}', $nameSpaceAdminCertification.'\AdminCertificationsController@edit')->name('admin_certification.edit');
//     Route::post('/edit/{id}', $nameSpaceAdminCertification.'\AdminCertificationsController@postEdit')->name('admin_certification.edit');
//     Route::post('/delete', $nameSpaceAdminCertification.'\AdminCertificationsController@deleteList')->name('admin_certification.delete');
});
