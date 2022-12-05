<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    @vite(['resources/scss/index.scss'])
</head>

<body>

    @include('partials.sidebar.sidebar')

    <div class="main-content d-flex flex-column align-items-stretch" id="panel" style="min-height: 100vh">

        @include('partials.navbar')

        @yield('header')

        <main class="container-fluid mt--6 d-flex flex-column align-items-stretch flex-grow-1">
            <div class="flex-grow-1">
                @yield('main')
            </div>

            @include('partials.footer')
        </main>
    </div>
    @vite(['resources/js/index.js'])
</body>

</html>