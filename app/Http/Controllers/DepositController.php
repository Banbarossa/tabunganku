<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\Student;

class DepositController extends Controller
{

    public function index($student)
    {
        return view('deposit.index', [
            'data' => Money::where('student_id', $student)->get(),
            'depositor' => Student::where('id', $student)->first()
        ]);
    }
}
