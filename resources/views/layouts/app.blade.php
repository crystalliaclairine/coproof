<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<nav class="bg-[#035E33]">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- Kiri: Link Dashboard, Create, Projects -->
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="{{ route('home') }}" class="rounded-md bg-[#033820] px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                            <a href="{{ route('content.create') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[#1B7332] hover:text-white">Create</a>
                            <a href="{{ route('content.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[#1B7332] hover:text-white">Projects</a>
                            <a href="{{ route('profile.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[#1B7332] hover:text-white">Profile</a>
                        </div>
                    </div>
                </div>
                
                <!-- Kanan: Logout -->
                <div class="hidden sm:block">
                    <a href="{{ route('logout') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-[#1B7332] hover:text-white ml-auto"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div>@yield('content')</div>
    <!-- Di akhir file layouts/app.blade.php -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function () {
                const target = this.getAttribute('data-bs-target');
                document.querySelector(target).classList.remove('hidden');
            });
        });

        document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(button => {
            button.addEventListener('click', function () {
                const target = this.closest('.fixed');
                target.classList.add('hidden');
            });
        });
    });
</script>

</body>
</html>
