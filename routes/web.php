<?php

use Illuminate\Support\Facades\Route;

Route::view('/step1', 'admin.step1');
Route::view('/step2', 'admin.step2');
Route::view('/step3', 'admin.step3');
Route::view('/step4', 'admin.step4');
Route::view('/step5', 'admin.step5');
Route::view('/step6', 'admin.step6');
Route::view('/step7', 'admin.step7');

require __DIR__ . "/vuexy.php";
