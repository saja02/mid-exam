<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show()
    {
        $companes = Company::get();
        return view('create_expenses', compact('create_expenses'));
    }

    public function store(Request $request)
    {
        $companes = new Company();
        $companes->category = $request->category;
        $companes->Item_Name = $request->Item_Name;
        $companes->Amount = $request->Amount;
        $companes->Expense_Date = $request->Expense_Date;
        $companes->save();
        $action = 0;
        return redirect()->back()->with('action');
    }

    public function showTicket($id)
    {
        $companes = Company::where('id', $id)->get();
        return view('dashboard', compact('dashboard'));
    }
}
