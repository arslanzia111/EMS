<?php

namespace App\Http\Controllers\Practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(){
        return view('practice.practice');
    }


}