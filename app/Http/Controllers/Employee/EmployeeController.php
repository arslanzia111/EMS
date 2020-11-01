<?php

namespace App\Http\Controllers\Employee;

use App\Employee;
use App\Department;
use App\Designation;
use App\Services\EmployeeService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{    
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }
    public function index()
    {        
        return view('employee.dashboard');
    }
    public function create(){
        $department = Department::all();
        $designation = Designation::all();
        return view('employee.create',compact('department','designation'));
        // return view('employee.create');
    }
    public function store(Request $request)
    {
        $result = $this->employeeService->saveEmployeeData($request->all());
    }
}
