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
    public function test1(Request $request)
    {
        $employees = Employee::where('salary', $salary)->where('name', $name)->orderBy('bonus')->limit(3)->get();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $employee = Employee::find($request->id);
        dd($employee->toArray());
    }
}
