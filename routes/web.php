<?php

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


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('superuser.sup-dashboard');
});

Route::get('/superuser/sup-dashboard', [SuperUserController::class, 'Dashboard'])->name('dashboard.sup');
Route::get('/superuser/sup-create-user', [SuperUserController::class, 'CreateUser'])->name('create.sup');
Route::get('/superuser/sup-unverified-user', [SuperUserController::class, 'UnverifiedUser'])->name('unverified.sup');
Route::get('/superuser/sup-user-list', [SuperUserController::class, 'UserList'])->name('userlist.sup');
Route::get('/superuser/sup-manage-department', [SuperUserController::class, 'ManageDepartment'])->name('manageDept.sup');
Route::get('/superuser/sup-manage-districts', [SuperUserController::class, 'ManageDistricts'])->name('manageDist.sup');
Route::get('/superuser/sup-user-activities', [SuperUserController::class, 'UserActivities'])->name('userActivities.sup');
Route::get('/superuser/sup-restore-item', [SuperUserController::class, 'RestoreItem'])->name('restoreItems.sup');
Route::get('/superuser/sup-restore-accounts', [SuperUserController::class, 'RestoreItem'])->name('restoreAccounts.sup');

