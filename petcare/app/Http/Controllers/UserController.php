<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;
use ReturnTypeWillChange;

// use Illuminate\Support\Facades\redirect;

class UserController extends Controller
{

    
    public function showHome(){
        return view('Frontend.home');
    }
    public function showContact(){
        return view('Frontend.contact');
    }
    public function showServices(){
        return view('Frontend.services');
    }
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function getDataUser(){
        $users = User::where('id', Auth()->id)->first();
        return view('layouts.user-dashbaord',compact('users'));
    }

    public function showUserDashboard(){
        return view('UserDashboard.main');
    }


    // public function editUser(id){
    //     $user = User
    // }

    public function deleteUser($id){
       User::where('id',$id)->delete();
       return redirect()->back()->with('success','User Delete Successfully');
    }

    public function showEditUser($id){
        $user = User::findorfail($id);
        return view('admin.editUser',compact('user'));
    }

public function updateUserDetails(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validated = $request->validate([
        'name'  => 'required|string|max:150',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'required|string|max:20',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'role'  => 'required|in:user,vet,admin',
    ]);

    if ($request->hasFile('image')) {

        // delete old image if exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        // store new image
        $validated['image'] = $request->file('image')->store('users', 'public');
    }

    $user->update($validated);

    return redirect()->back()->with('success', 'User details updated successfully');
}



    public function register(Request $request)
{
    $data = $request->validate([
        'name'     => 'required|string|max:150',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
        'phone'    => 'required|string|max:20',
        'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Store image if exists
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('users', 'public');
    }

    // Default role
    $data['role'] = 'user';

    // Hash password
    $data['password'] = Hash::make($data['password']);

    // Create user
     User::create($data);
    // Redirect
    return redirect()->route('login');
}



    public function loginAttempt(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        session([
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' =>Auth::user()->email,

        ]);

        $user = $request->user();

        return match ($user->role) {
            'admin' => redirect()->route('admin-dashboard'),
            'vet'   => redirect()->route('show-veterian'),
            'user'  => redirect()->route('user-dashboard'),
            default => redirect()->route('login'),
};
    }

    return back()->withErrors([
        'email' => 'Invalid credentials',
    ]);
}

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->forget(['name', 'email']);
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}
}
