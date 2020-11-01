<?php
namespace App\Repositories;

use App\Department;

class DepartmentRepository
{
    protected $department;
    public function __construct(Department $department)
    {
        $this->department= $department;
    }
    public function save($data){
        $result =  $this->department->create($data);
         return $result;
    } 
}