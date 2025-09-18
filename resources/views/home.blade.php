@php
    $comics = config('comics');
@endphp
@extends('layouts/master')
@section('titolo')
    Homepage
@endsection
@section('label')
    Current Series
@endsection
@section('contenuto')
    <div class="row my-5 g-3">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <x-card>
                    <x-slot:title>{{ $comic['series'] }}</x-slot:title>
                    <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>

                </x-card>
            </div>
        @endforeach
    </div>
@endsection
@section('label')
    Current Series
@endsection
@section('extra-content')
    <div class="row">
        <div class="col text-center">
            <x-button>
                <x-slot:text>Load More</x-slot:text>
            </x-button>
        </div>
    </div>
@endsection
