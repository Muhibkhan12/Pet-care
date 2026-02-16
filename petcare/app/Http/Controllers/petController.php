<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function showAddPet()
    {
        return view('UserDashboard.AddPet');
    }

    public function storePetData(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'species' => 'required|in:dog,cat,bird,other',
            'breed' => 'nullable|string|max:100',
            'gender' => 'nullable|in:male,female',
            'age' => 'nullable|integer|min:0',
            'weight' => 'nullable|numeric|min:0',
            'medical_notes' => 'nullable|string',
        ]);

        $user = Auth::user();
        $data['user_id'] = $user->id;

        Pet::create($data);

        return redirect()
            ->route('add-pet')
            ->with('success', 'Pet added successfully.');

    }
    public function showUserPets()
    {
        $user = Auth::user();
        $pet = Pet::where('user_id', $user->id)->get();
        return  view('UserDashboard.main',compact('pet'));
    }
}
