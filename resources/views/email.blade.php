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

        <title>Clindoeil</title>

        <!-- Fav Icon -->
      

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
       
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @endif
        <form action="{{ route('send.email') }}" method="post">
          @csrf
          <p>Entrer votre email pour recevoir votre nouveau mots de passe que vous pouvez modifier plutard</p>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                @error('email')
                  <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
            
          
            <div class="form-group">
                <button type="submit" class="btn btn-success save-data">Email</button>
            </div>
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