<?php

namespace App\Models;

use App\Models\Appointment;
use App\Models\Pet;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    protected $fillable = [
    'name',
    'email',
    'phone',
    'image',
    'password',
    'role',
];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function pet(){
        return $this->hasMany(Pet::class, 'user_id');
    }
    public function appointment(){ 
        return $this->hasMany(Appointment::class,'user_id');
    }
    public function product(){
        return $this->hasMany(Products::class);
    }
    public function vet(){
       return $this->hasOne(vet::class);
    }
}
