@extends('layout.base')
@section('content')
    <div class="mt-4 w-full" id="EditPage">
        <div class="w-[60vh] bg-white rounded shadow-md p-3 mt-10">
            <h1 class="text-3xl ">Edit</h1>
            <span class="italic">Let's edit your product</span>
            <form class="mt-6" hx-put="/api/products/{{$product->id}}"
                hx-trigger="submit"
                hx-target="body"
                hx-swap="innerHTML"
                
                method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="text-xl">Name:</label>
                    <input type="text" name="name" id="name" class="w-full p-2 rounded bg-slate-700 text-white font-bold" value="{{$product->name}}">
                </div>
                <div class="mb-2">
                    <label for="description" class="text-xl">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="w-full p-2 rounded bg-slate-700 text-white font-bold">{{$product->description}}</textarea>
                </div>
                <div class="mb-2">
                    <label for="price" class="text-xl">Price:</label>
                    <input type="text" name="price" id="price" class="w-full p-2 rounded bg-slate-700 text-white font-bold" value="{{$product->price}}">
                </div>
                <div class="mb-4">
                    <label for="quantity" class="text-xl">Quantity:</label>
                    <input type="text" name="quantity" id="quantity" class="w-full p-2 rounded bg-slate-700 text-white font-bold" value="{{$product->quantity}}">
                </div>
                <footer class="flex items-center">
                   <div class="flex-1">
                    <button class="bg-blue-600 text-white p-2  rounded hover:bg-blue-500 transition ease-linear duration-150s" type="submit">Edit Product</button>
                   </div>
                    <div>
                        <a href="/product" class="bg-green-600 rounded text-white px-3 py-2.5">Back</a>
                    </div>
                </footer>
            </form>
        </div>
    </div>
@endsection