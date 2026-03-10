<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Notifications\AppointmentApproved;

class AppointmentController extends Controller
{
    public function ShowAppoinmentPage()
    {
        $vets = User::where('role', 'vet')->get();
        $pets = Auth::user()->pet;

        return view('UserDashboard.bookAppoinment', compact('vets','pets'));
    }

    public function createAppointment(Request $request)
    {
        $request->validate([
            'vet_id' => 'required|integer|exists:users,id',
            'pet_id' => 'required|integer|exists:pets,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'reason' => 'required|string',
        ]);

        $appointmentDateTime = Carbon::parse($request->appointment_date . ' ' . $request->appointment_time);

        Appointment::create([
            'user_id' => Auth::id(),
            'vet_id' => $request->vet_id,
            'pet_id' => $request->pet_id,
            'appointment_date' => $appointmentDateTime,
            'status' => 'pending',
            'reason' => $request->reason,
        ]);

        return back()->with('success', 'Appointment request sent for approval');
    }

    public function approveAppointments()
    {
        $appointments = Appointment::with(['vet', 'pet', 'user'])->get();
        return view('Admin.AppointmentsApproval', compact('appointments'));
    }

    public function updateStatus($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'approved';
        $appointment->save();

        $appointment->user->notify(new AppointmentApproved($appointment));

        return back()->with('success', 'Appointment has been approved successfully');
    }

    public function deleteAppointment($id)
    {
        Appointment::where('id', $id)->delete();
        return back()->with('success', 'Appointment has been rejected');
    }

    public function updateAppointment($id){
        $updateAppointment =  Appointment::findOrFail($id);
        $updateAppointment->status = 'completed';
        $updateAppointment->save();

        return back()->with('success','Appointment Completed');

    }   
}
