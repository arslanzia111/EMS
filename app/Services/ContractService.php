<?php 

namespace App\Services;

use App\Repositories\ContractRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ContractService
{
    protected $contractRepository;
    public function __construct(ContractRepository $contractRepository)
    {
        $this->contractRepository = $contractRepository;
    }
    public function saveContractData($data){
        
        $validator = Validator::make($data,[
            'allowLeave'=>'required|numeric',
            'grossSalary'=>'required|numeric',
            'designationId'=>'required',
            'departmentId'=>'required',
            
            ]);
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        return $result = $this->contractRepository->save($data);
        
    }
}
