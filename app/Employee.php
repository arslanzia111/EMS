<?php

namespace App;
use App\Contract;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['name','empNo','email','phone','cnic','address','status'];

    public function contract()
    {
        return $this->hasone('App\Contract','employeeId');
    }
    public function payslip()
    {
        return $this->hasmany('App\Payslip', 'employeeId');
        
    }
   

}
