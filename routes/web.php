<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\AfterSalesController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TaxController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Settings Routes
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

    // CRM Routes
    Route::resource('customers', CustomerController::class);
    Route::resource('leads', LeadController::class);
    Route::resource('marketings', MarketingController::class);
    Route::resource('after-sales', AfterSalesController::class);

    // Sales Routes
    Route::resource('orders', OrderController::class);
    Route::resource('invoices', InvoiceController::class);

    // Inventory Routes
    Route::resource('products', ProductController::class);
    Route::resource('warehouses', WarehouseController::class);

    // HRM Routes
    Route::resource('employees', EmployeeController::class);
    Route::resource('trainings', TrainingController::class);
    Route::resource('attendances', AttendanceController::class);

    // Accounting Routes
    Route::resource('accounts', AccountController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('taxes', TaxController::class);

    // Reports Routes
    Route::get('/reports/sales', [ReportController::class, 'salesReport'])->name('sales.report');
    Route::get('/reports/inventory', [ReportController::class, 'inventoryReport'])->name('inventory.report');
});

require __DIR__.'/auth.php';