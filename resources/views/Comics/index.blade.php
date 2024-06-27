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
            <div class="col">



                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Titolo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Tipo</th>
                            <th scope="ms-4">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>

                                <td>{{$comic->title}}</td>
                                <td>{{$comic->series}}</td>
                                <td>{{$comic->price}}</td>
                                <td>{{$comic->type}}</td>
                                <td>
                                    <div class="card-body d-flex  ">
                                        <a href="{{route('comics.show', $comic)}}" class="btn">
                                        <i class="fa-solid fa-eye text-success"></i>
                                    </a>

                                    <a href="{{route('comics.edit', $comic)}}" class="btn">
                                        <i class="fa-solid fa-pencil text-warning"></i>
                                        </a>

                                        @include('partials.formDelete')


                                    </div>
                                </td>
                            </tr>
                         @endforeach

                    </tbody>
                  </table>








                {{-- <div class="card my-5" style="width: 18rem;">
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



                </div> --}}


        </div>

        <div class="row justify-content-center text-white ">
            <div class="col-md-6 text-white">
                {{ $comics->links('pagination::bootstrap-5') }}
            </div>
        </div>


    </div>
</div>

@endsection
