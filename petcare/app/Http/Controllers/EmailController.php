<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(){
        $toemail = Appointment::where('user_id','');
    }
}