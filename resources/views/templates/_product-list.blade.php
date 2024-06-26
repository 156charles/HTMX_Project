@foreach ($products->get() as $product)
    <div class='bg-white rounded max-w-[100%] shadow p-2 h-[40vh]'>
        <img src={{$product->img}} alt="Image" class='w-[20%] h-[10vh]'>
        <div class='mt-2 flex flex-col h-[27vh]'>
            <div class='font-bold text-2xl'>{{$product->name}}</div>
            <div class='flex-1'>{{$product->description}}</div>
            <div class='text-red-500'>P{{$product->price}}</div>
        </div>
    </div>
@endforeach

<div class="bg-green-200 m-3 text-green-700 rounded p-2 mb-2"
    hx-swap-oob="true"
    id="addProductMessage">
    The product has been added successfully.
</div>

