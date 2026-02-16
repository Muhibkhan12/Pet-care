<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessages;

class UserQueryController extends Controller
{
    public function userQuery(Request $request)
{
    $data = $request->validate([
        'first_name'   => 'required|string|max:35',
        'last_name'    => 'nullable|string|max:25',
        'email'        => 'required|email',
        'phone_number' => 'required|string|max:20',
        'subject'      => 'required|string|max:150',
        'message'      => 'required|string',
    ]);

    $data['newsletter'] = $request->has('newsletter');

    ContactMessages::create($data);

    return back()->with('success', 'Saved!');
}

}
