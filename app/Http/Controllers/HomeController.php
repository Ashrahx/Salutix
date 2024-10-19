<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Patient;

class HomeController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('id', 'desc')->get();
        $total = Patient::count();
        $female = Patient::where('gender', 'female')->count();
        $male = Patient::where('gender', 'male')->count();

        return view('home', compact('patients', 'total', 'male', 'female'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'middle_name' => 'nullable|string|max:25',
            'gender' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'allergies' => 'nullable|string',
            'medical_history' => 'nullable|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $validatedData['created_by'] = Auth::id();

        Patient::create($validatedData);

        return redirect()->route('home')->with('success', 'Patient created successfully.');
    }
}
