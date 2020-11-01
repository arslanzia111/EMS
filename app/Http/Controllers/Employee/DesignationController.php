<?php

namespace App\Http\Controllers\Employee;

use App\Designation;
use App\Services\DesignationService;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    protected $designationService;
    public function __construct(DesignationService $designationService)
    {
        $this->designationService = $designationService;
    }

    public function create()
    {
        return view('designation.create');
    }
    public function show()
    {
        return "done";
    }
    public function store(Request $request){

        $data =$request->only([
            'name',
        ]);
        $result = $this->designationService->saveDesignationData($data);
    }
}
