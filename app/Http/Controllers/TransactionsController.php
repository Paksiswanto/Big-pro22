<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Income;
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
        $category = Category::all();
        $customer = Customer::all();
        return view('transactions.dashboard.income.add_income',compact('category','customer'));
    }

    public function edit_income($id)
    {
        $income = Income::find($id);
        $come = Income::all();
        $category = Category::all();
        $customer = Customer::all();
        return view('transactions.dashboard.income.edit_income',compact('category','customer','income','come'));
    }

    public function show_income()
    {
        return view('transactions.dashboard.income.show_income');
    }
    public function insert_income(Request $request)
    {
        $date = date("Y-m-d", strtotime(str_replace('/','-',$request->date)));
        Income::create([
            'date' => $date,
            'payment_method' => $request->payment_method,
            'amount' => $request->amount,
            'description' => $request->description,
            'income_number' => $request->income_number,
            'reference' => $request->reference,
            'attachment' => $request->attachment,
            'account_id' => 1,
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
        $income->account_id = 1;
        $income->category_id = $request->category_id;
        $income->customer_id = 1;
        $income->company_id = 1;

        $income->save();

        return redirect()->route('transactions');
    }

    //expenditure
    public function add_expenditure()
    {
        return view('transactions.dashboard.expenditure.add_expenditure');
    }

    public function edit_expenditure()
    {
        return view('transactions.dashboard.expenditure.edit_expenditure');
    }

    public function show_expenditure()
    {
        return view('transactions.dashboard.expenditure.show_expenditure');
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
