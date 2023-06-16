<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Customer;
use App\Models\Expenditure;
use App\Models\Income;
use App\Models\IncomeRoutine;
use App\Models\Supplier;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //transactions
    public function transactions()
    {
        $data = Income::all();
        return view('transactions.dashboard.index',compact('data'));
    }

    //income
    public function add_income()
    {
        $category_type = CategoryType::all();
        $category = Category::all();
        $category = Category::all();
        $account = Account::all();
        $customer = Customer::all();
        return view('transactions.dashboard.income.add_income',compact('category','customer','account','category','category_type'));
    }

    public function edit_income($id)
    {
        $income = Income::find($id);
        $come = Income::all();
        return view('transactions.dashboard.income.edit_income',compact('income','come','category','category_type'));
    }

    public function show_income()
    {
        return view('transactions.dashboard.income.show_income');
    }
    public function insert_income(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'payment_method' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required',
            'income_number' => 'required',
            'reference' => 'nullable',
            'attachment' => 'nullable',
            'account_id' => 'required',
            'category_id' => 'required',
            'customer_id' => 'required',
        ]);

        $date = date("Y-m-d", strtotime(str_replace('/','-',$request->date)));
        Income::create([
            'date' => $date,
            'payment_method' => $request->payment_method,
            'amount' => $request->amount,
            'description' => $request->description,
            'income_number' => $request->income_number,
            'reference' => $request->reference,
            'attachment' => $request->attachment,
            'account_id' => $request->account_id,
            'category_id' => $request->category_id,
            'customer_id' => $request->customer_id,
            'company_id' => 1,
        ]);
        return redirect()->route('transactions');
    }
    public function update_income(Request $request, $id)
    {
        $date = date("Y-m-d", strtotime(str_replace('/','-',$request->date)));

        $income = Income::find($id);

        $income->date = $date;
        $income->payment_method = $request->payment_method;
        $income->amount = $request->amount;
        $income->description = $request->description;
        $income->income_number = $request->income_number;
        $income->reference = $request->reference;
        $income->attachment = $request->attachment;
        $income->account_id = $request->account_id;
        $income->category_id = $request->category_id;
        $income->customer_id = $request->customer_id;
        $income->company_id = 1;

        $income->save();

        return redirect()->route('transactions');
    }
    public function insert_account_income(Request $request){
        Account::create([
            'name' => $request->name,
            'rekening_number' => $request->rekening_number,
            'currency' => $request->currency,
            'balance' => $request->balance,
            'name_bank' => $request->name_bank,
            'bank_telephone' => $request->bank_telephone,
            'bank_address' => $request->bank_address,
            'company_id' => 1,
        ]);

        return redirect()->route('add_income');
    }
    public function insert_category_income(Request $request){
            Category::create($request->all());

        return redirect()->route('add_income');
    }
    public function insert_cos_income(Request $request)
    {
        customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'reference' => $request->reference,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'currency' => $request->currency,
            'phone_number' => $request->phone_number,
            'company_id' => 1,
        ]);
        return redirect()->route('add_income');
    }

    //expenditure
    public function add_expenditure()
    {
        $supplier = Supplier::all();
        $account = Account::all();
        $category = Category::all();
        return view('transactions.dashboard.expenditure.add_expenditure',compact('supplier','account','category'));
    }

    public function edit_expenditure($id)
    {
        $expenditure = Expenditure::find($id);
        $ture = Expenditure::all();
        return view('transactions.dashboard.expenditure.edit_expenditure',compact('expenditure','ture'));
    }

    public function show_expenditure()
    {
        return view('transactions.dashboard.expenditure.show_expenditure');
    }
    public function insert_expenditure(Request $request)
    {
        $date = date("Y-m-d", strtotime(str_replace('/','-',$request->date)));
        Expenditure::create([
            'date' => $date,
            'payment_method' => $request->payment_method,
            'amount' => $request->amount,
            'description' => $request->description,
            'expenditure_number' => $request->expenditure_number,
            'reference' => $request->reference,
            'attachment' => $request->attachment,
            'account_id' => $request->account_id,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'company_id' => 1,
        ]);
        return redirect()->route('transactions');
    }
    public function update_expenditure(Request $request, $id)
    {
        $date = date("Y-m-d", strtotime(str_replace('/','-',$request->date)));

        $expenditure = Expenditure::find($id);

        $expenditure->date = $date;
        $expenditure->payment_method = $request->payment_method;
        $expenditure->amount = $request->amount;
        $expenditure->description = $request->description;
        $expenditure->expenditure_number = $request->expenditure_number;
        $expenditure->reference = $request->reference;
        $expenditure->attachment = $request->attachment;
        $expenditure->account_id = $request->account_id;
        $expenditure->category_id = $request->category_id;
        $expenditure->customer_id = $request->customer_id;
        $expenditure->company_id = 1;

        $expenditure->save();

        return redirect()->route('transactions');
    }
    //recurring transactions
    public function recurring_transactions()
    {
        return view('transactions.recurring_transactions.index');
    }

    //recurring income

    public function add_recurring_income()
    {
        return view('transactions.recurring_transactions..recurring_income.add_recurring_income');
    }

    public function edit_recurring_income()
    {
        return view('transactions.recurring_transactions..recurring_income.edit_recurring_income');
    }

    public function show_recurring_income()
    {
        return view('transactions.recurring_transactions..recurring_income.show_recurring_income');
    }
    public function insert_recurring_income(Request $request)
    {
        $date = $request->date ? date("Y-m-d", strtotime(str_replace('/','-',$request->date))) : date("Y-m-d");
        IncomeRoutine::create([
            'date' => $date,
            'entry_amount' => $request->entry_amount,
            'payment_method' => $request->payment_method,
            'description' => $request->description,
            'number' => $request->number,
            'reference' => $request->reference,
            'repeat1' => $request->repeat1,
            'repeat2' => $request->repeat2,
            'repeat3' => $request->repeat3,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'attachment' => $request->attachment,
            'account_id' => 1,
            'category_id' => 1,
            'customer_id' => 1,
            'company_id' => 1,
        ]);
        return redirect()->route('recurring_transactions');
    }
    //recurring expenditure

    public function add_recurring_expenditure()
    {
        return view('transactions.recurring_transactions..recurring_expenditure.add_recurring_expenditure');
    }

    public function edit_recurring_expenditure()
    {
        return view('transactions.recurring_transactions..recurring_expenditure.edit_recurring_expenditure');
    }

    public function show_recurring_expenditure()
    {
        return view('transactions.recurring_transactions..recurring_expenditure.show_recurring_expenditure');
    }
    public function receipt_transactions()
    {
        return view('transactions.dashboard.receipt.receipt');
    }
    public function receipt_bill_transactions()
    {
        return view('transactions.dashboard.receipt.receipt_bill');
    }




}
