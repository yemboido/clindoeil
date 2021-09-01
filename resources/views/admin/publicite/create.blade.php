@extends('layouts/admin')

@section('content')
        <!--here place content -->
        <div class="main">
            
            <div class="row">

                <div class="col s12 m12 l12">
                    <form method="post" action="{{route('publicite.store')}}" enctype="multipart/form-data">
                         @csrf
                        <div class="card-panel">
                            <blockquote>Nouvelle publicite</blockquote>

                            
                            
                           <div class="input-field">
                                <label for="titre">Date debut</label>
                                <input type="date" id="titre" name="dateDebut" required="" placeholder="Titre de la categorie">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>

                            <div class="input-field">
                                <label for="titre">Date fin</label>
                                <input type="date" id="titre" name="dateFin" required="" placeholder="Titre de la categorie">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>

                            <div class="file-field input-field">
                                <div class="btn">
                                   <span>Image</span>
                                   <input type="file" name="image" id="icone" required="">
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="image" id="icone" type="text" required="" placeholder="Parcourir">
                                </div>
                            </div>

                         

                            <button class="waves-effect waves-dark orange btn-large center" type="submit">Publier</button>

                        </div>
                </form>
                </div>
                
            </div>     

                           
        </div>

  @endsection