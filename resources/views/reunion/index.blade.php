@extends('layouts.master2')

@section('title')
    Reunion
@endsection


@include('partials.navbar')


@section('slide')

        <div id="carouselExampleControls" class="carousel slide slide-height-change" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/images/slide1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/images/slide2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/images/slide3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>



@endsection




@section('content')


            <div class="">

            <h1 class="display-4 text-center jumbo"><a href="/reunion/create">Add a post</a></h1>


            


        @foreach($datas as $data)
            
            <div class="jumbotron">
            <hr class="my-4">
            <h1 class="display-4 text-center jumbo"><a href="/reunion/{{$data->id}}">{{$data->title}}</a></h1>
            <h3 class="display-4 text-center jumbo"><a href="/reunion/{{$data->id}}">{{$data->postOwner}}</a></h1>
            <hr class="my-4">
        
            

            <form action="/reunion/{{$data->id}}" method="post">
                @method('delete')
                @csrf 

                <button class="btn btn-danger" type="submit">Delete</button>

            </form>

            </div>

        @endforeach
        
        



@endsection