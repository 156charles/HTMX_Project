@include('templates._product-list', ['products' => $products])

<div id="nameErrorMessage" class="text-red-500" hx-swap-oob="true">
    @if($error->has('name'))
        <div class="error">{{ $error->first('name') }}</div>
    @endif
</div>

<div id="descriptionErrorMessage" class="text-red-500" hx-swap-oob="true">
    @if($error->has('description'))
        <div class="error">{{ $error->first('description') }}</div>
    @endif
</div>

<div id="priceErrorMessage" class="text-red-500" hx-swap-oob="true">
    @if($error->has('price'))
        <div class="error">{{ $error->first('price') }}</div>
    @endif
</div>

<div id="quantityErrorMessage" class="text-red-500" hx-swap-oob="true">
    @if($error->has('quantity'))
        <div class="error">{{ $error->first('quantity') }}</div>
    @endif
</div>

<div
    hx-swap-oob="true"
    id="addProductMessage">
</div>
