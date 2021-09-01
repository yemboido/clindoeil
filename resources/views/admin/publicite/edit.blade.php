@extends('layouts/admin')

@section('content')
        <!--here place content -->
        <div class="main">
            
            <div class="row">

                <div class="col s12 m12 l12">
                    <form method="post" action="{{route('publicite.update',$publicite->id)}}" enctype="multipart/form-data">
                         @csrf
                                 @method('PUT')

     
                        <div class="card-panel">
                            <blockquote>Modifier Publicite</blockquote>

                            <div class="input-field">
                                <label for="titre">Date debut</label>
                                <input type="date" id="titre" name="dateDebut" required="" value="{{$publicite->dateDebut}}">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>

                            <div class="input-field">
                                <label for="titre">Date fin</label>
                                <input type="date" id="titre" name="dateFin" required="" value="{{$publicite->dateFin}}">
                                 @error('titre') <div class="error text-danger" >{{ $message }}</div> @enderror
                            </div>

                            <div class="file-field input-field">
                                <div class="btn">
                                   <span>Image</span>
                                   <input type="file" name="image" id="icone" required="" value="{{$publicite->image}}">
                                </div>

                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="image" id="icone" type="text" required="" value="{{$publicite->image}}">
                                </div>
                            </div>

                            <button class="waves-effect waves-dark orange btn-large center" type="submit">Modifier</button>

                        </div>
                </form>
                </div>
                
            </div>     

                           
        </div>

  @endsection