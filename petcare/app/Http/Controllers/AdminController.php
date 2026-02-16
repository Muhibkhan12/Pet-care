<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function showDashboard(){
        return view('Admin.AdminDashboard');
    }
    public function showManageUser(){
        $users = User::all();
        return view('Admin.ManageUser', compact('users'));
    }

    public function showUserOnVet()  {
        $users = User::all();
        return view('Admin.addVet',compact('users'));
    }

    public function updateToVet($id){
        $user = User::findOrFail($id);
        $user->role = 'vet';
        $user->save();
        return redirect()->route('rolesnpermission')->with('success','Role Upated Successfully');
    }

    public function addProductsPage(){
        return view('admin.addProducts');
    }
    public function showManageProducts(){
        $products = Products::all();
        return view('admin.ManageProducts',compact('products'));
    }
}
