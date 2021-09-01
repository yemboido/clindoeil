@extends('layouts/admin')

@section('content')
        <!--here place content -->
        <div class="main">
            
            <div class="row">
                <form method="post" action="{{route('categories.store')}}">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <blockquote>Nouvelle Categorie</blockquote>
                            @csrf
                            <div class="input-field">
                                <label for="titre">Titre</label>
                                <input type="text" id="titre" name="libelle" required="" placeholder="Titre de la categorie">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>
                            
                            

                            <button class="waves-effect waves-dark orange btn-large center" type="submit">Valider</button>

                        </div>
                    </div>
               </form> 
            </div>     

                           
        </div>

  @endsection