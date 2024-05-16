@extends('layout.main')


@section('content')

<div class="container">
    <div class="row">

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
                    <i class="fa-solid fa-eye"></i>
                 </a>
                 <a href="#" class="btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                 </a>
                </div>
              </div>


        </div>

        @endforeach


    </div>
</div>

@endsection
