<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vet extends Model
{
    protected $fillable = [
        'user_id',
        'specialization',
        'experience',
        'clinic_name',
        'availability',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
