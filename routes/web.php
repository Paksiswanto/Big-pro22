<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use Faker\Guesser\Name;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\EditEmailController;
use App\Http\Controllers\Show_reportController;
use App\Http\Controllers\Show_report2Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CopyTextController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TaxController;
use PhpParser\Node\Stmt\Return_;

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


Route::get('kalender', function () {
    return view('kalender');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('reset_password', function () {
    return view('reset_password');
});
Route::get('confirm_password', function () {
    return view('confirm_password');
});

Route::get('add_company',[CompanyController::class,'add_company'])->name('add_company');
Route::get('add_company/add',[CompanyController::class,'add_company_id'])->name('add_company_id');
Route::get('import', function () {
    return view('import');
});
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index');
Route::get('/add-item',[ItemController::class,'additem'])->Name('item-add');
Route::get('/edit-item/{id}',[ItemController::class,'edititem'])->Name('item-edit');

Route::get('tambah_pemasok', function () {
    return view('pembelian.pembelian_tambah_pemasok');
});
Route::get('edit_pemasok', function () {
    return view('pembelian_edit_pemasok');
});

//supplier
Route::get('supplier', [SupplierController::class, 'supplier'])->name('supplier');
Route::get('add_supplier', [SupplierController::class, 'add'])->name('add_supplier');
Route::get('/edit_supplier/{id}', [SupplierController::class, 'edit'])->name('edit_supplier');
Route::get('details_supplier', [SupplierController::class, 'details'])->name('details_supplier');

Route::get('icons', function () {
    return view('icons');
});

//transactions
Route::get('/transactions', [TransactionsController::class, 'transactions'])->name('transactions');

Route::get('/add_income', [TransactionsController::class, 'add_income'])->name('add_income');
Route::get('/edit_income/{id}', [TransactionsController::class, 'edit_income'])->name('edit_income');
Route::get('/show_income', [TransactionsController::class, 'show_income'])->name('show_income');

Route::get('/add_expenditure', [TransactionsController::class, 'add_expenditure'])->name('add_expenditure');
Route::get('/edit_expenditure/{id}', [TransactionsController::class, 'edit_expenditure'])->name('edit_expenditure');
Route::get('/show_expenditure', [TransactionsController::class, 'show_expenditure'])->name('show_expenditure');
//recurring transactions
Route::get('/recurring_transactions', [TransactionsController::class, 'recurring_transactions'])->name('recurring_transactions');
Route::get('/receipt_transactions', [TransactionsController::class, 'receipt_transactions'])->name('receipt_transactions');
Route::get('/receipt_bill_transactions', [TransactionsController::class, 'receipt_bill_transactions'])->name('receipt_bill_transactions');

Route::get('/add_recurring_income', [TransactionsController::class, 'add_recurring_income'])->name('add_recurring_income');
Route::get('/edit_recurring_income', [TransactionsController::class, 'edit_recurring_income'])->name('edit_recurring_income');
Route::get('/show_recurring_income', [TransactionsController::class, 'show_recurring_income'])->name('show_recurring_income');

Route::get('/add_recurring_expenditure', [TransactionsController::class, 'add_recurring_expenditure'])->name('add_recurring_expenditure');
Route::get('/edit_recurring_expenditure', [TransactionsController::class, 'edit_recurring_expenditure'])->name('edit_recurring_expenditure');
Route::get('/show_recurring_expenditure', [TransactionsController::class, 'show_recurring_expenditure'])->name('show_recurring_expenditure');

//selling
Route::get('invoice', [InvoiceController::class, 'invoice'])->name('invoice');
Route::get('recurring_invoice', [InvoiceController::class, 'recurring_invoice'])->name('recurring_invoice');
Route::get('add_invoice', [InvoiceController::class, 'add_invoice'])->name('add_invoice');
Route::get('add_recurring_invoice', [InvoiceController::class, 'add_recurring_invoice'])->name('add_recurring_invoice');
Route::get('details_recurring', [InvoiceController::class, 'detail_recurring'])->name('details_recurring');
Route::get('details', [InvoiceController::class, 'details'])->name('details_inv');
//cos
Route::get('add_costumers', [CostumersController::class, 'add_cos'])->name('add_costumers');
Route::get('costumer', [CostumersController::class, 'costumers'])->name('costumers');
Route::get('/show_cos/{id}', [CostumersController::class, 'show_cos'])->name('show_cos');
Route::get('/edit_cos/{id}', [CostumersController::class, 'edit_cos'])->name('edit_cos');



Route::get('/setting-invoice',[InvoiceController::class,'setting_invoice'])->name('setting-invoice');

//role
Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::post('add-role-permission',[RoleController::class,'addRolePermission'])->name('addRolePermission');
Route::get('/add_role', [RoleController::class, 'add_role'])->name('add_role');
Route::get('/edit_role/{id}', [RoleController::class, 'edit_role'])->name('edit_role');
Route::put('/edit/{id}', [RoleController::class, 'edit'])->name('edit-role');
Route::get('/delete_role/{id}', [RoleController::class, 'delete_role'])->name('delete_role');

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');

//companyshow_acc
Route::get('/company',[CompanyController::class,'company'])->name('company');
//transfer
Route::get('/transfer', [TransferController::class, 'transfer'])->name('transfer');


Route::get('/add_transfer', [TransferController::class, 'add_transfer'])->name('add_transfer');
Route::get('/edit_transfer', [TransferController::class, 'edit_transfer'])->name('edit_transfer');
Route::get('/show_transfer', [TransferController::class, 'show_transfer'])->name('show_transfer');

//account
Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::get('/add_account', [AccountController::class, 'add_account'])->name('add_account');
Route::get('/edit_account/{id}', [AccountController::class, 'edit_account'])->name('edit_account');
Route::get('/show_account1', [AccountController::class, 'show_account1'])->name('show_account1');
Route::get('/show_account2', [AccountController::class, 'show_account2'])->name('show_account2');

    // return view('pembelian.pembelian_edit_pemasok');



Route::get('/laporan',[LaporanController::class, 'laporan'])->name('laporan');
//category
Route::get('/category',[CategoryController::class,'category_index'])->name('index-category');
Route::get('/add-category',[CategoryController::class,'category_add'])->name('add-category');
Route::get('/edit-category/{id}',[CategoryController::class,'category_edit'])->name('edit-category');

//bill
Route::get('bill', [BillController::class, 'bill'])->name('bill');
Route::get('bill_detail', [BillController::class, 'detail_bill'])->name('detail_bill');
Route::get('recurring_bill', [BillController::class, 'recurring_bill'])->name('recurring_bill');
Route::get('add_recurring_bill', [BillController::class, 'add_recurring_bill' ])->name('add_recurring_bill');
Route::get('add_bill', [BillController::class, 'add_bill'])->name('add_bill');
Route::get('detail_rcr_bill', [BillController::class, 'detail_rcr_bill'])->name('detail_rcr_bill');


//laporan
Route::get('/report',[ReportController::class, 'report'])->name('report');
Route::get('/add_report',[ReportController::class, 'add_report'])->name('add_report');
Route::get('/show_report',[Show_reportController::class, 'show_report'])->name('show_report');
Route::get('/show_report2',[Show_report2Controller::class, 'show_report2'])->name('show_report2');

//calendar
Route::get('/calendar',[CalendarController::class, 'calendar'])->name('calendar');

//EditEmail
Route::get('/editemail',[EditEmailController::class, 'editemail'])->name('editemail');

//cobaaaaaa
Route::get('impor_pembelian', function () {
    return view('pembelian.pembelian_impor_pemasok');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
//Users
Route::get('/users',[UsersController::class,'usersindex'])->name('users-index');
Route::get('/add_users',[UsersController::class,'add_users'])->name('add_users');
Route::Post('/add-user',[UsersController::class,'add_user'])->name('add-user');
Route::get('/edit_users',[UsersController::class,'edit_users'])->name('edit_users');
//Users
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
// Route::get('invoice', )
//Tax
Route::get('/tax',[TaxController::class,'tax_index'])->name('tax');

Route::get('/add-tax',[TaxController::class,'tax_add'])->name('tax-add');
Route::post('/insert_tax',[TaxController::class,'tax_insert'])->name('insert_tax');

Route::get('/edit-tax/{id}',[TaxController::class,'tax_edit'])->name('tax-edit');
Route::post('/update_tax/{id}',[TaxController::class,'tax_update'])->name('update_tax');

Route::get('/delete_tax/{id}',[TaxController::class,'tax_delete'])->name('tax-delete');
//currency
Route::get('/currency',[CurrencyController::class,'currency_index'])->name('currency');
Route::get('/add-currency',[CurrencyController::class,'currency_add'])->name('currency-add');
Route::get('/edit-currency',[CurrencyController::class,'currency_edit'])->name('currency-edit');
//Copy Text
Route::get('copytext', [CopyTextController::class, 'CopyText'])->name('copytext');

require  __DIR__. "/trisqi.php";


require  __DIR__."/reno.php";
require __DIR__."/alfa.php";
require __DIR__. "/gmbs.php";
