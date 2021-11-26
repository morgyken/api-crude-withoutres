<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployees()
    {
        return response () -> json(Employee::all(), 200);
    }

    public function getEmployeeById ($id){

        $employee = Employee::find($id);

        if(is_null($employee))
        {
            return response () -> json(['message' => 'Employee not found'], 404);
        }

        else 
        {
            return response () -> json($employee, 200);
        }
    }

    public function addEmployee(Request $request)
    {
        $employee = Employee::create($request->all());

        return response($employee, 201);

    }

    public function updateEmployee( Request $request, $id)
    {
        $employee = Employee::find($id);

        // check if employee exists 

        if(is_null($employee))
        {
            return response () -> json(['message' => 'Employee not found'], 404);
        }
        else
        {
            // update employee 

            $employee -> update ($request->all());

            return response($employee, 200);
        }


    }

    public function deleteEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);

        // check if employee exists 

        if(is_null($employee))
        {
            return response () -> json(['message' => 'Employee not found'], 404);
        }
        else
        {
            // update employee 

            $employee -> delete ();

            return response(null, 204);
        }


    }
}
