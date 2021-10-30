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
Route::get('/config', [\App\Http\Controllers\Config\ConfigController::class, 'index']);
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::middleware(['auth', 'PreventBackHistory'])->group(function (){
        Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
        Route::get('/home', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
        Route::get('/profile/change-password', [App\Http\Controllers\Profile\ProfileController::class, 'change_password'])->name('change_password');
        Route::post('/profile/update-password', [App\Http\Controllers\Profile\ProfileController::class, 'update_password'])->name('update_password');

    });
    Route::middleware(['guest', 'PreventBackHistory'])->group(function (){
        Route::get('/', [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login_process', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login_process');
        Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register_process', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register_process');
    });



    Route::group(['middleware'=>['auth', 'PreventBackHistory']], function (){
        Route::resource('student', \App\Http\Controllers\Student\StudentController::class);
        Route::post('/getState', [\App\Http\Controllers\Student\StudentController::class, 'get_by_region'])->name('get_by_region');
        Route::post('/getProfession', [\App\Http\Controllers\Student\StudentController::class, 'get_by_profession'])->name('get_by_profession');
        Route::post('/getSpecialization', [\App\Http\Controllers\Student\StudentController::class, 'get_by_specialization'])->name('get_by_specialization');
        Route::post('/getDegree', [\App\Http\Controllers\Student\StudentController::class, 'get_by_degree'])->name('get_by_degree');
        Route::post('/getDegreeProf', [\App\Http\Controllers\Student\StudentController::class, 'get_by_degree_profession'])->name('get_by_degree_profession');
        Route::post('/getStudyForm', [\App\Http\Controllers\Student\StudentController::class, 'get_by_studyform'])->name('get_by_studyform');
        Route::post('/getPaymentForm', [\App\Http\Controllers\Student\StudentController::class, 'get_by_paymentform'])->name('get_by_paymentform');
        Route::post('/getGosorgan', [\App\Http\Controllers\Student\StudentController::class, 'get_by_gosorgan'])->name('get_by_gosorgan');
        //Route::post('/getGosorganKvota', [\App\Http\Controllers\Student\StudentController::class, 'get_by_gosorgan_kvota'])->name('get_by_gosorgan_kvota');
        Route::post('/getGosorganWork', [\App\Http\Controllers\Student\StudentController::class, 'get_by_gosorgan_work'])->name('get_by_gosorgan_work');
        Route::post('/getByEducationAdmission', [\App\Http\Controllers\Student\StudentController::class, 'get_by_education_admission'])->name('get_by_education_admission');
        Route::post('/getByGenderS', [\App\Http\Controllers\Student\StudentController::class, 'get_by_gender'])->name('get_by_gender_s');

        Route::resource('profession', \App\Http\Controllers\References\ProfessionController::class);
    });

    Route::group(['middleware'=>['auth','role:admin','PreventBackHistory']], function (){

    });
    Route::group([
        'middleware'=>['auth','role:super-admin','PreventBackHistory']], function (){
        Route::resource('role', \App\Http\Controllers\Admin\RoleController::class);
        Route::resource('permission', \App\Http\Controllers\Admin\PermissionController::class);
    });
    Route::group([
        'middleware'=>['auth','role:super-admin|admin','PreventBackHistory']], function (){
        Route::resource('employee', \App\Http\Controllers\Admin\EmployeeController::class);
        Route::post('/getByGender', [\App\Http\Controllers\Admin\EmployeeController::class, 'get_by_gender'])->name('get_by_gender');
        Route::post('/getByRegion', [\App\Http\Controllers\Admin\EmployeeController::class, 'get_by_region'])->name('get_by_region');
    });

});
