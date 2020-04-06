





<nav class=" navbar-space navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3 mb-5 bg-white rounded id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger color font-change" href="/">RoleManagement</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                

                

                @auth
                    
                
                
                    <li class="nav-item">
                        <a class="nav-link" href="/reunion">Reunion</a>
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

                    
                
                @endauth


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