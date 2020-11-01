<?php
namespace App\Repositories;

use App\Contract;

class ContractRepository
{
    protected $contract;
    public function __construct(Contract $contract)
    {
        $this->contract= $contract;
    }
    public function save($data){
        $data = $this->contract->create($data);
        return $data;

    }
}