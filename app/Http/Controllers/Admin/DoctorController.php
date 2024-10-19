<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('role', 'doctor')->with('creator')->orderBy('id', 'desc')->get();
        return view('admin.doctors', compact('doctors'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
            'status' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'doctor',
            'status' => 'active',
            'created_by' => Auth::id(),
        ]);

        return response()->json(['success' => 'Doctor added successfully!']);
    }

    public function update(Request $request, $id)
    {
        $doctor = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $doctor->id,
            'role' => 'required|string',
            'status' => 'required|string',
        ]);

        $doctor->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'Doctor updated successfully!']);
    }

    public function destroy($id)
    {
        $doctor = User::findOrFail($id)->delete();

        return response()->json(['success' => 'Doctor deleted successfully!']);
    }
}
