<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('name');

        if($request->filter){
            $products->where('name', 'like', "%$request->filter")
                ->orWhere('description', 'like', "%$request->filter");
        }

        return view('templates._product-list', ['products' => $products]);
    }

    public function store(Request $request){  
        
        $fields = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'img' => 'nullable',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]); 

        $products = Product::orderBy('name');
        
        if($fields->fails()){
            return view('templates._errors', ['error' => $fields->errors(), 'products' => $products]);
        }

        Product::create($request->all());
        
        

        return view('templates._product-list', ['products' => $products]);
    }

    public function edit(Product $product){
        $product = Product::find($product->id);
        // dd($product);

        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product){

        $products = Product::orderBy('name');
        
        $fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
    
        
        $product->update($fields);
        
      

        // dd($product);


        // return view('page.product')->with('update', 'Updated Successfully.');
        // return view('page.product');
        return view('templates._product-list', ['products'=>$products]);
    }

    public function destroy(Product $product) {
        $product = Product::find($product->id);

        $products = Product::orderBy('name');

        $product->delete();

        return view('templates._product-list', ['products'=>$products]);
    }

    public function show(Product $product)
    {
      $product = Product::find($product->id);
      return view('product.show', compact('product'));
    }
    

}
