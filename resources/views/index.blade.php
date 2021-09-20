<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Clindoeil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<section class="black">
  <div class="carousel carousel-slider" data-indicators="true">


    <div class="carousel-fixed-item">
      <div class="container">
        <h1 class="white-text">Materialize Carousel</h1>
        <a class="btn waves-effect white grey-text darken-text-2" href="https://codepen.io/collection/nbBqgY/" target="_blank">button</a>
      </div>
    </div>;

     @foreach(App\Models\Publicite::where('dateFin','>=',date('Y-m-d'))->get()  as $publicite)       
    <div class="carousel-item red lighten-2 white-text" href="#one!">
      <div class="container">
         <img src="{{asset('storage/upload/publicite/'.$publicite->image)}}" style="height:400px;">  
      </div>  
    </div>
     @endforeach 
  </div>
</section>




<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script src='https://codepen.io/j_holtslander/pen/pLNzQb.js'></script>
<script  src="{{asset('assets/js/script.js')}}"></script>

<script src='https://codepen.io/j_holtslander/pen/pLNzQb.js'></script>
</body>
</html>
