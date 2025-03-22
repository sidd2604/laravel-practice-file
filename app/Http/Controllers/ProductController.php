<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        // fetch the details from database
        $products = Product::get();
        
        // show the details on screen
        return view('project.home', ['products'=>$products]);
    }

    public function create(){
        return view('project.create');
    }
    public function store(Request $request){

        // validation

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|max:1000'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('project'), $imageName);
        // dd($imageName);

        $product = new Product;

        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Product Created !!!');

    }

    public function edit($id){
        $product = Product::where('id', $id)->first();
        return view('project.edit', ['product'=>$product]);
        // dd($id);
    }

    public function update(Request $request, $id){
        // dd($request->all());

        // validation

        $request->validate([
            'name' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|max:1000'
        ]);

        $product = Product::where('id', $id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('project'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Product Updated !!!');
    }

    // public function delete($id){
    //     $product = Product::where('id', $id)->first();
    //     $product->delete();
    //     return back()->withSuccess('Product Deleted !!!');
    // }

    public function destroy($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!!');
    }
}
