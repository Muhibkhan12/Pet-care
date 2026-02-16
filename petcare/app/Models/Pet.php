<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'species',
        'breed',
        'gender',
        'age',
        'weight',
        'medical_notes',
    ];

    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
    public function pet(){
        return $this->belongsTo(User::class);
    }

}
