@extends('layout.main')







@section('content')

    <div class="container">
        <div class="row">
            <h1 class="my-5"> {{ $comic->title}} </h1>



            <form action="{{route('comics.update', $comic)}}" method="POST" class="my-5">

                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="title" class="form-label">Titolo:</label>
                  <input type="text" class="form-control" id="title" name="title" value=" {{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"  value=" {{ $comic->thumb }}">
                  </div>

                <div class="mb-3">
                  <label for="price" class="form-label">Prezzo:</label>
                  <input type="text" class="form-control w-25" id="price" name="price"  value=" {{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di pubblicazione:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"  value=" {{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control w-25" id="series" name="series" value=" {{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo:</label>
                    <input type="text" class="form-control w-25" id="type" name="type" value=" {{ $comic->type }}">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti:</label>
                    <input type="text" class="form-control" id="artists" name="artists" value=" {{ $comic->artists }}">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori:</label>
                    <input type="text" class="form-control" id="writers" name="writers" value=" {{ $comic->writers }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea type="text" class="form-control" id="description" name="description" value=""> {{ $comic->description }} </textarea>
                </div>

                <div class="d-flex justify-content-center my-4">
                    <button type="submit" class="btn btn-success mx-3">Salva Comics</button>
                     <button type="resect" class="btn btn-danger mx-3">Cancella</button>
                </div>
              </form>


        </div>
    </div>

@endsection
