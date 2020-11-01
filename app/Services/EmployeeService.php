<?php 

namespace App\Services;

use App\Repositories\EmployeeRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class EmployeeService
{
    protected $employeeRepository;
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    public function saveEmployeeData($data){
        $validator = Validator::make($data,[
            'name'=>'required|max:50',
            'email'=>'required|string',
            'phone'=>'required|numeric',
            'cnic'=>'required|numeric',
            'address'=>'required|string',
            'status'=>'required',
            'allowLeave'=>'required|numeric',
            'grossSalary'=>'required|numeric',
            'designationId'=>'required',
            'departmentId'=>'required',
        ]); 
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        return $result = $this->employeeRepository->save($data);
        
    }
}
