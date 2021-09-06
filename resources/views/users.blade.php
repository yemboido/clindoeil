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
                 <table class="table table-bordered table-stripped table-primary">
                   <tr>
                     <th>Nom</th>
                     <th>Email</th>
                     <th>Role</th>
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                    @foreach($menbres as $user)
                   <tr>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->role}}</td>
                     <td>{{$user->status}}</td>
                     <td>
                      <form action="{{route('desactiver')}}" method="post">
                        @csrf
                        <input type="hidden" name="membre_id" value="{{$user->id}}">
                        <button type="submit">desactiver</button>
                      </form>
                       
                     </td>
                   </tr>
                   @endforeach
                 </table>

              </div>


              
           
          
        </main>

        <!--content end -->


   @endsection