@extends('layouts.default')
@section('content')

       <main class="marge top_3">

          <div class="row">
              
              <!--article details here -->
              <div class="col s12 m12 l8">
                
                <!--article title -->
                <blockquote>
                  <h4 class="blue-text article-title truncate">{{$article->titre}}
                  </h4>
                </blockquote>

                <!-- article image -->
                <div class="card-image" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                  <img class="" src="{{asset('storage/upload/image/'.$article->image)}}" width="100%">
                </div>

                <!-- article date, category-->
                <br>
                <p>
                   <em class="orange-text left">Categorie:{{$article->categorie->libelle}}</em>
                  <em class="orange-text right">Date publication:{{$article->created_at}}</em>
                </p>
                <br><br>

                <!-- article description -->
                <p style="text-align: justify;">
                   {{$article->details}}
                </p>

                <!-- article share -->
                <br>
               <!--  <p class="blact-text article-title"><b>Share this article</b></p>
                <br>

                <div class="row" data-aos="zoom-in" data-aos-delay="300">
                  <div class="col s4">
                      <a href="https://www.twitter.com" target="_blanc">
                          <img src="assets/images/social-media/facebook.png" alt="logo facebook" height="30" width="30">
                      </a>
                  </div> 

                  <div class="col s4">
                      <a href="https://www.twitter.com" target="_blanc">
                          <img src="assets/images/social-media/twitter.png" alt="logo twitter" height="30" width="30">
                      </a>
                  </div>
                  <div class="col s4">
                      <a href="https://www.linkedin.com" target="_blanc">
                          <img src="assets/images/social-media/linkedin.png" alt="logo linkedin" height="30" width="30">
                      </a>
                  </div>
                </div> -->
                

                <!-- comments -->

                <p class="black-text article-title"><b>Commentaire</b></p>
                <br>
                <ul class="collection">

                  @foreach($commentaires as $commentaire)
                    <li class="collection-item avatar" href="">

                      <!-- <img src="assets/images/persons/author-1.png" alt="" class="circle"> -->
                      <span class="title truncate"><b>{{$commentaire->user->name}}</b></span>
                      <span class="grey-text f_12">{{$commentaire->created_at}}</span>
                      <p class="black-text">{{$commentaire->commentaire}}
                      </p>

                      <br>

                      <a class="waves-effect waves-dark btn btn-small back z-depth-0" onclick="toggleReply(1)">Rèpondre</a>

                      <div id="reply-form-1" style="display: none;">
                    
                          <form action="{{route('reply_to',$commentaire->id)}}" method="POST" class="m_left_5">
                            @csrf
                              <div class="input-field">
                                  <label for="body">Body</label>
                                  <input type="text" name="commentaire" required=""  validate> 

                              </div>      

                             <button class="waves-effect waves-dark btn btn-small back" type="submit" >Rèpondre</button>
                             <br><br>

                          </form> 

                      </div>
                      @if($commentaire->reply!=NULL)
                      <div class="m_left_5">
                          <br><br>
                          <ul class="collection">

                           @foreach($commentaire->reply as $reply)
                              <li class="collection-item avatar" href="">

                               <!--  <img src="assets/images/persons/author-1.png" alt="" class="circle"> -->
                                <span class="title truncate"><b>{{$reply->user->name}}</b></span>
                                <span class="grey-text f_12">{{$reply->created_at}}</span>
                                <p class="black-text">{{$reply->commentaire}}
                                </p>

                              </li>
                              
                              @endforeach

                          </ul>

                      </div>
                      @endif
                    </li>
                   
                 
                 @endforeach
                </ul>

                <br>

                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col s12 m12 l8">

                      <h6 class="blact-text article-title"><b>Commentaire</b></h6>
                      <!-- <p class="grey-text">lorem ipsum dolar asset</p>
 -->
                      <form onsubmit = "return validateComments();" name="comments" action="{{route('commentaire.store')}}" method="POST">
                        @csrf
                        <div class="row">

                             <!--   <div class="input-field col s12">

                                  <i class="material-icons blue-text prefix">person</i>
                                  <input type="text" name="pseudo" id="pseudo-comment" required="" class="">
                                  <label for="pseudo-comment">Pseudo*</label>
                                </div>

                                <div class="input-field col s12">
                          
                                  <i class="material-icons blue-text prefix">email</i>
                                  <input type="email" name="email" id="email-comment" required="" >
                                  <label for="email-comment">Email*</label>
                                </div>
 -->      
                                <div class="input-field col s12">
                                    <i class="material-icons blue-text prefix">message</i>
                                    <textarea id="content-comment" name="commentaire" class="materialize-textarea h_50" required="" rows="4"></textarea>
                                    <input type="hidden" name="article_id" value="{{$article->id}}">
                                    <label for="content-comment">Commentez</label>   
                                </div>

                                <div class="input-field col s12">
                                  <button class="waves-effect waves-light btn btn-medium back" type="submit">Envoyez<i class="material-icons right"></i></button>               
                                </div>

                        </div>

                      </form>
                      
                    </div>
                </div>

                <br>

                <!--similars articles -->
             <!--  -->
                

              </div>

              <div class="col s12 m12 l4">

                  <!--search bar section-->
                 <!--  <div class="row">
                      <form class="col s12" action="#" method="POST">
                          <div class="app-search">
                            <i class="material-icons mr-2 search-icon">search</i>
                            <input id="search" name="search" type="text" placeholder="Lorem ipsum dolor sit?" class="app-filter" required="">
                          </div>
                      </form>
                  </div>  -->

                  <!--list of categories-->
                  <ul class="collection with-header z-depth-1">
            
                      <li class="collection-header center"><h5>CATEGORIES</h5></li>
                     
                      @foreach($categories as $categorie)
                            <a class="collection-item grey-text text-darken-3 truncate" href="{{route('sorted',$categorie->id)}}" > 
                                {{$categorie->libelle}}<br>
                            </a>
                            @endforeach

                  </ul>

                  <br>

                  <!--list of recent articles-->
                  <ul class="collection with-header z-depth-1">
            
                      <li class="collection-header center"><h5>ACTUALITIES</h5></li>
                     

                     @foreach($infos as $article)
                            <a class="collection-item grey-text text-darken-3 truncate" href="{{route('lirePlus',$article->id)}}" > 
                                {{$article->titre}}<i class="material-icons blue-text right">class</i><br>
                            </a>
                            @endforeach
                  </ul>

                  <br>

                  <!--contacts us -->
                  <!-- <div class="marge_3">

                      <form class="row marge card-panel" onsubmit = "return validateContactMe();" action="" method="POST" name="contactme" >
                          <h5 class="card-title center">CONTACT-US</h5>
                          <div class="input-field col s12">
                              <input id="email" name="email" type="email" class="" required="">
                              <label for="email">Email</label>
                          </div>
                           <div class="input-field col s12">                        
                              <input id="pseudo" name="pseudo" type="text" class="" required="">
                              <label for="email">Pseudo</label>
                          </div>
                          <div class="input-field col s12">                       
                              <textarea id="message" name="message" class="materialize-textarea" required="" rows="4" style="height: 110px;"></textarea>
                              <label for="message">Your message here</label> 
                          </div>
                          <div class="input-field col s12">
                              <button class="btn-large waves-effect waves-light blue" data-aos="zoom-in" data-aos-delay="300" type="submit" style="width: 100%">SEND</button>
                          </div>
                      </form>
                      
                  </div> -->

                  <br>

                  <!--follow us -->
                 
                
              </div>


          </div>


            <!-- flotting action buttons -->
           <!--  <div class="fixed-action-btn">
                <a class="btn-floating btn-large red pulse">
                  <i class="large material-icons white-text">mode_edit</i>
                </a>
                <ul>
                    <!--modal for newsletter-->
                   <!--  <li>
                      <a class="btn-floating blue tooltipped modal-trigger" data-position="left" data-tooltip="Subscribe newsletter" href="#newsletter"><i class="material-icons white-text">favorite</i></a>
                    </li>

                    <li>
                      <a  data-position="left" data-tooltip="Register" href="{{route('register')}}"><i class="material-icons white-text">mode_comment</i></a>
                    </li>

                    <li>
                      <a class="btn-floating blue tooltipped modal-trigger" data-position="left" data-tooltip="Subscribe newsletter" href="#apropos"><i class="material-icons white-text">favorite</i></a>
                    </li>
                </ul>
            </div> -->

            <!-- Newsletter Modal -->
            <!-- <div id="newsletter" class="modal">
                <div class="modal-content">
                    <h4 class="center black-text">Newsletter</h4>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>

                    <form class="row" action="#" method="POST">
                      <div class="col s12 m10 l10">
                        <div class="row">
                          <div class="input-field col s8">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_prefix" type="email" id="email" name="email" class="validate" class="required">
                            <label for="icon_prefix">Your e-mail</label>
                          </div>
                          <div class="input-field col s4">
                            <button class="btn btn-medium waves-effect waves-light back" type="submit" style="width: 100%"><i class="material-icons right">done_all</i>Valider</button>
                          </div>
                        </div>
                      </div>
                    </form>
                </div>

                
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons black-text">close</i></a>
                </div>
            </div>


            <div id="apropos" class="modal">
                <div class="modal-content">
                    <h4 class="center black-text">A propos</h4>
                    <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>

                </div>

                
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons black-text">close</i></a>
                </div>
            </div>  -->
          
        </main>

@endsection