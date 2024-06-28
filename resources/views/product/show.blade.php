@extends('layout.base')
@section('content')
    <div class="mt-4 w-full" id="EditPage">
        <div class="w-[60vh] bg-white rounded shadow-md p-3 mt-10">
            <h1 class="text-3xl ">Product Detial</h1>
                <div class="mb-2">
                    <label for="name" class="text-xl">Name:</label>
                    <div class="">
                        {{ $product->name}}
                    </div>
                </div>
                <div class="mb-2">
                    <label for="description" class="text-xl">Description:</label>
                    <div>
                        {{ $product->description}}
                    </div>
                </div>
                <div class="mb-2">
                    <label for="price" class="text-xl">Price:</label>
                    <div>
                        {{ $product->price}}
                    </div>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="text-xl">Quantity:</label>
                    <div>
                        {{ $product->quantity}}
                    </div>
                </div>
                <footer class="flex items-center">
                    <div>
                        <a href="/product" class="bg-green-600 rounded text-white px-3 py-2.5">Back</a>
                    </div>
                </footer>
        </div>
    </div>
@endsection