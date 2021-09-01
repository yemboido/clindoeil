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
</div>
                <!-- article share -->
               

                <!-- comments -->

               <!--  <p class="black-text article-title"><b>Commentaires</b></p>
                <br>
                <ul class="collection">
                    <li class="collection-item avatar" href="">

                      <img src=" {{asset('assets/images/persons/author-1.png')}}" alt="" class="circle">
                      <span class="title truncate"><b>auteur</b></span>
                      <span class="grey-text f_12">2 days ago</span>
                      <p class="black-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </p>

                      <br>

                      <a class="waves-effect waves-dark btn btn-small back z-depth-0" onclick="toggleReply(1)">Reply</a>

                      <div id="reply-form-1" style="display: none;">
                    
                          <form action="#" method="POST" class="m_left_5">
                              <div class="input-field">
                                  <label for="body">Body</label>
                                  <input type="text" name="body" required="" value="#" validate>                    
                              </div>      

                             <button class="waves-effect waves-dark btn btn-small back" type="submit" >Reply</button>
                             <br><br>

                          </form> 

                      </div>

                      <div class="m_left_5">
                          <br><br>
                          <ul class="collection">

                              <li class="collection-item avatar" href="">

                                <img src=" {{asset('assets/images/persons/author-1.png')}}" alt="" class="circle">
                                <span class="title truncate"><b>Full Basta</b></span>
                                <span class="grey-text f_12">2 days ago</span>
                                <p class="black-text">d est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>

                              </li>

                              <li class="collection-item avatar" href="">

                                <img src="assets/images/persons/author-1.png" alt="" class="circle">
                                <span class="title truncate"><b>Endenvoe full</b></span>
                                <span class="grey-text" style="font-size: 12px;">2 days ago</span>
                                <p class="black-text">d est laborum.Lorem ipsum d .
                                </p>

                              </li>

                          </ul>

                      </div>

                    </li>
                    <li class="collection-item avatar" href="#">
                      <img src="{{asset('assets/images/persons/author-1.png')}}" alt="" class="circle">
                      <span class="title truncate"><b>Obus 404</b></span>
                      <span class="grey-text" style="font-size: 12px;">2 days ago</span>
                      <p class="black-text">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.
                      </p>
                      <br>
                      <a class="waves-effect waves-dark btn btn-small back z-depth-0" onclick="toggleReply(2)">Reply</a>

                      <div id="reply-form-2" style="display: none;">
                    
                          <form action="#" method="POST" class="m_left_5">
                              <div class="input-field">
                                  <label for="body">Body</label>
                                  <input type="text" name="body" required="" value="#" validate>                    
                              </div>      

                             <button class="waves-effect waves-dark btn btn-small back" type="submit" >Reply</button>
                             <br><br>

                          </form> 

                      </div>
                    </li>
                </ul>

                <br>

                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col s12 m12 l8">

                      <h6 class="blact-text article-title"><b>Comment</b></h6>
                      <p class="grey-text">Donnez votre avis sur cet article</p>

                      <form onsubmit = "return validateComments();" name="comments" action="#" method="POST">

                        <div class="row">

                               <div class="input-field col s12">

                                  <i class="material-icons blue-text prefix">person</i>
                                  <input type="text" name="pseudo" id="pseudo-comment" required="" class="">
                                  <label for="pseudo-comment">Pseudo*</label>
                                </div>

                                <div class="input-field col s12">
                          
                                  <i class="material-icons blue-text prefix">email</i>
                                  <input type="email" name="email" id="email-comment" required="" >
                                  <label for="email-comment">Email*</label>
                                </div>

                                <div class="input-field col s12">
                                    <i class="material-icons blue-text prefix">message</i>
                                    <textarea id="content-comment" name="content" class="materialize-textarea h_50" required="" rows="4"></textarea>
                                    <label for="content-comment">votre Avis</label>   
                                </div>

                                <div class="input-field col s12">
                                  <button class="waves-effect waves-light btn btn-medium back" type="submit">Envoyer<i class="material-icons right">send</i></button>               
                                </div>

                        </div>

                      </form>
                      
                    </div>
                </div>

                <br>
<!--
                similars articles
                <br>
                <p class="black-text article-title"><b>Articles similaire</b></p>
                <br>

                <div class="row">
                      
                      article 1 
                      <div class="col s12 m6 l6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">


                           <div class="card-panel border-radius-6 mt-10 card-animation-1">
                             
                              <a href="#">
                                <img class="border-radius-8 z-depth-4 image-n-margin" src=
                                "{{asset('assets/images/articles/article-1.jpg')}}" alt="Lorem ipsum<" width="100%" height="200px;">
                              </a>
                            
                              <h6 class="mt-5 truncate">
                                <a href="#" >Lorem ipsum</a>
                              </h6>
                             
                              <span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris[...]
                              </span>
                             
                              <h6 class="mt-5">
                                <a href="#" class="tooltipped" data-position="right" data-tooltip="filter by category">Category1</a>
                              </h6>
                              <div class="row mt-4">
                               
                                <div class="col s7 mt-1">
                                  <img src="assets/images/persons/author-1.png" alt="authorname" class="circle mr-3 width-30 vertical-text-middle" height="55" width="55">
                                  <span class="pt-2"><a href="#"  class="tooltipped" data-position="right" data-tooltip="Consult the articles of this blogger">Author name</a></span>
                                </div>
                               
                                <div class="col s5 mt-3 right-align social-icon"> <span class="ml-3 vertical-align-top">02 Jun 2020</span>
                                </div>
                              </div>
                            </div>
                        
                      </div>

                     
               

                </div> 
                

              </div>

            
          </div>
 -->

           
            <div class="col s10 l4">

                        <!--search bar section-->
                      

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

                       
                      
                    </div>

          
        </main>

@endsection