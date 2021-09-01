@extends('layouts/admin')

@section('content')
        <!--here place content -->
        <div class="main">
            
            <div class="row">

                <div class="col s12 m12 l12">
                    <form method="post" action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data">
                         @csrf
                                 @method('PUT')

     
                        <div class="card-panel">
                            <blockquote>Modifier Article</blockquote>

                            <div class="input-field">
                                <label for="titre">Titre</label>
                                <input type="text" id="titre" name="titre" value="{{$article->titre}}" placeholder="Titre de l'article">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>
                            
                            <div class="input-field">
                                <select name="categorie_id" value="{{$article->categorie_id}}">
                                    <option value='' disabled >Choisir une categorie</option>
                                    @foreach($categories as $cat)
                                    <option value='{{$cat->id}}'>{{$cat->libelle}}</option>
                                  @endforeach
                                </select>
                                <label>Catégorie</label>      
                            </div>


                            <div class="file-field input-field">
                                <div class="btn">
                                   <span>Image</span>
                                   <input type="file" name="image" id="icone" required="" 
                                   value="{{$article->image}}">
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="image" id="icone" type="text" required="" placeholder="Parcourir" value="{{$article->image}}">
                                </div>
                            </div>

                            <div class="input-field">
                                <label for="description">Details</label>
                                 <textarea id="description" name="details" class="materialize-textarea h_300" required="" >{{$article->details}}</textarea>   
                            </div>

                            <button class="waves-effect waves-dark orange btn-large center" type="submit">Modifier</button>

                        </div>
                </form>
                </div>
                
            </div>     

                           
        </div>

  @endsection