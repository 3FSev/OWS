<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Register
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('superuser.sup-dashboard');
});

// <route for superuser>
Route::get('/superuser/sup-dashboard', [SuperUserController::class, 'Dashboard'])->name('dashboard.sup');
Route::get('/superuser/sup-create-user', [SuperUserController::class, 'CreateUser'])->name('create.sup');
Route::get('/superuser/sup-unverified-user', [SuperUserController::class, 'UnverifiedUser'])->name('unverified.sup');
Route::get('/superuser/sup-user-list', [SuperUserController::class, 'UserList'])->name('userlist.sup');
Route::get('/superuser/sup-manage-department', [SuperUserController::class, 'ManageDepartment'])->name('manageDept.sup');
Route::get('/superuser/sup-manage-districts', [SuperUserController::class, 'ManageDistricts'])->name('manageDist.sup');
Route::get('/superuser/sup-user-activities', [SuperUserController::class, 'UserActivities'])->name('userActivities.sup');
Route::get('/superuser/sup-restore-item', [SuperUserController::class, 'RestoreItem'])->name('restoreItems.sup');
Route::get('/superuser/sup-restore-accounts', [SuperUserController::class, 'RestoreItem'])->name('restoreAccounts.sup');
//</ route for superuser >

// <route for manager>
Route::get('/man-dashboard', function () {
    return view('manager.man-stock-list');
});
Route::get('/manager/man-stock-list', [ManagerController::class, 'StockList'])->name('stockList.man');
Route::get('/manager/man-wiv-req', [ManagerController::class, 'WIVrequest'])->name('WivRequest.man');
    Route::get('/manager/wiv-review', [ManagerController::class, 'WIVreview'])->name('WivReview.man');
Route::get('/manager/man-mrt-req', [ManagerController::class, 'MRTrequest'])->name('MrtRequest.man');
    Route::get('/manager/mrt-review', [ManagerController::class, 'MRTreview'])->name('MrtReview.man');
// </route for manager>

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
