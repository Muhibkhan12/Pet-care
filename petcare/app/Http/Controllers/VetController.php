<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Notifications\AppointmentApproved;
use App\Models\vet;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VetController extends Controller
{
    public function showVet(){
        return view('VetDashboard.VetMain');
    }
    public function showabout(){
        $users = User::where('role','vet')->all();

        return view('Frontend.about',compact('users'));
    }
    public function showVetInfoPage(){
        $user = Auth::user(); 
        return view('VetDashboard.addInfo',compact('user'));
    }

    public function showVetAppoinmetPage(){
        return view('VetDashboard.appoinment');
    }
    public function sendingAppointments(){
        $vet = Auth::user()->id;
        $appointments = Appointment::where('vet_id', $vet)->where('status', 'approved')->orderBy('appointment_date', 'asc')->orderBy('appointment_time', 'asc')->get();
        return view('VetDashboard.appoinment', compact('appointments'));
    }
    public function storeVetdata(Request $request){
        $validated = $request->validate([
        'specialization' => 'required|string|max:100',
        'experience'     => 'required|integer|min:0|max:50',
        'clinic_name'    => 'required|string|max:150',
        'days'           => 'required|array|min:1',
        'start_time'     => 'required',
        'end_time'       => 'required',
    ]);

    // Build availability string (since DB is VARCHAR)
    $availability = implode(', ', $validated['days'])
        . ' | ' . $validated['start_time']
        . ' - ' . $validated['end_time'];

    vet::create([
        'user_id'        => Auth::id(),
        'specialization' => $validated['specialization'],
        'experience'     => $validated['experience'],
        'clinic_name'    => $validated['clinic_name'],
        'availability'   => $availability,
    ]);
        return redirect()->back()->with('success', 'Vet info saved');
    }

}
