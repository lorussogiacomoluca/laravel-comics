<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials/header')
    @include('partials/jumbotron')
    <div class="container-fluid homepage-content">
        <div class="container homepage-section">
            <div class="row">
                <div class="col label-name-abs">
                    <x-button>
                        <x-slot:text>Testo</x-slot:text>
                    </x-button>
                </div>
            </div>
            <div class="container cards-content">
                <div class="row">
                    <div class="col">
                        @yield('contenuto')
                    </div>
                </div>

            </div>
            @hasSection('extra-content')
                <div class="row">
                    <div class="col my-5">
                        @yield('extra-content')
                    </div>
                </div>
            @endif

        </div>
    </div>
    @include('partials/footer')
</body>

</html>
