<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PartecipantRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
			'nome' => ['required', 'max:255'],
			'cognome' => ['required', 'max:255'],   		
     		
            'email' => ['required', 'email', 'unique:users' . ($this->method() == 'POST' ? '' : (',email,' . $this->route('users')->id))],
       		'telefono' => ['required', 'max:20'],		
        
            //
        ];
    }
}
