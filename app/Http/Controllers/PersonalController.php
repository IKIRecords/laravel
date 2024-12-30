<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalProgrammer;

class PersonalController extends Controller
{
    public function index() {
        $personalInfo = PersonalProgrammer::all(); // Fetch all records
        return view("welcome", compact('personalInfo'));
    }
}
