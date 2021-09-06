@extends('layouts/admin')

@section('content')


    <div class="main">
            
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