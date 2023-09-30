<?php

use App\Http\Controllers\EmployeeController;
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
    Route::get('sup-restore-accounts', [SuperUserController::class, 'RestoreItem'])->name('restoreAccounts.sup');
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
Route::get('/manager/man-acc-settings', [ManagerController::class, 'AccountSettings'])->name('AccSetting.man');   
Route::get('/manager/man-change-pswd', [ManagerController::class, 'ChangePassword'])->name('ChangePswd.man');   
// </route for manager>

// <route for employee>
Route::get('/em-pending-wiv', function () {
    return view('employee.em-pending-wiv');
});
Route::get('/employee/em-pending-wiv', [EmployeeController::class, 'PendingWIV'])->name('PendingWiv.em');   
Route::get('/employee/em-pending-mrt', [EmployeeController::class, 'PendingRIV'])->name('PendingRiv.em');   
Route::get('/employee/em-list', [EmployeeController::class, 'ListView'])->name('ListView.em');
Route::get('/employee/em-item-req', [EmployeeController::class, 'ItemRequest'])->name('ItemReq.em');   
Route::get('/employee/em-return-item-req', [EmployeeController::class, 'ReturnItemReq'])->name('ReturnItemReq.em');   

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
