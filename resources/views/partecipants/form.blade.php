<div class="form-group">
	{!! Form::label('nome', 'Nome') !!}
	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cognome', 'Cognome') !!}
	{!! Form::text('cognome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('telefono', 'Telefono') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	@if ($create)
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
	@else
	{!! Form::email('email', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>