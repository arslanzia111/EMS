<?php 

namespace App\Services;

use App\Repositories\SlipRepository;
use App\Repositories\EmployeeRepository;
use App\Contract;
use App\Payslip;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
// use App\payslip;
class SlipService
{
   
    protected $slipRepository;
    protected $employeeRepository;

    public function __construct(SlipRepository $slipRepository, EmployeeRepository $employeeRepository)
    {
        $this->slipRepository = $slipRepository;
        $this->employee = $employeeRepository;
    }
   
    
    public function saveSlipData($data){
        $validator = Validator::make($data,[
            'name'=>'required|max:50',
            'designation'=>'required|string',
            'month'=>'required|string',
            'year'=>'required|numeric',
            'bankname'=>'required|string',
            'chequenumber'=>'required|numeric',
            
        ]); 
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        
     
        $employee = $this->employee->getEmployee(['contract']);
        
        dd($employee);
        // $payslips = \App\Contract::find(1)->grossSalary;
        
        // dd($payslips);
        // $payslip->grossSalary->where('employee_Id');
        // $payslip->$grossSalary;
     
        // $gsalary=$payslip->with('employee'->find('grossSalary'));
        // dd('gsalary');
        // $gsalary;
        // $gsalary = $data->find('grossSalary');
        // dd($gsalary);
        // $DA=(50/100)*($data->input('grossSalary'));
        // $HRA=(25/100)*($data->$grossSalary);
        // $Convenience=(25/100)*($data->$grossSalary);
        // // dd($DA);
        // $TotalAddition=$DA+$HRA+$Convenience;
        // $TotalDeduction=800;
        // $TotalAmount=$TotalAddition-$TotalDeduction;
        // dd($TotalAmount);

        return $result = $this->slipRepository->save($data);
        
    }
}
