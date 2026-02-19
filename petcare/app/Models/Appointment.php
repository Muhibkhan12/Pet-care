<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'vet_id',
        'pet_id',
        'appointment_date',
        'appointment_time',
        'status',
        'reason',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function vet(){
        return $this->belongsTo(vet::class, 'vet_id');
    }
    public function pet(){
        return $this->belongsTo(pet::class, 'pet_id');
    }

}
