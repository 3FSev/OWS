<?php

use App\Http\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SuperUserController;
use App\Http\Controllers\NotificationController;

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
    Route::get('sup-change-password', [SuperUserController::class, 'ChangePassword'])->name('ChangePassword.sup');
    Route::get('sup-create-user', [SuperUserController::class, 'CreateUser'])->name('create.sup');
    Route::get('sup-unverified-user', [SuperUserController::class, 'UnverifiedUser'])->name('unverified.sup');
    Route::get('sup-user-list', [SuperUserController::class, 'UserList'])->name('userlist.sup');
    Route::get('sup-edit-user/{user_id}/edit', [SuperUserController::class, 'EditUserList'])->name('EditUserList.sup');
    Route::post('sup-edit-user/{user_id}/update', [SuperUserController::class, 'EditUser'])->name('EditUser.sup');
    Route::get('sup-manage-department', [SuperUserController::class, 'ManageDepartment'])->name('manageDept.sup');
    Route::post('update-department/{id}', [SuperUserController::class, 'updateDepartment'])->name('department.update');
    Route::get('sup-manage-districts', [SuperUserController::class, 'ManageDistricts'])->name('manageDist.sup');
    Route::post('update-district/{id}', [SuperUserController::class, 'updateDistrict'])->name('district.update');
    Route::get('sup-user-activities', [SuperUserController::class, 'UserActivities'])->name('userActivities.sup');
    Route::get('sup-restore-item', [SuperUserController::class, 'RestoreItem'])->name('restoreItems.sup');
    Route::get('sup-restore-accounts', [SuperUserController::class, 'RestoreAccounts'])->name('restoreAccounts.sup');

    Route::get('sup-create-user{user_id}/approve', [SuperUserController::class, 'approve'])->name('approve.user');
    Route::get('sup-restore-account/{user_id}/restore', [SuperUserController::class, 'restore'])->name('restore.user');
    Route::get('sup-restore-item/{item_id}/restore', [SuperUserController::class, 'restore_item'])->name('restore.user');
    Route::get('sup-get-user/{user_id}', [SuperUserController::class, 'getUserData'])->name('get.user.data');


    Route::delete('sup-create-user/{user_id}/destroy', [SuperUserController::class, 'destroy'])->name('destroy.user');
    Route::delete('sup-department/{department_id}/destroy', [SuperUserController::class, 'destroyDepartment'])->name('destroy.department');
    Route::delete('sup-district/{district_id}/destroy', [SuperUserController::class, 'destroyDistrict'])->name('destroy.district');


    Route::post('sup-create-user', [SuperUserController::class, 'store'])->name('superuser.create.user');
    Route::post('sup-create-department', [SuperUserController::class, 'storeDepartment'])->name('superuser.create.department');
    Route::post('sup-create-district', [SuperUserController::class, 'storeDistrict'])->name('superuser.create.district');
});

// <route for manager>
Route::middleware(['auth','manager'])->group(function(){
    Route::get('/manager/man-stock-list', [ManagerController::class, 'StockList'])->name('stockList.man');
    Route::get('/manager/man-item-history', [ManagerController::class, 'ItemHistory'])->name('ItemHistory.man');
    Route::get('/manager/man-edit-items', [ManagerController::class, 'EditItem'])->name('EditItem.man');
    Route::get('/manager/man-wiv-req', [ManagerController::class, 'WIVrequest'])->name('WivRequest.man');
    Route::get('/manager/wiv-review/{wiv_id}', [ManagerController::class, 'WIVreview'])->name('WivReview.man');
    Route::get('/manager/man-mrt-req', [ManagerController::class, 'MRTrequest'])->name('MrtRequest.man');
    Route::get('/manager/mrt-review/{mrt_id}', [ManagerController::class, 'MRTreview'])->name('MrtReview.man');
    Route::get('/manager/mrt-approve/{mrt_id}', [ManagerController::class, 'MRTApprove'])->name('MrtApprove.man');
    Route::get('/manager/mrt-reject/{mrt_id}', [ManagerController::class, 'MRTreject'])->name('MrtReject.man');
    Route::get('/manager/man-rr-req', [ManagerController::class, 'RRrequest'])->name('RRrequest.man');
    Route::get('/manager/man-rr-review/{rr_id}', [ManagerController::class, 'RR_review'])->name('RRreview.man');
    Route::get('/manager/man-acc-settings', [ManagerController::class, 'AccountSettings'])->name('AccSetting.man');   
    Route::get('/manager/man-change-pswd', [ManagerController::class, 'ChangePassword'])->name('ChangePswd.man');   
    Route::get('/manager/wiv-approve/{wiv_id}', [ManagerController::class, 'WIVapprove'])->name('WivApprove.man');
    Route::get('/manager/wiv-reject/{wiv_id}', [ManagerController::class, 'WIVreject'])->name('WivReject.man');
    Route::get('/manager/rr-approve/{rr_id}', [ManagerController::class, 'RRapprove'])->name('RrApprove.man');
    Route::get('/manager/rr-reject/{rr_id}', [ManagerController::class, 'RRreject'])->name('RrReject.man');
});

// <route for employee>
Route::middleware(['approved','auth','employee'])->group(function(){
    Route::get('/employee/em-pending-wiv', [EmployeeController::class, 'PendingWIV'])->name('PendingWiv.em');
    Route::get('/employee/em-change-password', [EmployeeController::class, 'ChangePassword'])->name('ChangePassword.em');
    Route::get('/employee/accept-wiv/{wiv_id}', [EmployeeController::class, 'AcceptWIV'])->name('AcceptWiv.em');
    Route::get('/employee/em-pending-mrt', [EmployeeController::class, 'PendingRIV'])->name('PendingRiv.em');   
    Route::get('/employee/em-list', [EmployeeController::class, 'ListView'])->name('ListView.em');
    Route::get('/employee/em-item-req', [EmployeeController::class, 'ItemRequest'])->name('ItemReq.em');   
    Route::get('/employee/em-return-item-req', [EmployeeController::class, 'ReturnItemReq'])->name('ReturnItemReq.em');
    Route::post('/employee/send-item-req', [EmployeeController::class, 'sendReqItem'])->name('em.request.item');
    Route::post('/employee/send-return-req', [EmployeeController::class, 'sendReqReturn'])->name('em.request.return');
});

// <route for Admin>
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/adm-dashboard', function () {
        return view('admin.adm-dashboard');
    });
    Route::get('/admin/adm-dashboard', [AdminController::class, 'Dashboard'])->name('Dashboard.adm');
    Route::get('/admin/adm-change-password', [AdminController::class, 'ChangePassword'])->name('ChangePassword.adm');   
    Route::get('/admin/adm-employee', [AdminController::class, 'Employee'])->name('Employee.adm');
    Route::get('/admin/adm-accountable-items/{user_id}', [AdminController::class, 'AccountableItems'])->name('AccountableItems.adm');
    Route::get('/admin/adm-create-rr', [AdminController::class, 'CreateRR'])->name('CreateRR.adm');
    Route::get('/admin/adm-rr-list', [AdminController::class, 'RRList'])->name('RRList.adm');
    Route::get('/admin/adm-rr-edit-list', [AdminController::class, 'EditRRList'])->name('EditRRList.adm');
    Route::get('/admin/adm-create-items-categories', [AdminController::class, 'CreateItemCategories'])->name('CreateItemCategories.adm');
    Route::get('/admin/adm-item-list', [AdminController::class, 'ItemList'])->name('ItemList.adm');
    Route::get('/admin/adm-item-history/{item_id}', [AdminController::class, 'ItemHistory'])->name('ItemHistory.adm');
    Route::get('/admin/adm-edit-item-list/{item_id}', [AdminController::class, 'EditItemList'])->name('EditItemList.adm');
    Route::get('/admin/adm-create-wiv', [AdminController::class, 'CreateWIV'])->name('CreateWIV.adm');
    Route::get('/admin/adm-wiv-list', [AdminController::class, 'WIVList'])->name('WIVList.adm');
    Route::get('/admin/adm-create-mrt', [AdminController::class, 'CreateMRT'])->name('CreateMRT.adm');
    Route::get('/get-items-for-user/{user}', [AdminController::class, 'getItemsForUser']);
    Route::get('/admin/adm-mrt-list', [AdminController::class, 'MRTList'])->name('MRTList.adm');
    Route::get('/admin/adm-item-request', [AdminController::class, 'ItemRequest'])->name('ItemRequest.adm');
    Route::get('/admin/adm-return-item-req', [AdminController::class, 'ReturnItemRequest'])->name('ReturnItemRequest.adm');
    Route::get('/admin/adm-review-return-item-req', [AdminController::class, 'ReviewReturnItemRequest'])->name('ReviewReturnItemRequest.adm');
    Route::get('/admin/adm-WIV-reports', [AdminController::class, 'WIVReports'])->name('WIVReports.adm');
    Route::get('/admin/adm-MRT-reports', [AdminController::class, 'MRTReports'])->name('MRTReports.adm');
    Route::get('/admin/adm-RR-reports', [AdminController::class, 'RRReports'])->name('RRReports.adm');
    Route::get('/get-rr-data/{item_id}', [AdminController::class, 'getRRData'])->name('get-rr-data');

    Route::post('admin-create-rr', [AdminController::class, 'storeRR'])->name('admin.create.rr');
    Route::post('admin-create-wiv', [AdminController::class, 'storeWIV'])->name('admin.create.wiv');
    Route::post('admin-create-mrt', [AdminController::class, 'storeMRT'])->name('admin.create.mrt');
    Route::post('/admin/adm-update-item/{item_id}', [AdminController::class, 'UpdateItem'])->name('UpdateItem.adm');

    Route::get('/generate-barcode/{item_id}', [AdminController::class, 'generateBarcode'])->name('generate.barcode');

    Route::delete('/admin/adm-item-list/{item_id}/destroy', [SuperUserController::class, 'destroy'])->name('destroy.item');
});

Route::middleware(['auth'])->group(function(){
    Route::post('/update-password', [ChangePasswordController::class, 'updatePassword'])->name('change.acc.pass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return Redirect::to('login');
});

Route::get('/notifications', [NotificationController::class, 'index']);
Route::get('/notifications/{id}/mark-as-read', [NotificationController::class, 'markAsRead']);