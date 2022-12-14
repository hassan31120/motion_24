<?php

use App\Http\Controllers\Admin\LinksController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\FatoorahFatoorah;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyFatoorahController;
use App\Http\Controllers\testt;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/works', [MainController::class, 'videos'])->name('videos');
Route::get('/prices', [MainController::class, 'prices'])->name('prices');

Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function () {
    // Users
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('/user/create', [UsersController::class, 'create'])->name('admin.user.create');
    Route::post('/user/store', [UsersController::class, 'store'])->name('admin.user.store');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit');
    Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
    Route::get('/user/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.user.destroy');

    // Admins
    Route::get('/admins', [UsersController::class, 'Adminindex'])->name('admin.admins');
    Route::get('/admin/create', [UsersController::class, 'Admincreate'])->name('admin.admin.create');
    Route::post('/admin/store', [UsersController::class, 'Adminstore'])->name('admin.admin.store');
    Route::get('/admin/edit/{id}', [UsersController::class, 'Adminedit'])->name('admin.admin.edit');
    Route::post('/admin/update/{id}', [UsersController::class, 'Adminupdate'])->name('admin.admin.update');
    Route::get('/admin/destroy/{id}', [UsersController::class, 'Admindestroy'])->name('admin.admin.destroy');

    // Links
    Route::get('/links', [LinksController::class, 'index'])->name('admin.links');
    Route::get('/link/create', [LinksController::class, 'create'])->name('admin.link.create');
    Route::post('/link/store', [LinksController::class, 'store'])->name('admin.link.store');
    Route::get('/link/edit/{id}', [LinksController::class, 'edit'])->name('admin.link.edit');
    Route::post('/link/update/{id}', [LinksController::class, 'update'])->name('admin.link.update');
    Route::get('/link/destroy/{id}', [LinksController::class, 'destroy'])->name('admin.link.destroy');

    // Partners
    Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partners');
    Route::get('/partner/create', [PartnerController::class, 'create'])->name('admin.partner.create');
    Route::post('/partner/store', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::get('/partner/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::post('/partner/update/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::get('/partner/destroy/{id}', [PartnerController::class, 'destroy'])->name('admin.partner.destroy');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
    Route::get('/setting/edit/{id}', [SettingsController::class, 'edit'])->name('admin.setting.edit');
    Route::post('/setting/update/{id}', [SettingsController::class, 'update'])->name('admin.setting.update');

    // Prices
    Route::get('/prices', [PriceController::class, 'index'])->name('admin.prices');
    Route::get('/price/edit/{id}', [PriceController::class, 'edit'])->name('admin.price.edit');
    Route::post('/price/update/{id}', [PriceController::class, 'update'])->name('admin.price.update');
});


Route::get('/payment/success', [MainController::class, 'successPay'])->name('payment.success');
Route::get('/payment/error', [MainController::class, 'errorPay'])->name('payment.error');

Route::post('/pay', [FatoorahFatoorah::class, 'payOrder'])->name('pay.link');
