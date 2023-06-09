<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/sonic2.png')}}">

    <title>Sonic</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body>
    <h1 class="text-3xl font-bold underline bg-blue-500">
        Hello world!
    </h1>
    <div class="p-5 bg-blue-300">
        <livewire:table.daftar-produk/>
    </div>

    @livewireScripts
    <script src="{{ asset('assets/flowbite/dist/flowbite.js') }}"></script>
</body>


</html>
