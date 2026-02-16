<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name','price','image','description','category','stock',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
