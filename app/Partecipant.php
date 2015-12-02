<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partecipant extends Model
{
	//serve in fase di aggiornamento, a dire al programma che i dati devono essere accettati. (sono sicuri)
	protected $fillable = ['nome','cognome','email','telefono'];
}
