<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //transactions
    public function transactions()
    {
        return view('transactions.dashboard.index');
    }

    //income
    public function add_income()
    {
        return view('transactions.dashboard.income.add_income');
    }

    public function edit_income()
    {
        return view('transactions.dashboard.income.edit_income');
    }

    public function show_income()
    {
        return view('transactions.dashboard.income.show_income');
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
