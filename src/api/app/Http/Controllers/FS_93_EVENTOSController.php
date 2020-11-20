<?php

namespace App\Http\Controllers;
use App\Models\Fs93evento;
use App\Http\Resources\FS_93_EVENTOS as FS_93_EVENTOSResource;
use Illuminate\Http\Request;

class FS_93_EVENTOSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fs93eventos = Fs93evento::select('id', 'fechaini','machine','namevar','valuevar')->get();
        

        return response()->json(['fs93eventos' => $fs93eventos, 'error' => false]);
       // return EventoResource::collection($FS_L93_Eventos);
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
        $fs_93_eventos = new Fs93evento;
        //Declaramos el nombre con el nombre enviado en el request
        $fs_93_eventos->fechaini = $request->fechaini;
        $fs_93_eventos->machine = $request->machine;
        $fs_93_eventos->namevar = $request->namevar;
        $fs_93_eventos->valuevar = $request->valuevar;

        //Guardamos el cambio en nuestro modelo

        $fs_93_eventos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fs_93_eventos = Fs93evento::where('id', $id)->get();
        
        return $fs_93_eventos;
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
