@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipants</h1>
@if (count($partecipants))
<ul>
	@foreach ($partecipants as $partecipant)
		<user>
			<h2><a href="{{action('PartecipantsController@show', [$partecipant->id])}}">{{$partecipant->nome}}</a><h2>
			<ul>
				<li>{{$partecipant->cognome}}</li>
				<li>{{$partecipant->email}}</li>	
				<li>{{$partecipant->telefono}}</li>
				<li>{{$partecipant->id}}</li>
			</ul>
		</user>
	@endforeach
</ul>
@else
<p>no partecipants</p>
@endif

@stop