<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MeterReadingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Customer\CustomerMReadingController;
use App\Http\Controllers\Customers\CustomerController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Auth::routes();
Route::get('/', function () {
    return view('website.home');
});

Route::get('login', function () {
    return redirect()->route('customer.login');
})->name('login');



Route::get('admin-login', [AuthController::class, 'adminLoginView']);
Route::post('admin-login', [AuthController::class, 'userLogin'])->name('admin.login');
Route::get('customer/register', [AuthController::class, 'customerRegisterView'])->name('customer.register');
Route::post('customer/register', [AuthController::class, 'customerRegister'])->name('newcustomer.register');
Route::get('customer/login', [AuthController::class, 'customerLoginView'])->name('customer.login');
Route::post('customer/login', [AuthController::class, 'userLogin'])->name('customer.login');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isadmin']], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('users', UserController::class);
    Route::get('meter-types', [MeterReadingController::class, 'meterTypes'])->name('meter-types');
    Route::get('allocate-meter', [MeterReadingController::class, 'allocateMeterview'])->name('allocate-meter');
    Route::get('allocated-meters', [MeterReadingController::class, 'allocatedMeters'])->name('allocated-meters');
    Route::get('allocated-meter-edit/{id}', [MeterReadingController::class, 'allocatedMetersEditView'])->name('allocated-meter.edit');
    Route::post('update-allocated-meter', [MeterReadingController::class, 'updateAllocatedMeter'])->name('update-allocated-meter');
    Route::post('allocate-meter-to-customer', [MeterReadingController::class, 'allocateMeter'])->name('allocate-meter-to-customer');
    Route::resource('meter-reading', MeterReadingController::class);
    Route::get('account-profile', [UserController::class, 'accountSettings'])->name('admin.setting');
    Route::get('account-password', [UserController::class, 'accountPasswordSettings'])->name('admin.password');
    Route::post('update-users-settings/{id}', [UserController::class, 'updateUserSettings'])->name('users.update.settings');
    Route::post('update-users-passwords/{id}', [UserController::class, 'updateUserPasswords'])->name('users.update.passwords');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'iscustomer']], function () {
    Route::get('profile', [CustomerController::class, 'profile'])->name('profile');
    Route::get('dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::resource('meter-reading', CustomerMReadingController::class);
});
