@extends('app')

@section('title')
{{$partecipant->name}}
@stop

@section('content')
<h1>{{$partecipant->name}}</h1>
<ul>
	<li>{{$partecipant->cognome}}</li>
    <li>{{$partecipant->email}}</li>		
    <li>{{$partecipant->telefono}}</li>    
	<li>{{$partecipant->id}}</li>
</ul>
@stop