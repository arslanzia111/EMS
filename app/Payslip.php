<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payslip extends Model
{

    protected $fillable=['name','designation','month','year','bankname','chequenumber'];

    public function contract(){

        return $this->belongsToMany('App\Contract', 'employeeId');
    }
    // protected $table='employee';
   
}
