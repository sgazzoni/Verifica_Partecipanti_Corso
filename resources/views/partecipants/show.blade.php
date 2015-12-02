@extends('app')

@section('title')
{{$partecipant->nome}}
@stop

@section('content')
<h1>{{$partecipant->nome}}</h1>
<ul>
	<li>{{$partecipant->cognome}}</li>
    <li>{{$partecipant->email}}</li>		
    <li>{{$partecipant->telefono}}</li>    
	<li>{{$partecipant->id}}</li>
</ul>
@stop