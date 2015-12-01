<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Partecipant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartecipantsRequest;

class PartecipantsController extends Controller
{
	
	public function __construct() {
		//$this->middleware('auth', ['only' => 'index']);
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $partecipants = Partecipant::latest()->get();
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipants);
    	}
		return view('partecipants.index', compact('partecipants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('partecipants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Partecipants $request)
    {
        $input = $request->all();
		$partecipants = Partecipants::create([
            'nome' => $input['nome'],
			'cognome' => $input['cognome'],
			'email' => $input['email'],
			'telefono' => $input['telefono'],				
				
                        
        ]);
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipants);
    	}
		
		flash()->success('salvato con successo!');
		
		return redirect('partecipants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Partecipants $partecipants)
    {
		return view('partecipants.show', compact('partecipants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Partecipants $partecipants)
    {
		return view('partecipants.edit', compact('partecipants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PartecipantsRequest $request, Partecipants $partecipants)
    {
		$input = $request->all();
		$partecipants->update([
            'nome' => $input['nome'],
			'cognome' => $input['cognome'],
			'email' => $input['email'],
			'telefono' => $input['telefono'],
            
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipants);
    	}
		
		flash()->success('aggiornato con successo!');
		
		return redirect('partecipants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, Partecipants $partecipants)
    {
        $partecipants->delete();
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($partecipants);
        }
        return redirect('partecipants');
    }
}

