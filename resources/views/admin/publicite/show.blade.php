@extends('layouts/admin')

@section('content')
	
		<p>{{$article->id}}
		{{$article->img}}
		{{$article->details}}
		{{$article->users_id}}
		{{$article->created_at}}</p>
	
@endsection

