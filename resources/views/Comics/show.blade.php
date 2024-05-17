@extends('layout.main')







@section('content')

<div class="bg-dark">
    <div class="container text-white  ">
        <div class="row row-cols-2 justify-content-between ">
            <div class="col">
                <h3 class="m-5">{{$comic->title}}</h3>
                <h5 class="">Serie: {{$comic->series}}</h5>
                <h5 class="">Tipo: {{$comic->type}}</h5>
                <p>Prezzo: {{$comic->price}}</p>
                <p>Data: {{$comic->sale_date}}</p>
                <p class="w-75">Descrizione: {{$comic->description}}</p>

                <div class="d-flex justify-content-between ">
                    <p>Artisti: </p>
                    @php
                        $artist_array = explode(',', $comic->artists);
                        $writer_array = explode(',', $comic->writers);
                    @endphp
                    <ul>
                        @foreach ($artist_array as $item)
                            <li> {{$item}} </li>
                        @endforeach
                    </ul>

                    <p>Scrittori: </p>
                    <ul>
                        @foreach ($writer_array as $item)
                            <li> {{$item}} </li>
                        @endforeach
                    </ul>
                </div>



            </div>
            <div class="col">
                <img src="{{$comic->thumb}}" class="card-img-top my-5 " alt="{{$comic->title}}">
            </div>
        </div>

        <a href="{{route('comics.index')}}">Torma all'elenco generale</a>

    </div>
</div>

@endsection
