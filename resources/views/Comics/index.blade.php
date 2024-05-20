@extends('layout.main')


@section('content')

<div>
    <div class="container ">
        <div class="row">
           <h1 class="text-center mt-5">Fumetti</h1>

            @if (session ('delete'))
              <div class="alert alert-success" role="alert">
                {{ session('delete') }}
              </div>
            @endif
            @foreach ($comics as $comic)


            <div class="col">
                <div class="card my-5" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>

                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic->series}}</h6>
                      <p>{{$comic->price}}</p>
                      <p>{{$comic->type}}</p>
                    </div>

                    <div class="card-body d-flex justify-content-center ">
                      <a href="{{route('comics.show', $comic)}}" class="btn">
                        <i class="fa-solid fa-eye text-success"></i>
                     </a>

                     <a href="{{route('comics.edit', $comic)}}" class="btn">
                        <i class="fa-solid fa-pencil text-warning"></i>
                     </a>

                 @include('partials.formDelete')


                    </div>
                  </div>


            </div>

            @endforeach


        </div>

        <div class="row justify-content-center text-white ">
            <div class="col-md-6 text-white">
                {{ $comics->links('pagination::bootstrap-5') }}
            </div>
        </div>


    </div>
</div>

@endsection
