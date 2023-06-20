<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
class EmpController extends Controller
{
    public function index(){
        $emp = Employees::all();
        return response()->json($emp);
    }
}
