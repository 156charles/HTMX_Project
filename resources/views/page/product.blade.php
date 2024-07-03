@extends('layout.base')

@section('content')

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form 
                    id="form"
                    action="/api/products"
                    hx-post="/api/products"
                    hx-trigger="submit"
                    hx-target="#product_list"
                    hx-swap="innerHTML"
                    hx-on="htmx:afterRequest: if(event.detail.successful) this.reset();"  
                    method="POST"
                >
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name:</label>
                        <input class="w-full rounded border border-slate-300 p-2"  type="text" name="name" id="name" >
                        <div id="nameErrorMessage">

                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" class="w-full rounded border border-slate-300 p-2" rows="5"></textarea >
                        <div id="descriptionErrorMessage">

                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="price">Price:</label>
                        <input  class="w-full rounded border border-slate-300 p-2" type="number" name="price" id="price">
                    </div>
                    <div id="priceErrorMessage">

                    </div>

                    <div class="mb-2">
                        <label for="quantity">Quantity:</label>
                        <input class="w-full rounded border border-slate-300 p-2" type="number" name="quantity" id="quantity">
                        <div id="quantityErrorMessage">

                        </div>
                    </div>
                    </div>

                    <div id="addProductMessage">
                        
                    </div>

                   

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="resetModal()">Save</button>
                        <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="flex items-center" id="page">
        <div class="text-4xl flex-1">
            Product Page
        </div>
    
        <div class="flex fixed right-2 gap-3">
            <button class="bg-blue-700 rounded px-4 py-2 text-white" type="button" data-bs-toggle="modal" onclick="resetForm() " data-bs-target="#create">Add</button>

            <div>
                <form hx-get="/api/products"
                    hx-trigger="submit"
                    hx-target="#product_list"
                    hx-swap="innerHTML"
                >
                    <input type="text" name="filter" class="border p-2 rounded border-black" autocomplete="off" placeholder="Search">
                </form>
            </div>  
        </div>
    </div>

    <div id="success">

    </div>

    <div id="product_list"
    hx-get="/api/products"
    hx-swap="innerHTML"
    hx-trigger="load"
     class="mt-3 grid grid-cols-3 gap-2 max-w-[100%]">

    </div>
    

    <script>
        function resetModal() {
            document.getElementById('nameErrorMessage').innerHTML = '';
            document.getElementById('descriptionErrorMessage').innerHTML = '';
            document.getElementById('priceErrorMessage').innerHTML = '';
            document.getElementById('quantityErrorMessage').innerHTML = '';
        }

        function resetForm() {
           document.getElementById('form').reset();

            document.getElementById('nameErrorMessage').innerHTML = '';
            document.getElementById('descriptionErrorMessage').innerHTML = '';
            document.getElementById('priceErrorMessage').innerHTML = '';
            document.getElementById('quantityErrorMessage').innerHTML = '';
            document.getElementById('addProductMessage').classList.toggle('hidden')
        }
    </script>
   

    
@endsection