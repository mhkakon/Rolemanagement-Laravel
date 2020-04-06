@extends('layouts.master')

@section('title')
    {{$data->title}}
@endsection


@section('content')

   
    
        
        <div class="add-spcing jumbo-spacing">
            
            <div class="jumbotron">
            <h1 class="display-4 ">{{$data->title}}</h1>
            <hr class="my-4">
            
            <ul>
                <li>
                <p class="lead ">{{$data->description}}</p>
                
                </li>

            </ul>
           
            

            
            
            <hr class="my-4">
            
            <a href="/crud/{{$data->id}}/edit" class="btn btn-secondary" role="button">Edit</a>
        
            </div>
        
        </div>

@endsection