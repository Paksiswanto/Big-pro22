<?php

use Faker\Guesser\Name;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaxController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CopyTextController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditEmailController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Show_reportController;
use App\Http\Controllers\Show_report2Controller;
use App\Http\Controllers\TransactionsController;
use App\Models\Transfer;

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

Route::middleware(['auth','auth.session', 'verified'])->group(function () {

    Route::get('supplier', [SupplierController::class, 'supplier'])->name('supplier')->middleware('permission:View_Supplier');
    Route::get('costumer', [CostumersController::class, 'costumers'])->name('costumers')->middleware('permission:View_Customer');;

    Route::get('/add_income', [TransactionsController::class, 'add_income'])->name('add_income')->middleware('permission:add_income');

    Route::get('/add_expenditure', [TransactionsController::class, 'add_expenditure'])->name('add_expenditure');


    Route::get('/add_income', [TransactionsController::class, 'add_income'])->name('add_income')->middleware('permission:add_income');

});



Route::get('kalender', function () {
    return view('kalender');
});




Route::get('reset_password', function () {
    return view('auth.reset_password');
});
Route::get('confirm_password', function () {
    return view('confirm_password');
});

Route::get('add_company',[CompanyController::class,'add_company'])->name('add_company')->middleware('permission:Create_Company');
Route::post('add_company/add',[CompanyController::class,'add_company_id'])->name('add_company_id');
Route::get('import', function () {
    return view('import');
});
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index');
Route::get('/add-item',[ItemController::class,'additem'])->Name('item-add');
Route::get('/edit-item/{id}',[ItemController::class,'edititem'])->Name('item-edit');
Route::get('/get-item-data/{id}', [ItemController::class, 'getItemData'])->name('get.item.data');
Route::get('/get-items-data', [InvoiceController::class,'getAllItems'])->name('get-all-items');
Route::get('/get-tax-data', [InvoiceController::class,'getAllTaxes'])->name('get-all-tax');
Route::get('/itemindex',[ItemController::class,'itemindex'])->Name('item-index')->middleware('permission:View_Item');
Route::get('/add-item',[ItemController::class,'additem'])->Name('item-add')->middleware('permission:Create_Item');
Route::get('/edit-item/{id}',[ItemController::class,'edititem'])->Name('item-edit')->middleware('permission:Edit_Item');
Route::get('/get-items-data', [InvoiceController::class,'getItemsData'])->name('get-all-items');
Route::get('/get-items-data', [InvoiceController::class,'getItemsData'])->name('get-all-items');
Route::get('/get-item/{id}', [InvoiceController::class,'getItem'])->name('get-items');
Route::get('/get-tax-data', [InvoiceController::class,'getTaxData'])->name('get-tax-data');
Route::get('/get-item-data/{id}', [InvoiceController::class, 'getItemData'])->name('get-item-data');


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
Route::get('details_supplier/{id}', [SupplierController::class, 'details'])->name('details_supplier');

Route::get('add_supplier', [SupplierController::class, 'add'])->name('add_supplier')->middleware('permission:Create_Supplier');
Route::get('/edit_supplier/{id}', [SupplierController::class, 'edit'])->name('edit_supplier')->middleware('permission:Edit_Supplier');
Route::get('details_supplier', [SupplierController::class, 'details'])->name('details_supplier')->middleware('permission:View_Supplier');

Route::get('icons', function () {
    return view('icons');
});

//transactions
Route::get('/transactions', [TransactionsController::class, 'transactions'])->name('transactions')->middleware('permission:View_Transaction');

Route::get('/add_income', [TransactionsController::class, 'add_income'])->name('add_income');
Route::get('/edit_income/{id}', [TransactionsController::class, 'edit_income'])->name('edit_income');
Route::get('/show_income', [TransactionsController::class, 'show_income'])->name('show_income');

Route::get('/edit_expenditure/{id}', [TransactionsController::class, 'edit_expenditure'])->name('edit_expenditure');
Route::get('/show_expenditure', [TransactionsController::class, 'show_expenditure'])->name('show_expenditure');
Route::get('/edit_income/{id}', [TransactionsController::class, 'edit_income'])->name('edit_income')->middleware('permission:Edit_Transaction_Income');
Route::get('/show_income', [TransactionsController::class, 'show_income'])->name('show_income')->middleware('permission:View_Transaction_Income');

Route::get('/add_expenditure', [TransactionsController::class, 'add_expenditure'])->name('add_expenditure')->middleware('permission:Create_Transaction_Expenses');
Route::get('/edit_expenditure/{id}', [TransactionsController::class, 'edit_expenditure'])->name('edit_expenditure')->middleware('permission:Edit_Transaction_Expenses');
Route::get('/show_expenditure', [TransactionsController::class, 'show_expenditure'])->name('show_expenditure')->middleware('permission:View_Transaction_Expenses');

//recurring transactions
Route::get('/recurring_transactions', [TransactionsController::class, 'recurring_transactions'])->name('recurring_transactions');
Route::get('/receipt_transactions', [TransactionsController::class, 'receipt_transactions'])->name('receipt_transactions');
Route::get('/receipt_bill_transactions', [TransactionsController::class, 'receipt_bill_transactions'])->name('receipt_bill_transactions');

Route::get('/add_recurring_income', [TransactionsController::class, 'add_recurring_income'])->name('add_recurring_income');
Route::get('/edit_recurring_income/{id}', [TransactionsController::class, 'edit_recurring_income'])->name('edit_recurring_income');
Route::get('/show_recurring_income', [TransactionsController::class, 'show_recurring_income'])->name('show_recurring_income');

Route::get('/add_recurring_expenditure', [TransactionsController::class, 'add_recurring_expenditure'])->name('add_recurring_expenditure');
Route::get('/edit_recurring_expenditure/{id}', [TransactionsController::class, 'edit_recurring_expenditure'])->name('edit_recurring_expenditure');
Route::get('/show_recurring_expenditure', [TransactionsController::class, 'show_recurring_expenditure'])->name('show_recurring_expenditure');

//selling
Route::get('invoice', [InvoiceController::class, 'invoice'])->name('invoice')->middleware('permission:View_Invoice');
Route::get('recurring_invoice', [InvoiceController::class, 'recurring_invoice'])->name('recurring_invoice');
Route::get('add_invoice', [InvoiceController::class, 'addInvoice'])->name('add_invoice')->middleware('permission:Create_Invoice');
Route::get('add_recurring_invoice', [InvoiceController::class, 'add_recurring_invoice'])->name('add_recurring_invoice');
Route::get('details_recurring', [InvoiceController::class, 'detail_recurring'])->name('details_recurring');
Route::get('details', [InvoiceController::class, 'details'])->name('details_inv')->middleware('permission:View_Invoice');
Route::get('details/{id}', [InvoiceController::class, 'details'])->name('details_inv');
Route::get('showInvoice/{id}', [InvoiceController::class, 'showInvoice'])->name('showInvoice');
Route::put('editInvoice/{id}', [InvoiceController::class, 'editInvoice'])->name('editInvoice');
Route::post('deleteInvoice/{id}', [InvoiceController::class, 'deleteInvoice'])->name('deleteInvoice');
//cos
Route::get('add_costumers', [CostumersController::class, 'add_cos'])->name('add_costumers');
Route::get('costumer', [CostumersController::class, 'costumers'])->name('costumers');
Route::get('/show_cos/{id}', [CostumersController::class, 'show_cos'])->name('show_cos');
Route::get('/edit_cos/{id}', [CostumersController::class, 'edit_cos'])->name('edit_cos');
Route::get('add_costumers', [CostumersController::class, 'add_cos'])->name('add_costumers')->middleware('permission:Create_Customer');
Route::get('/show_cos/{id}', [CostumersController::class, 'show_cos'])->name('show_cos')->middleware('permission:View_Customer');
Route::get('/edit_cos/{id}', [CostumersController::class, 'edit_cos'])->name('edit_cos')->middleware('permission:Edit_Customer');



Route::get('/setting-invoice',[InvoiceController::class,'setting_invoice'])->name('setting-invoice')->middleware('permission:View_Invoice_setting');

//role
Route::get('/role', [RoleController::class, 'index'])->name('role')->middleware('permission:View_Role');
Route::post('add-role-permission',[RoleController::class,'addRolePermission'])->name('addRolePermission');
Route::get('/add_role', [RoleController::class, 'add_role'])->name('add_role')->middleware('permission:Create_Role');
Route::get('/edit_role/{id}', [RoleController::class, 'edit_role'])->name('edit_role')->middleware('permission:Edit_Role');
Route::put('/edit/{id}', [RoleController::class, 'edit'])->name('edit-role');
Route::get('/delete_role/{id}', [RoleController::class, 'delete_role'])->name('delete_role')->middleware('permission:Delete_Role');

//transaksi
Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');

//companyshow_acc
Route::get('/company',[CompanyController::class,'company'])->name('company')->middleware('permission:View_Company_general');
//transfer
Route::get('/transfer', [TransferController::class, 'transfer'])->name('transfer')->middleware('permission:View_Transfer');
Route::post('insert_transfer',[TransferController::class,'insertTransfer'])->name('insertTransfer');

Route::get('/add_transfer', [TransferController::class, 'add_transfer'])->name('add_transfer')->middleware('permission:Create_Transfer');
Route::get('/edit_transfer/{id}', [TransferController::class, 'edit_transfer'])->name('edit_transfer')->middleware('permission:Edit_Transfer');
Route::get('/show_transfer/{id}', [TransferController::class, 'show_transfer'])->name('show_transfer')->middleware('permission:View_Transfer');
Route::put('/updateTransfer/{id}',[TransferController::class,'updateTransfer'])->name('updateTransfer');
Route::post('/deleteTransfer/{id}',[TransferController::class,'deleteTransfer'])->name('deleteTransfer')->middleware('permission:Delete_Transfer');
//account
Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('permission:View_Account');

Route::get('/add_account', [AccountController::class, 'add_account'])->name('add_account')->middleware('permission:Create_Account');
Route::get('/edit_account/{id}', [AccountController::class, 'edit_account'])->name('edit_account')->middleware('permission:Edit_Account');
Route::get('/show_account/{id}', [AccountController::class, 'show_account'])->name('show_account')->middleware('permission:View_Account');
Route::get('/show_account2', [AccountController::class, 'show_account2'])->name('show_account2');

    // return view('pembelian.pembelian_edit_pemasok');



Route::get('/laporan',[LaporanController::class, 'laporan'])->name('laporan');
//category
Route::get('/category',[CategoryController::class,'category_index'])->name('index-category')->middleware('permission:View_Category');
Route::get('/add-category',[CategoryController::class,'category_add'])->name('add-category')->middleware('permission:Create_Category');
Route::get('/edit-category/{id}',[CategoryController::class,'category_edit'])->name('edit-category')->middleware('permission:Edit_Category');

//bill
Route::get('bill', [BillController::class, 'bill'])->name('bill')->middleware('permission:View_Bill');
Route::get('bill_detail', [BillController::class, 'detail_bill'])->name('detail_bill')->middleware('permission:View_Bill');
Route::get('recurring_bill', [BillController::class, 'recurring_bill'])->name('recurring_bill');
Route::get('add_recurring_bill', [BillController::class, 'add_recurring_bill' ])->name('add_recurring_bill');
Route::get('add_bill', [BillController::class, 'add_bill'])->name('add_bill')->middleware('permission:Create_Bill');
Route::get('detail_rcr_bill', [BillController::class, 'detail_rcr_bill'])->name('detail_rcr_bill')->middleware('permission:View_Bill');


//laporan
Route::get('/report',[ReportController::class, 'report'])->name('report')->middleware('permission:View_Report');
Route::get('/add_report',[ReportController::class, 'add_report'])->name('add_report')->middleware('permission:Create_Report');
Route::get('/show_report',[Show_reportController::class, 'show_report'])->name('show_report')->middleware('permission:View_Report');
Route::get('/show_report2',[Show_report2Controller::class, 'show_report2'])->name('show_report2')->middleware('permission:View_Report');

//calendar
Route::get('/calendar',[CalendarController::class, 'calendar'])->name('calendar')->middleware('permission:View_Calender');

//EditEmail
Route::get('/editemail',[EditEmailController::class, 'editemail'])->name('editemail')->middleware('permission:Edit_Email');

//cobaaaaaa
Route::get('impor_pembelian', function () {
    return view('pembelian.pembelian_impor_pemasok');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
//Users
Route::get('/users',[UsersController::class,'usersindex'])->name('users-index')->middleware('permission:View_User');
Route::get('/add_users',[UsersController::class,'add_users'])->name('add_users')->middleware('permission:Create_User');
Route::Post('/add-user',[UsersController::class,'add_user'])->name('add-user');
Route::get('/edit_users/{id}',[UsersController::class,'edit_users'])->name('edit_users')->middleware('permission:Edit_User');
Route::put('/user-edit/{id}',[UsersController::class,'edit'])->name('user-edit');
Route::post('/user_delete/{id}',[UsersController::class,'delete'])->name('user-delete')->middleware('permission:Delete_User');
//Users
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::put('/update-profile',[ProfileController::class,'update_users'])->name('update-profile');
// Route::get('invoice', )
//Tax
Route::get('/tax',[TaxController::class,'tax_index'])->name('tax')->middleware('permission:View_Tax');

Route::get('/add-tax',[TaxController::class,'tax_add'])->name('tax-add')->middleware('permission:Create_Tax');
Route::post('/insert_tax',[TaxController::class,'tax_insert'])->name('insert_tax');

Route::get('/edit-tax/{id}',[TaxController::class,'tax_edit'])->name('tax-edit')->middleware('permission:Edit_Tax');
Route::post('/update_tax/{id}',[TaxController::class,'tax_update'])->name('update_tax');

Route::get('/delete_tax/{id}',[TaxController::class,'tax_delete'])->name('tax-delete')->middleware('permission:Delete_Tax');
//currency
Route::get('/currency',[CurrencyController::class,'currency_index'])->name('currency');
Route::get('/add-currency',[CurrencyController::class,'currency_add'])->name('currency-add');
Route::get('/edit-currency',[CurrencyController::class,'currency_edit'])->name('currency-edit');
//Copy Text
Route::get('copytext', [CopyTextController::class, 'CopyText'])->name('copytext');
Route::get('/users/set-password/{user}', [PasswordController::class, 'setPassword'])->name('users.setPassword');
Route::post('/users/update-password/{user}', [PasswordController::class, 'updatePassword'])->name('users.updatePassword');


require  __DIR__. "/trisqi.php";


require  __DIR__."/reno.php";
require __DIR__."/alfa.php";
require __DIR__. "/gmbs.php";
