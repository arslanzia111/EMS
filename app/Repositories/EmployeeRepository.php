<?php
namespace App\Repositories;

use App\Employee;
use App\Contract;

class EmployeeRepository
{
    protected $employee;
    protected $contract;
    public function __construct(Employee $employee,Contract $contract)
    {
        $this->employee= $employee;
        $this->contract = $contract;
    }
    public function save($data){
        $data=array_merge($data, ['empNo'=>'emp-'.$this->getEmployeeNo()]);
        $data1 = $this->employee->create($data);
        
        // $employee  = new $this->employee;
            // $employee->name=$data['name'];
            // $employee->email=$data['email'];
            // $employee->phone=$data['phone'];
            // $employee->cnic=$data['cnic'];
            // $employee->address=$data['address'];
            // $employee->status=$data['status'];
            // $employee->save();
        // $data1 = employee::latest()->first();;
        $id = $data1->id;
        $empNo = 'EMP-'.$id;
        $employee1 = $this->employee->find($id);
        $employee1->empNo = $empNo ;
        $employee1->update();
        $data = array_merge($data, ['employeeId'=>$id]);
        
        $con = $this->contract->create($data);
        return $employee1->fresh();
        
    }

    public function getEmployeeNo()
    {
        $employee =  $this->employee->select('empNo')->latest()->first();
        // dd($employee);
        $emp_no = 10000;  
        if($employee != '')
        {
            $str = $employee->empNo;
            $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
            $emp_no = abs($int) + 1; 
        }
        
        return $emp_no;
    }

    public function getEmployee($with)
    {
        return $this->employee->with($with)->first();
    }
}