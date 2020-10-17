<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Http\Resources\Evento as EventoResource;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::select('id', 'fechaini','machine','namevar','valuevar')->get();
        dd($eventos);

       // return response()->json(['foodtrucks' => $foodtrucks, 'error' => false]);
        return EventoResource::collection($eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instanciamos la clase Pokemons
        $evento = new Evento;
        //Declaramos el nombre con el nombre enviado en el request
        $evento->fechaini = $request->fechaini;
        $evento->machine = $request->machine;
        $evento->namevar = $request->namevar;
        $evento->valuevar = $request->valuevar;

        //Guardamos el cambio en nuestro modelo

        $evento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::where('id', $id)->get();
        
        return $evento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
