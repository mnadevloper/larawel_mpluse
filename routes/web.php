<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register', [AuthController::class, 'loadRegisterPage'])->name('auth.registerpage');
Route::post('sign-up', [AuthController::class, 'userSignUp'])->name('auth.sign-up');

Route::get('login', [AuthController::class, 'loadLoginPage'])->name('auth.loginpage');
Route::post('sign-in', [AuthController::class, 'userSignIn'])->name('auth.sign-in');

Route::get('/verify-email/{token}', [VerificationController::class, 'verify'])->name('verify.email');
Route::get('/reverify-email', [VerificationController::class, 'showReverifyForm'])->name('reverify.email');
Route::post('/reverify_email', [VerificationController::class, 'resendEmailVerifyLink'])->name('reverify.send');

Route::middleware(['PreventBackHistory', 'LoginCheck'])->group(function () {

    Route::get('sign-out', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/', [AdminController::class, 'index'])->name('auth.index');

    Route::middleware(['AuthAdmin'])->prefix('admin')->group(function () {
        Route::get('user-list', [AdminController::class, 'loadUserList'])->name('auth.userlist');
        Route::post('update-user-status', [AdminController::class, 'updateUserStatus'])->name('auth.updatestatus');
        Route::delete('remove-user', [AdminController::class, 'removeUser'])->name('auth.remove_user');
        Route::get('edit-user/{id}', [AdminController::class, 'editUser'])->name('auth.edit_user');
        Route::post('update-user/{id}', [AdminController::class, 'updateUser'])->name('auth.update_user');
        Route::get('admin-login', [AdminController::class, 'loadAdminLoginView'])->name('auth.login');
        Route::get('ip-masters', [AdminController::class, 'getIPMaster'])->name('auth.ip_master');
        Route::get('manage-services', [AdminController::class, 'manageServices'])->name('auth.manage_service');
        Route::get('user-payouts', [AdminController::class, 'getUserPayout'])->name('auth.payout');
        Route::get('user-upi-payouts', [AdminController::class, 'getUPIPayout'])->name('auth.upi_payout');
        Route::get('dmt-reports', [AdminController::class, 'getDMTReport'])->name('auth.dmt_report');
        Route::get('user-ledger-reports', [AdminController::class, 'getLedger'])->name('auth.ledger_report');
        Route::get('user-invoice', [AdminController::class, 'getInvoice'])->name('auth.invoice');
        Route::get('api-keys', [AdminController::class, 'getApiKey'])->name('auth.api_key');
        Route::get('get-user-kyc/{id}',[AdminController::class, 'getUserKyc'])->name('get_userkyc');
        Route::post('update-kyc-status',[AdminController::class, 'updateKycStatus'])->name('update_kyc_status');

    });


    Route::get('my-profile', [ProfileController::class, 'loadProfileView'])->name('auth.my-profile');
    Route::get('change-password', [ProfileController::class, 'loadChangePassword'])->name('auth.change-password');
    Route::get('change-mpin', [ProfileController::class, 'loadChangeMpin'])->name('auth.change-mpin');

    Route::post('generate_apikey', [AuthController::class, 'generateApiKey'])->name('auth.generate_apikey');

    Route::get('user-kyc', [UserController::class, 'loadKycForm'])->name('auth.user_kyc');
    Route::post('create-kyc', [UserController::class, 'createKyc'])->name('auth.create_kyc');
    // Route::get('user-kycold',function () {
    //     return view('user.kyc_form');
    // });
    Route::get('get-payout', [UserController::class, 'getPayout'])->name('user.payout');
    Route::get('upi-payout', [UserController::class, 'getUpiPayout'])->name('user.upi_payout');
    Route::get('get-ledger', [UserController::class, 'getLedgerReport'])->name('user.ledger_report');
    Route::get('get-invoice', [UserController::class, 'getInvoice'])->name('user.invoice');


    Route::get('get-district', [UserController::class, 'getDistrict'])->name('auth.district');
    Route::get('get-city', [UserController::class, 'getCity'])->name('auth.city');
});

Route::get('page-error-403', [AuthController::class, 'permissionPageError'])->name('error.permission');
