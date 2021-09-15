<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Clindoeil</title>

      
        <!-- Animation -->
        <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/aos.min.css')}}" rel="stylesheet">
        
        <!-- Materialize  -->
        <link href="{{asset('assets/css/materialize.min.css')}}" type="text/css" rel="stylesheet"/>

        <!-- Custom Style -->
        <link href="{{asset('assets/css/main.css')}}" type="text/css" rel="stylesheet"/>
        <link href="{{asset('assets/css/style-blog.css')}}" type="text/css" rel="stylesheet"/>

        <!-- Material Icon -->
        <link href="{{asset('assets/iconfont/material-icons.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  
    <!-- Compiled and minified JavaScript -->
   
        
    </head>

    <body id="home">

        <!-- navbar start -->

        <div class="navbar">

            <nav class="nav-center back z-depth-0">
                <div class="marge">
                  <div class="nav-wrapper">
                    <a href="{{route('index')}}" class="brand-logo"><img src="{{asset('assets/images/logo.jpeg')}}" style="width: 100px"></a>
                    <a href="#" data-target="side_nav" class="sidenav-trigger" >
                      <i class="material-icons">menu</i>
                    </a>              
                    <ul class="right hide-on-med-and-down">
                     
                     

                      @if (Auth::guest())
                       <li> <a href="{{route('register')}}" class="white-text">Inscription</a></li>
                      <li> <a href="{{route('login')}}" class="white-text">Connexion</a></li>
                      @else
                 

                      <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
                      <ul id="dropdown1" class="dropdown-content">
                        <li>
                <a href="{{route('logout')}}"  
                onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><i class="material-icons blue-text">exit_to_app</i>Deconnexion</a>           
            </li>

            @if(Auth::user()->role == "admin")
             <li>
            <a href="{{route('admin')}}">Dashboard</a>           
            </li> 
            @endif
             <li>
            <a href="{{route('profile',Auth::user()->id)}}">Profile</a>           
            </li>  


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
              </form>
               
                   
                     </ul>
                      </li>
                    @endif
                      


                    </ul>
                  </div>
                </div>
            </nav>

            <!--sidenav-->
            <ul id="side_nav" class="sidenav back">     
              <li>
                <a href="#" class="white-text"><i class="material-icons white-text">home</i>Home</a>
              </li>
              
              <li>
                <a href="{{route('login')}}" class="white-text"><i class="material-icons white-text">lock_outline</i>Connexion</a>
              </li>              
            </ul>

        </div>


        @yield('content')


          <footer class="page-footer back">
            <div class="marge">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h3 class="white-text">Clindoeil</h3>
                
                  <div>  
                   <a href="#" class="waves-effect waves-light"> <img src="{{asset('assets/images/social-media/facebook.png')}}" width="60" height="60"> </a>
                  <a href="#" class="waves-effect waves-light "> <img src="{{asset('assets/images/social-media/twitter.png')}}" width="60" height="60"> </a>
                  <a href="#" class="waves-effect waves-light " target="blank"> <img src="{{asset('assets/images/social-media/linkedin.png')}}" width="60" height="60"> </a>

                  </div>

           
                </div>
                
                <div class="col l3  s12">
                  <h5 class="white-text">Contact</h5>
                  <ul>




                    <li>yenikyonli@gmail.com</li>
                    <li>soumanabelkobarry74@gmail.com</li>
                    <li>amidoukone2@gmail.com</li>
                    <li>notougma72@gmail.com</li>
                    <li>00 226 74634444/72708725/78926692/60257760</li>
                    
                    <li>Burkina Faso - Ouagadougou</li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © <script>document.write(new Date().getFullYear());</script> 
              </div>
            </div>
          </footer>

        <!--footer end -->

      <script type="text/javascript">
         $('document').ready(function (){
       $(".dropdown-trigger").dropdown();
    })

        
      </script>
        <!-- Jquery  -->
        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

        <!-- Animations script -->
        <script src="{{asset('assets/js/aos.min.js')}}"></script>

        <!-- Materialize  -->
        <script src="{{asset('assets/js/materialize.min.js')}}"></script>

        <!-- Custom script -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/form-validate.js')}}"></script>
        
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>