<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Htmx</title>
</head>
<body class="">

    <header class="flex gap-5 bg-gray-300 h-[100vh]">
        <div class="flex p-5 flex-col bg-blue-600 w-[15%] items-center border-r border-black">
            <div class="text-3xl text-white mb-10">
                <h1>HtmX</h1>
            </div>
    
            <div class="flex flex-col gap-5 items-center flex-1">
                <a href="/" class="px-10 rounded text-xl font-bold py-2 bg-white">Home</a>
                <a href="/about" class="px-10 rounded text-xl font-bold py-2 bg-white">About</a>
                <a href="/product" class="px-8 rounded text-xl font-bold py-2 bg-white">Product</a>
                <a href="/contact" class="px-8 rounded text-xl font-bold py-2 bg-white">Contact</a>
            </div>

            <footer class="italic text-gray-200">
                <span>Copyright me</span>
            </footer>
        </div>
        <section class="p-2 overflow-auto">
            @yield('content')
        </section>
    </header>

   
    
</body>
</html>