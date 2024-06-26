<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

        $html = "";

        foreach($products->get() as $product){
            $html .= " 
                <div class='bg-white rounded max-w-[100%] shadow p-2 min-h-[40vh]'>
                    <img src='$product->img' alt='Image' class='w-[20%] h-[10vh]'>
                    <div class='mt-2 flex flex-col h-[27vh]'>
                        <div class='font-bold text-2xl'>$product->name</div>
                        <div class='flex-1'>$product->description</div>
                        <div class='text-red-500'>P$product->price</div>
                    </div>
                </div>
            ";
        }

        return $html;
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

}
