<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProduct(){
        $product = Products::all();
        return view('Frontend.product',compact('product'));
    }
    public function addProductsPage(){
        return view('admin.addProducts');
    }

    public function addproducts(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'price'=> 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'category'=> 'required|string|max:150',
            'description' => 'required|string|max:500',
        ]);
        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('products','public');
        }
        Products::create($validated);

        return back()->with('success','Product Added Successfully');
    }

    public function deleteProduct($id){
        Products::where('id',$id)->delete();
        return back()->with('Success','Product Deleted Successfully');
    }
    public function showEditProductPage($id){
        $product = Products::findorfail($id); 
        return view('admin.updateProducts', compact('product'));
    }

    public function updateProduct(Request $request, $id){

            $validated = $request->validate([
                'name' => 'required|string|max:150',
                'price'=> 'required|numeric|min:0',
                'stock'=> 'required|integer|min:0',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
                'category' => 'required|in:FOOD,CARE,TOYS,ACCESSORIES',
            ]);
            if($request->hasFile('image')){
                if($request->image){
                    Storage::disk('public')->delete($request->image);
                }
                $validated['image'] = $request->file('image')->store('products', 'public');
            }

        Products::findorfail($id)->update($validated);
        return redirect()->back()->with('success','Product Update Successfully');

    }

    
}
