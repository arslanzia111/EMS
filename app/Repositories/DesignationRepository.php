<?php
namespace App\Repositories;

use App\Designation;

class DesignationRepository
{
    protected $designation;
    public function __construct(Designation $designation)
    {
        $this->designation= $designation;
    }
    public function save($data){
        $result =  $this->designation->create($data);
         return $result;
    } 
}