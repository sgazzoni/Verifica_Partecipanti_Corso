<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Partecipant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartecipantsRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PartecipantRequest;

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
    public function store(PartecipantRequest $request)
    {
        $input = $request->all();
		$partecipant = Partecipant::create([
            'nome' => $input['nome'],
			'cognome' => $input['cognome'],
			'email' => $input['email'],
			'telefono' => $input['telefono'],		
				
                        
        ]);
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipant);
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
    public function show(Partecipant $partecipant)
    {
		return view('partecipants.show', compact('partecipant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Partecipant $partecipant)
    {
		return view('partecipants.edit', compact('partecipant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PartecipantRequest $request, Partecipant $partecipant)
    {
		$input = $request->all();
		$partecipant->update([
            'nome' => $input['nome'],
			'cognome' => $input['cognome'],
			'email' => $input['email'],
			'telefono' => $input['telefono'],
            
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipant);
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
    public function destroy(Request $request, Partecipant $partecipant)
    {
        $partecipant->delete();
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($partecipant);
        }
        return redirect('partecipants');
    }
}

