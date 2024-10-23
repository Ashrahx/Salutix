<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'turn_number',
        'status',
        'reason'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
