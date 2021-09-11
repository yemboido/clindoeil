@extends('layouts/admin')

@section('content')


    <div class="main">
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

            <div class="row">

                <div class="col s12 m12 l12">

					<table>
						<tr>
							<th>Nom</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								<a href="{{route('users.edit',$user->id)}}">Modifier profile</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
	</div>

@endsection