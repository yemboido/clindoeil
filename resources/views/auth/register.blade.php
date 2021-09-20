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
                          <blockquote>Inscription</blockquote>
                         <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mots de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation Mots de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscription') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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



