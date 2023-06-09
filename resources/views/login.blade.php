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
    <div class="bg-[#A72121] h-screen w-screen flex justify-center items-center">
        <livewire:form.login/>
    </div>

    @livewireScripts
    <script src="{{ asset('assets/flowbite/dist/flowbite.js') }}"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/js/showPassword.js')}}"></script>
</body>


</html>
