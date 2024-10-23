<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AdminCashierController extends Controller
{
    public function index()
    {
        $cashiers = User::where('role', 'cashier')->with('creator')->orderBy('id', 'desc')->get();
        return view('admin.cashiers', compact('cashiers'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'cashier',
            'status' => 'inactive',
            'created_by' => Auth::id(),
        ]);

        return response()->json(['success' => 'Cashier added successfully!']);
    }

    public function update(Request $request, $id)
    {
        $cashier = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $cashier->id,
            'role' => 'required|string',
            'status' => 'required|string',
        ]);

        $cashier->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return response()->json(['success' => 'Cashier updated successfully!']);
    }

    public function destroy($id)
    {
        $doctor = User::findOrFail($id)->delete();

        return response()->json(['success' => 'Cashier deleted successfully!']);
    }
}
