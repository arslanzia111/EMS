<?php

namespace App\Http\Controllers\Employee;

use App\Department;
use App\Services\DepartmentService;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $departmentService;
    public function __construct(DepartmentService $departmentService)
    {
        $this->departmentService = $departmentService;
    }

    public function create()
    {
        return view('department.create');
    }
    public function show()
    {
        return "done";
    }
    public function store(Request $request){

        $data =$request->only([
            'name',
        ]);
        $result = $this->departmentService->saveDepartmentData($data);
    }
}
