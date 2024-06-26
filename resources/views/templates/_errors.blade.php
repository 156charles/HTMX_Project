@include('templates._product-list', ['products' => $products])

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-red-300 text-red-700 p-4 rounded m-2">
        <div>Please fix the following:</div>

        <ul>
            @foreach ($error as $error)
                <li class="list-disc ms-2">{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>