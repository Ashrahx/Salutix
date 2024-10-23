<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;


class CashierController extends Controller
{
    public function index(){

        return view('cashier');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'middle_name' => 'nullable|string|max:25',
            'gender' => 'required|string|max:20',
            'reason' => 'required|string',
        ]);

        $patient = Patient::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'gender' => $request->gender,
            'birthdate' => null,
            'allergies' => null,
            'medical_history' => null,
            'weight' => 0,
            'height' => 0,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('turns.assign', ['patient' => $patient->id]);

    }
}
