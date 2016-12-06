<?php
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('karyawan', 'Jalinmodule\Karyawan\Controllers\KaryawanController@index');
    Route::get('karyawannew', 'Jalinmodule\Karyawan\Controllers\KaryawanController@newkaryawan');
    Route::post('karyawan', 'Jalinmodule\Karyawan\Controllers\KaryawanController@store');
});