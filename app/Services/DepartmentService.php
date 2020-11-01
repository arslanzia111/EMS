<?php 

namespace App\Services;

use App\Repositories\DepartmentRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class DepartmentService
{
    protected $departmentRepository;
    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }
    public function saveDepartmentData($data){
        
        $validator = Validator::make($data,[
            'name'=>'required|max:50',
        ]);
        if($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }
        return $result = $this->departmentRepository->save($data);
        
    }
}
