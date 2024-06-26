@extends('layout.main')







@section('content')

    <div class="container">
        <div class="row">
            {{-- <h1 class="my-5">Nuovo Comics</h1> --}}

            @php
                $status = 'test';
                $title = '';
                $description = '';
                $thumb = '';
                $price = '';
                $series = '';
                $sale_date = '';
                $type = '';
                $artists = '';
                $writers = '';
                if($status === 'test'){
                    $title = 'Catwoman Vol. 1: Copycats';
                    $description = "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.";
                    $thumb = 'https://imgs.search.brave.com/bf_FlGnymAgmvweY8YiLAcyy600JdSMl_jHpdR3t5ro/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvNTA5/M2IxOTEtZTkzZS00/NTJjLThhYTQtYTEw/ZDY0ZTcxN2E5LjA5/N2UwZWM5NDgzYzky/OGExMjY4Nzk1Nzk2/NTliZWNjLmpwZWc_/b2RuV2lkdGg9NjEy/Jm9kbkhlaWdodD02/MTImb2RuQmc9ZmZm/ZmZm';
                    $price = '$16.99';
                    $series = 'Catwoman';
                    $sale_date = '2019-04-10';
                    $type = 'graphic novel';
                    $artists = 'Fernando Blanco,Joëlle Jones';
                    $writers = 'Joëlle Jones';
                }

            @endphp

            {{-- per vedere errore compilazione campi --}}
            {{-- @if ($errors->any())
            <div class="alert alert-danger " role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
            @enderror

            <form action="{{route('comics.store')}}" method="POST" class="my-5">

                @csrf

                <div class="mb-3">
                  <label
                    for="title"
                    class="form-label @error('title') is-invalid @enderror"
                  >
                    Titolo: (*)
                </label>
                  <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                  @error('title')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Immagine:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"  value="{{old('thumb')}}">
                    @error('thumb')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>

                <div class="mb-3">
                  <label for="price" class="form-label @error('price') is-invalid @enderror">Prezzo: (*)</label>
                  <input type="text" class="form-control w-25" id="price" name="price"  value="{{old('price')}}">
                  @error('price')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di pubblicazione:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"  value=" {{old('sale_date')}}">

                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie: </label>
                    <input type="text" class="form-control w-25" id="series" name="series" value=" {{old('series')}}">

                </div>

                <div class="mb-3">
                    <label for="type" class="form-label @error('type') is-invalid @enderror">Tipo: (*)</label>
                    <input type="text" class="form-control w-25" id="type" name="type" value="{{old('type')}}">
                    @error('type')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label ">Artisti:</label>
                    <input type="text" class="form-control" id="artists" name="artists" value="{{old('artists')}}">

                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label ">Scrittori:</label>
                    <input type="text" class="form-control" id="writers" name="writers" value="{{old('writers')}}">

                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea type="text" class="form-control" id="description" name="description" value=""> {{old('description')}} </textarea>

                </div>

                <div class="d-flex justify-content-center my-4">
                    <button type="submit" class="btn btn-success mx-3">Invia nuovo Comics</button>
                     <button type="resect" class="btn btn-danger mx-3">Cancella</button>
                </div>
              </form> --}}


        </div>
    </div>

@endsection
