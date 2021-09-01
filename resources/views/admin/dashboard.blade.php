
@extends('layouts.admin')
@section('content')
        <!--here place content -->
        <div class="main">
            
            <!-- notification alert-->
            <div class="row" id="alert_box">
                <div class="col s12">
                    <div class="card green darken-1">
                      <div class="row">
                        <div class="col s10">
                          <div class="card-content white-text">
                            <p>Bienvenue {{Auth::user()->name}} sur le dashboard</p>
                          </div>
                        </div>
                        <div class="col s2">
                          <i class="material-icons icon_style" id="alert_close">close</i>
                        </div>
                      </div>
                      
                    </div>
                </div>
            </div>  

            <!--card infos-->
     <!--        <div class="row center">
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable green darken-1">
                            <i class="material-icons medium white-text">class</i>
                            <h5 class="white-text">Articles</h5>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable blue darken-1">
                            <i class="material-icons medium white-text">local_offer</i>
                            <h5 class="white-text">Catégories</h5>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable cyan">
                            <i class="material-icons medium white-text">favorite</i>
                            <h5 class="white-text">Followers</h5>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable teal darken-1">
                            <i class="material-icons medium white-text">pan_tool</i>
                            <h5 class="white-text">Asks</h5>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable brown darken-1">
                            <i class="material-icons medium white-text">chat</i>
                            <h5 class="white-text">Messages</h5>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col s12 m4 l4">
                        <div class="card-panel hoverable orange darken-1">
                            <i class="material-icons medium white-text">group</i>
                            <h5 class="white-text">Bloggers</h5>
                        </div>
                    </div>
                </a>
            </div>  -->


            <!--last asks and messages-->
            <div class="row">

                <div class="col s12 m12 l6">
                    <div class="card-panel">
                        <blockquote>Dernier Article</blockquote>
                        <table>
                            <thead>
                              <tr>
                                  <th>Titre</th>
                                  <th>Auteur</th>
                                  <th>Voir plus</th>
                              </tr>
                            </thead>

                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->titre}}</td>
                                    <td class="truncate">{{$article->user->email}}</td>
                                    <td><a href="{{route('articles.show',$article->id)}}" class="btn-small waves-effect waves-light back z-depth-0"><i class="material-icons white-text">remove_red_eye</i></a></td>
                                </tr>
                                @endforeach

                                
                              
                            </tbody>
                          </table>
                    </div>
                </div>

                <!-- <div class="col s12 m12 l6">
                    <div class="card-panel">
                        <blockquote>Derniers Messages</blockquote>
                        <table>
                            <thead>
                              <tr>
                                  <th>Message</th>
                                  <th>Voir plus</th>
                              </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Dolore occaecat do. Lorem ipsum ...</td>
                                    <td><a href="#" class="btn-small waves-effect waves-light back z-depth-0"><i class="material-icons white-text">remove_red_eye</i></a></td>
                                </tr>

                                

                            </tbody>
                          </table>
                    </div>
                    
                </div> -->
                
                
            </div>     

                           
        </div>

@endsection      