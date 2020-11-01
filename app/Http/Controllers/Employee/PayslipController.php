<?php

namespace App\Http\Controllers\Employee;

use App\payslip;
use Illuminate\Http\Request;
use App\Services\SlipService;
use App\Http\Controllers\Controller;
class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $slipService;

    public function __construct(SlipService $slipService)
    {
        $this->SlipService = $slipService;
    }
    public function index()
    {
        return view('payslip.slip');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('payslip.slip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $result = $this->SlipService->saveSlipData($request->all());

        
        return redirect()->back()->with('Success', 'Data saved Successfully');
    }

}
