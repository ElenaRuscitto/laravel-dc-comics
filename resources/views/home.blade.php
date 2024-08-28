@extends('layout.main')

@php
    use App\Functions\Helper as Help;
    use App\Http\Controllers\DashboardController;
@endphp





@section('content')

<div class="container">

    <div>
        {{-- <h1>Home</h1> --}}
    </div>

    <h1 class="text-center my-5">Sono presenti {{$count_comic}} Fumetti</h1>


    <div>
        <h5>Questo è l'ultimo fumetto inserito:</h5>
        <h3>{{$last_comic->title}}</h3>
        <p>{{$last_comic->description}}</p>
    </div>
</div>


@endsection
