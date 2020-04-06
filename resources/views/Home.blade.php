@extends('layouts.master')

@section('title')
    Home
@endsection


@section('content')

   
    
        
        <div class="add-spcing jumbo-spacing">

            @foreach($alldata as $data)        
            
                <div class="jumbotron ">
                <h1 class="display-4 jumbo"><a href="/crud/{{$data->id}}">{{$data->title}}</a></h1>
                

                <form action="/crud/{{$data->id}}" method="post">
            
                    @method('DELETE')
                    @csrf

                    
                    
                    

                    @if(Auth::check())
                        @if(Auth::user()->id == $data->id)
                    
                            <button class="btn btn-secondary" type="submit">Delete</button>
                        @endif

                    @endif
                    
            
                </form>

                
                
                </div>
            @endforeach
        
            
        
        </div>

@endsection