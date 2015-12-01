@extends('app')

@section('title')
Edit partecipant
@stop

@section('content')
<h1>Edit partecipant </h1>
<hr />
{!! Form::model($partecipant, ['method' => 'PATCH', 'action' => ['PartecipantsController@update', $user->id]]) !!}
	@include('partecipants.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop