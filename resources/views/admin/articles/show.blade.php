@extends('layouts/admin')

@section('content')
	
	<div class="main">
		<div class="row">
			 <div class="card-panel">
			 	<table class="striped ">
			 		<tr>
			 			
			 				<img src="{{asset('storage/upload/image/'.$article->image)}}" class="materialboxed"  >
			 		</tr>
			 		<tr>
			 			<td>Auteur</td>
			 			<td>{{$article->user->name}} {{$article->user->email}}</td>
			 			<td>Date publication</td>
			 			<td>{{$article->created_at}}</td>
			 		</tr>

			 		<tr >
			 			<td >Titre</td>
			 			<td style="text-align: justify;" colspan="3">{{$article->titre}}</td>
			 		</tr>
			 		<tr><td >Details</td></tr>
			 		<tr>
			 			<td style="text-align: justify;" colspan="4">{{$article->details}}</td>
			 		</tr>
			 	</table>
			<p>
				
		
		
		
		
			</div>
		</div>		
	</div>
		

	
@endsection
