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

        <title>Projet</title>

        <!-- Fav Icon -->
        <link rel="icon" href="assets/images/fav-icon.png">

        <!-- Animation -->
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/aos.min.css" rel="stylesheet">
        
        <!-- Materialize  -->
        <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet"/>

        <!-- Custom Style -->
        <link href="assets/css/main.css" type="text/css" rel="stylesheet"/>
        <link href="assets/css/style-blog.css" type="text/css" rel="stylesheet"/>

        <!-- Material Icon -->
        <link href="assets/iconfont/material-icons.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        
    </head>

    <body id="home">

        <main class="marge top_3">

            <div class="row">

                <div class="col s12 m12 l6 offset-l3">
                            
                   <div class="card">

                       <div class="card-image center">
                           <img src="assets/images/persons/author-2.jpg" class="responsive-img">
                        </div>

                        <div class="card-content">
                          <blockquote>Connexion</blockquote>
                          <form  method="POST" action="{{ route('login') }}">
                        @csrf

                             <div class="input-field">
                                  <i class="material-icons prefix icone_color">person_outline</i>
                                  <input type="email" id="email" name="email" required="" value="" class="validate"

                                  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                

                                  <label for="email" class="center-align">Email</label>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              </div>


                              <div class="input-field">
                                  <i class="material-icons prefix icone_color">lock_outline</i>
                                  <input type="password" id="password" name="password" required="" name="password" required autocomplete="current-password">
                                  <label for="password">Mots de passe</label>

                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>

                                    

                             <button class="waves-effect waves-dark btn-large back w_100" type="submit" style="">Connexion</button>

                             <a href="{{route('register')}}">Inscription</a>

                          </form>
                                      
                        </div>
                     </div>
                         
              </div>

            </div>
          
        </main>
      
        <!-- Jquery  -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <!-- Animations script -->
        <script src="assets/js/aos.min.js"></script>

        <!-- Materialize  -->
        <script src="assets/js/materialize.min.js"></script>

        <!-- Custom script -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/form-validate.js"></script>
        

    </body>
</html>