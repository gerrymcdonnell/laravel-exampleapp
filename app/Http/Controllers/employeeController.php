<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $salary=$request->salary;
        $employees = Employee::where('salary', $salary)->orderBy('bonus')->get();
        dd($employees);
    }
}
