<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css.bal.style.css')}}">
    <link rel="stylesheet" href="{{asset('css/extra.css')}}">

    <style>
        @font-face {
        font-family: nunito;
        src:url({{asset('fonts/nunito.ttf')}});
        
        }
    
    </style>
    
</head>

<body>
        <!-- Navbar starts here -->

        





<nav class=" navbar-space navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3 mb-5 bg-white rounded id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger color font-change" href="/">RoleManagement</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                

                <li class="nav-item">
                        <a class="nav-link" href="/crud/create">New Post</a>
                    </li>

           
                    <li class="nav-item">
                        <a class="nav-link" href="/registerd">Registerd</a>
                    </li>
                    
                

                    <li class="nav-item">
                        <a class="nav-link" href="/subscriber">Subscriber</a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="/editor">Editors</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Log out</a>
                    </li>
                
                


                
                @guest

                   <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                   <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>

                @endguest
           

                </ul>
            </div>
            </div>
        </nav>



        <!--  user getting section starts here -->

        <div class="add-spcing jumbo-spacing">
            
            <div class="jumbotron">
            <h1 class="display-4 text-center">Welcome To Admin Panel</h1>
            <hr class="my-4">

            
            <div class="container">


                    <table class="table table-bordered">
                            
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Change Role</th>
                                </tr>
                            </thead>
                        @foreach($datas as $data)

                                <tbody>
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->role}}</td>

                                        <td>
                                            
                                            <form action="role/{{$data->id}}" method="POST">

                                                @method('patch')
                                                @csrf 


                                                <select name ="role" class="custom-select my-1 mr-sm-2 select-width">
                                                    <option selected>{{$data->role}}</option>
                                                    <option value="subscriber">subscriber</option>
                                                    <option value="editor">editor</option>
                                                    <option value="admin">admin</option>
                                                </select> 

                                                <button class="btn btn-secondary" type="submit">Update</button>

                                              
                              
                                            </form>

                                        </td>

                                        

                                        
                                    </tr>

                                </tbody>
                        @endforeach
                        

                        </table>


                            

            </div>
             
            
            

        
            </div>
        
        </div>



        <!--  user getting section ends here -->

   
                


</body>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>