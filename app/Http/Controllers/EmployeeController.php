<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   
    function viewAllEmployee() {
        $employees = Employee::orderBy('created_at','DESC');
        $employees = $employees->get();

        return view('all-employees')->with('employees',$employees);
    }

    function addNewEmployee(Request $request) {
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);
        return redirect()->route('employee.all');
    }

    function editEmployee(Request $request,$id) {
        $employee = Employee::where('id',$id)->first();

        return view('edit-employe')->with('employee',$employee);
    }

    function updateEmployee(Request $request, $id) {
        $employee = Employee::where('id',$id)->first();

            $employee->name = $request->name;
            $employee->lastname = $request->lastname;
            $employee->birthdate = $request->birthdate;
            $employee->personal_id = $request->personal_id;
            $employee->salary = $request->salary;
       $employee->save();
       
       return redirect()->route('employee.all');
    }

    function deleteEmployee(Request $request) {
        Employee::where('id',$request->employee_id)->delete();

        return redirect()->route('employee.all');
    }
}
