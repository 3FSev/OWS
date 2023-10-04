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

// <route for superuser>
Route::middleware(['auth','superuser'])->group(function(){
    Route::get('sup-dashboard', [SuperUserController::class, 'Dashboard'])->name('dashboard.sup');
    Route::get('sup-create-user', [SuperUserController::class, 'CreateUser'])->name('create.sup');
    Route::get('sup-unverified-user', [SuperUserController::class, 'UnverifiedUser'])->name('unverified.sup');
    Route::get('sup-user-list', [SuperUserController::class, 'UserList'])->name('userlist.sup');
    Route::get('sup-manage-department', [SuperUserController::class, 'ManageDepartment'])->name('manageDept.sup');
    Route::get('sup-manage-districts', [SuperUserController::class, 'ManageDistricts'])->name('manageDist.sup');
    Route::get('sup-user-activities', [SuperUserController::class, 'UserActivities'])->name('userActivities.sup');
    Route::get('sup-restore-item', [SuperUserController::class, 'RestoreItem'])->name('restoreItems.sup');
    Route::get('sup-restore-accounts', [SuperUserController::class, 'RestoreAccounts'])->name('restoreAccounts.sup');

    Route::get('sup-unverified-user/{user_id}/approve', [SuperUserController::class, 'approve'])->name('approve.user');
    Route::get('sup-restore-account/{user_id}/restore', [SuperUserController::class, 'restore'])->name('restore.user');
    Route::get('sup-restore-item/{item_id}/restore', [SuperUserController::class, 'restore_item'])->name('restore.user');
    Route::get('sup-get-user/{user_id}', [SuperUserController::class, 'getUserData'])->name('get.user.data');


    Route::delete('sup-unverified-user/{user_id}/destroy', [SuperUserController::class, 'destroy'])->name('destroy.user');

    Route::post('sup-create-user', [SuperUserController::class, 'store'])->name('superuser.create.user');
});

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
