<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Turn;

class TurnController extends Controller
{
    public function assignTurn($patientId)
    {
        
        $lastTurn = Turn::where('status', 'on hold')->orderBy('created_at', 'desc')->first();
        
        $nextReason = 'consultation';
        if ($lastTurn && $lastTurn->reason === 'consultation') {
            $nextReason = 'application';
        }

        $turn = Turn::create([
            'patient_id' => $patientId,
            'turn_number' => $this->generateTurnNumber(),
            'reason' => $nextReason,
        ]);

        return redirect()->route('lobby');
    }

    private function generateTurnNumber()
    {
        $lastTurn = Turn::latest()->first();
        return $lastTurn ? $lastTurn->turn_number + 1 : 1;
    }

    public function index()
    {
        $turns = Turn::with('patient')->where('status', 'on hold')->orderBy('created_at')->get();
        $currentTurn = Turn::with('patient')->where('status', 'attending')->first();
        return view('lobby', compact('turns', 'currentTurn'));
    }

}
