<?php 

namespace App\Services;

use App\Repositories\DesignationRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class DesignationService
{
    protected $designationRepository;
    public function __construct(DesignationRepository $designationRepository)
    {
        $this->designationRepository = $designationRepository;
    }
    public function saveDesignationData($data){
        
        $validator = Validator::make($data,[
            'name'=>'required|max:50',
        ]);
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        return $result = $this->designationRepository->save($data);
        
    }
}
