@extends('layouts.master')

@section('title')
     {{$data->title}}
@endsection


@section('content')

   
    
        
        <div class="add-spcing jumbo-spacing">
            
            <div class="jumbotron">
                    <h1 class="display-4 text-center">Create a Post!</h1>
                    <hr class="my-4">
                    
                    
                <form  class="add-spacing" method="POST" action="/reunion/{{$data->id}}">

                    @method('put')

                    {{csrf_field()}}


                    <div class="form-group">
                    <label for="email">Title:</label>
                    <input type="text" class="form-control" value="{{$data->title}}" name="title" required>
                    </div>




                    <label for="exampleFormControlTextarea1">Description:</label>
                    <textarea class="form-control" name="description" rows="3" required></textarea>

                    <div class="margin-bottom-button">

                    <button type="submit" class="btn btn-secondary" id="margin-bottom-button">Update</button>
                    </div>

                    
                    </form>
                
            </div>
            
        </div>

@endsection
