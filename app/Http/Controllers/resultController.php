<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class resultController extends Controller
{
    public function index () {
        return view('index');
    }

    public function about () {
        return view('about');
    }

    public function result (Request $request) {
        $validate = $request->validate([
            'roll' => 'required|numeric|digits:4',
            'registration' => 'required|numeric|digits:7',
            'year' => 'required|numeric|digits:4',
        ]);        
        
        $roll = $request->get('roll');
        $registration = $request->get('registration');
        $year = $request->get('year');
        $result = Result::where('roll', $roll)
                        ->where('registration', $registration)
                        ->where('year', $year)
                        ->first();
        // return dd($roll, $registration, $year, $result);
        return view('result', compact('result'));
    }

    public function all_results () {
        $results = Result::all();
        return view('all_results', compact('results'));
    }
}
