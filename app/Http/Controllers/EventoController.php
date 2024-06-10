<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

use Carbon\Carbon;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate(Evento::$rules);
        $evento=Evento::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        //
        $evento =Evento::all();
        return response()->json($evento);

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento, $id)
    {
        //
        $evento =Evento::find($id);

        $evento->start =Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end =Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');

        return response()->json($evento);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        //
        request()->validate(Evento::$rules);
        $evento->update($request->all());
        return response()->json($evento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento, $id)
    {
        //
        $evento =Evento::find($id)->delete();
        return response()->json($evento);

    }
}
