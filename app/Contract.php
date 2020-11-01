<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
class Contract extends Model
{
    protected $fillable=['allowLeave','grossSalary','designationId','departmentId','employeeId'];

    public function employee()
    {
        return $this->belongsTo('App\Employee','employeeId');
    }
    public function payslips()
    {
        return $this->belongsTo('App\Payslip','employeeId');
    }
 }