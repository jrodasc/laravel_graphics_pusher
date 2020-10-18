<?php

namespace App\Http\Controllers;
use App\Models\Fs92evento;
use App\Http\Resources\FS_92_EVENTOS as FS_92_EVENTOSResource;
use Illuminate\Http\Request;

class FS_92_EVENTOSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fs92eventos = Fs92evento::select('id', 'fechaini','machine','namevar','valuevar')->get();
        

        return response()->json(['fs92eventos' => $fs92eventos, 'error' => false]);
       // return EventoResource::collection($FS_L92_Eventos);
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
        $fs_92_eventos = new Fs92evento;
        //Declaramos el nombre con el nombre enviado en el request
        $fs_92_eventos->fechaini = $request->fechaini;
        $fs_92_eventos->machine = $request->machine;
        $fs_92_eventos->namevar = $request->namevar;
        $fs_92_eventos->valuevar = $request->valuevar;

        //Guardamos el cambio en nuestro modelo

        $fs_92_eventos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fs_92_eventos = Fs92evento::where('id', $id)->get();
        
        return $fs_92_eventos;
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
