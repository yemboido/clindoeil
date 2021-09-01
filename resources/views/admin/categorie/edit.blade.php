@extends('layouts/admin')

@section('content')
        <!--here place content -->
        <div class="main">
            
            <div class="row">
                <form method="post" action="{{route('categories.update',$categorie->id)}}">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <blockquote>Nouvelle Categorie </blockquote>
                          
                           @csrf
                @method('PATCH')
                            <div class="input-field">
                                <label for="titre">Titre</label>
                                <input type="text" id="titre" name="libelle" required="" placeholder="Titre de la categorie"
                                 value="{{$categorie->libelle}}">
                            </div>
                            
                            

                            <button class="waves-effect waves-dark orange btn-large center" type="submit">Modifier</button>

                        </div>
                    </div>
               </form> 
            </div>     

                           
        </div>

 @endsection