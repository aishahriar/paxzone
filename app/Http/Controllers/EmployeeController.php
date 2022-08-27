<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        return view('employeelist', compact('employees'));
    }

    public function create(Request $req)
    {
        $employee = new employee();
        $employee->fname = $req->fname;
        $employee->lname = $req->lname;
        $employee->email = $req->email;
        $employee->save();
        return back()->with('success','Data added successfully');
    }
}
