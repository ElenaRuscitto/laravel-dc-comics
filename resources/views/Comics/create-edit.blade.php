@extends('layout.main')







@section('content')

    <div class=" bg-dark text-white">
        <div class="container">
            <div class="row">
                <h1 class="my-5"> {{ $title }} </h1>



                <form action="{{ $route }}" method="POST" class="my-5">

                    @csrf
                    @method($method)

                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo: ( <span class=" text-danger">*</span> )

                      </label>
                      <input
                        type="text"
                        class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title"
                        value=" {{ old('titolo', $comic?->title) }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="thumb"
                            name="thumb"
                            value=" {{ old('thumb', $comic?->thumb) }}">
                    </div>

                    <div class="mb-3">
                      <label for="price" class="form-label">Prezzo:  ( <span class=" text-danger">*</span> )</label>
                      <input
                        type="text"
                        class="form-control w-25 @error('price') is-invalid @enderror" id="price"
                        name="price"
                        value=" {{ old('price', $comic?->price)  }}">
                      @error('price')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di pubblicazione:</label>
                        <input
                            type="date"
                            class="form-control w-25 "
                            id="sale_date"
                            name="sale_date"
                            value=" {{ old('sale_date', $comic?->sale_date)  }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie: </label>
                        <input
                            type="text"
                            class="form-control w-25"
                            id="series"
                            name="series"
                            value=" {{ old('series', $comic?->series)  }}">

                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:  ( <span class=" text-danger">*</span> )</label>
                        <input
                            type="text"
                            class="form-control w-25"
                            id="type"
                            name="type"
                            value=" {{ old('type', $comic?->type) }}">
                        @error('type')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">Artisti:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="artists"
                            name="artists"
                            value=" {{ old('artists', $comic?->artists) }}">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittori:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="writers"
                            name="writers"
                            value=" {{ old('writers', $comic?->writers) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea
                            type="text"
                            class="form-control"
                            id="description"
                            name="description"
                            value=""> {{ old('description', $comic?->description) }} </textarea>
                    </div>
                    <p class=" text-danger">I campi contrassegnato con  ( * ) sono obligatori</p>

                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" class="btn btn-success mx-3">
                            <i class="fa-solid fa-floppy-disk"></i>
                        </button>

                    </div>
                  </form>

            </div>
        </div>
    </div>

@endsection
