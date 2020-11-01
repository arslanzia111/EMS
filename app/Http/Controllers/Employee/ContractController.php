<?php

namespace App\Http\Controllers\Employee;

use App\Contract;
use App\Department;
use App\Designation;
use App\Services\ContractService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    protected $contractService;
    public function __construct(ContractService $contractService)
    {
        $this->contractService = $contractService;
    }

    public function create(){
        $department = Department::all();
        $designation = Designation::all();
        return view('contract.create',compact('department','designation'));
    }
    
    public function store(Request $request){

        $data =$request->only([
            'allowLeave','grossSalary','designationId','departmentId']);
        $result = $this->contractService->saveContractData($data);
    }
}
