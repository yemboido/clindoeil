<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Google meta for SEO start -->
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="=" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />

        <title>Projet Admin</title>

        <!-- Fav Icon -->
<link rel="icon" href="{{asset('assets/images/fav-icon.png')}}">

        <!-- Animation -->
<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/aos.min.css')}}" rel="stylesheet">
        
        <!-- Materialize  -->
<link href="{{asset('assets/css/materialize.min.css')}}" type="text/css" rel="stylesheet"/>

        <!-- Custom Style -->
<link href="{{asset('assets/css/main.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('assets/css/admin.css')}}" type="text/css" rel="stylesheet"/>

        <!-- Material Icon -->
<link href="{{asset('assets/iconfont/material-icons.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
        
    </head>

    <body>

        <!--Top Navbar -->

        <nav class="blue">
            
             <div class="nav wrapper">
                 
                 <div class="container">
                     
                    <a href="" class="brand-logo center hide-on-small-and-down">Administration</a>
                    <a href="" class="button-collapse sidenav-trigger show-on-large" data-target="sidenav"><i class="material-icons">menu</i></a>

                    <!-- <ul class="right hide-on-small-and-down collection" style="margin: 0px; border: 0px solid transparent">
                        <li class="collection-item avatar" style="background: transparent;"><a class="tooltipped" data-position="bottom" data-tooltip='Welcome Blogger name'><i class="material-icons white blue-text circle">account_circle</i></a></li>
                    </ul> -->

                 </div>

             </div>

        </nav>

        <!--Sidenav -->

        <ul class="sidenav sidenav-fixed" id="sidenav">
           
            <li>
                <a href="{{route('admin')}}"><i class="material-icons blue-text">dashboard</i>Dashboard</a>           
            </li>

            <li>
                <a href="{{route('articles.index')}}"><i class="material-icons blue-text">class</i>Articles</a>           
            </li>

            <li>
                <a href="{{route('categories.index')}}"><i class="material-icons blue-text">local_offer</i>Catégories</a>           
            </li>

           

<!--             <li>
                <a href="#"><i class="material-icons blue-text">pan_tool</i>Questions</a>           
            </li>
 -->
             <li>
                <a href="{{route('users.index')}}"><i class="material-icons blue-text">group</i>Membres</a>           
            </li>

            <li>
                <a href="{{route('publicite.index')}}"><i class="material-icons blue-text">group</i>publicite</a>           
            </li>


            <li>
                <div class="divider"></div>
            </li>

            <li>
                <a href="{{route('index')}}"><i class="material-icons blue-text">home</i>Retour au site</a>           
            </li>

            <li>
                <a href="{{route('logout')}}"  
                onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"><i class="material-icons blue-text">exit_to_app</i>Deconnexion</a>           
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
              </form>
        </ul>


@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Erreurs dans votre saisies.<br><br>
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
        @yield('content')


        <!-- Jquery  -->
        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

        <!-- Animations script -->
        <script src="{{asset('assets/js/aos.min.js')}}"></script>

        <!-- Materialize  -->
        <script src="{{asset('assets/js/materialize.min.js')}}"></script>

        <!-- Custom script -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/form-validate.js')}}"></script>
        

    </body>
</html>