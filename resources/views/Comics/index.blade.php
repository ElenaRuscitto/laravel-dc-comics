@extends('layout.main')


@section('content')

<div class="container">
    <div class="row">

        @foreach ($comics as $comic)


        <div class="col">
            <div class="card my-5" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic->series}}</h6>
                  <p>{{$comic->price}}</p>
                </div>

                <div class="card-body d-flex justify-content-center ">
                  <button href="#" class="btn">
                    <i class="fa-solid fa-eye"></i>
                 </button>
                 <button href="#" class="btn">
                    <i class="fa-solid fa-cart-shopping"></i>
                 </button>
                </div>
              </div>


        </div>

        @endforeach


    </div>
</div>

@endsection
