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
  Route::group([
    'namespace' => 'App\Http\Controllers',
   // 'prefix' => 'admin'
], function () {
    Route::get('login', [
        'uses' => 'AuthenticationController@getLogin',
        'as' => 'login'
    ]);
    Route::post('login', [
        'uses' => 'AuthenticationController@postAdminLogin',
        'as' => 'postAdminLogin'
    ]);
    Route::get('signup', [
        'uses' => 'AuthenticationController@signUp',
        'as' => 'signup'
    ]);
    Route::post('signup', [
        'uses' => 'AuthenticationController@postSignUp',
        'as' => 'postSignUp'
    ]);
    Route::get('registration', [
        'uses' => 'AdminController@viewRegistration',
        'as' => 'registration'
    ]);
    Route::get('/', [
        'uses' => 'AdminController@getAdminHome',
        'as' => 'home'
    ]);
    Route::get('/file', 'UploadController@create')-> name('File.create');
    Route::post('/file', 'UploadController@store')-> name('File.store');
    Route::get('/personaldet','personalController@create')->name('Candidate.create');
    Route::post('/personaldet','personalController@store')->name('Candidate.store');
    Route::get('/academicdet','AcademicController@create')->name('Academic.create');
    Route::post('/academicdet','AcademicController@store')->name('Academic.store');
    Route::get('/expdet','ExperienceController@create')->name('Experience.create');
    Route::post('/expdet','ExperienceController@store')->name('Experience.store');
    Route::get('/payment','AuthenticationController@creates')->name('Payment.create');
    Route::post('/payment','AuthenticationController@store')->name('Payment.store');
    Route::get('/application','AuthenticationController@getApplicationForm')->name('getApplicationForm');
    Route::post('/application','AuthenticationController@postApplicationForm')->name('postApplicationForm');
    
    Route::get('/download','AuthenticationController@download')->name('download');
    Route::post('/downloads','AuthenticationController@downloads')->name('downloads');
     
    Route::get('/grievance','GrievanceController@getGrievance')->name('getGrievance');
   // Route::post('/downloads','AuthenticationController@downloads')->name('downloads');
    
    Route::get('/continuous-evaluation','CEandAcademicController@getCE')->name('getCE');
    Route::post('continuous-evaluation','CEandAcademicController@postCE')->name('postCE');
    Route::get('/Academic-activities','CEandAcademicController@getAcademic')->name('getAcademic');
    Route::post('/Academic-activities','CEandAcademicController@postAcademic')->name('postAcademic');
    
   });
Route::group([
    'namespace' => 'App\Http\Controllers',
    //'prefix' => 'admin',
   // 'middleware' => 'auth'
], function () {
    
Route::get('logout', [
        'uses' => 'AuthenticationController@logout',
        'as' => 'adminLogout'
    ]);
   
});
