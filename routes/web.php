<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('contact', [\App\Http\Controllers\ContactController::class,'index']);
Route::post('contact',[\App\Http\Controllers\ContactController::class,'store']);

Route::get('testmail', function () {

    $details = [
        'title' => 'Mail from Kevin sending mail class',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('trevorbliss43@gmail.com')->send(new \App\Mail\Emailsent($details));

    dd("Email is Sent.");
});
