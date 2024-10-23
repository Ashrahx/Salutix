<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'name',
        'last_name',
        'middle_name',
        'gender',
        'birthdate',
        'allergies',
        'medical_history',
        'weight',
        'height',
    ];

    public function turns()
    {
        return $this->hasMany(Turn::class);
    }
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
}
