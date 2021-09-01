@extends('layouts/admin')
        <!-- breadcrumb end -->
@section('content')
        <main class="main">

          <div class="row">
              <!--form here -->
               @if(session()->has('message'))
             <div class="row" id="alert_box">
                <div class="col s12">
                    <div class="card green darken-1">
                      <div class="row">
                        <div class="col s10">
                          <div class="card-content white-text">
                           
                         {{session('message')}}
          
                          </div>
                        </div>
                        <div class="col s2">
                          <i class="material-icons icon_style" id="alert_close">close</i>
                        </div>
                      </div>
                      
                    </div>
                </div>
            </div> 
              @endif

              
              <div class="col s12 m12 l8">
                      <a class="btn btn-primary" href="{{route('users.create')}}">ajouter</a>
                  <div class="row">

                    @foreach($menbres as $user)
                    <div class="col s4 m5 15" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                      <div class="card">
                        <div class="card-image">
                          <img class="" src="assets/images/persons/author-2.jpg" height="225;">
                          <span class="card-title orange_txt"></span>
                          
                        </div>
                        <div class="card-content center">
                          <p>{{$user->name}} {{$user->prenom}}</p>
                          <p>{{$user->email}}</p>
                        </div>
                        <!-- <div class="card-action center">
                          <a href="#" class="waves-effect waves-light">Ses articles</a>
                        </div> -->
                        
                      </div>
                    </div>
                    @endforeach
                  </div>

              </div>


               <div class="col s12 m12 l4">

                  <!--search bar section-->
                  <div class="row ">
                      <form class="col s12" action="#" method="POST">
                          <div class="app-search">
                            <i class="material-icons mr-2 search-icon">search</i>
                            <input id="search" name="search" type="text" placeholder=":)" class="app-filter" required="">
                          </div>
                      </form>
                  </div> 

                </div>

           
          
        </main>

        <!--content end -->


   @endsection