<?php

namespace App\Http\Controllers;

use App\Models\Reclamaciones;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Http\Request;

class ReclamacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::find(auth()->id());
         $user->load('Persona','Pais');
         //hace una consulta a la tabla persona 
         // s

        return view('reclamaciones',compact('user'));
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $user = User::find(auth()->id());
        $reclamaciones = $request->all();
        $reclamaciones['id_users'] = $user->id;
        //siempre poner la variable que quieres manda
        Reclamaciones::create($reclamaciones);

        // dd($reclamaciones);

        $user->persona->update([
            "telefono_casa" => $request->input('telefono_casa'),
            "direccion" => $request->input("direccion")
        ]);


        // $notificacion = "Tu queja se envio correctamente";
        return redirect('/reclamaciones')->with(compact('reclamaciones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamaciones  $reclamaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamaciones $reclamaciones)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamaciones  $reclamaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamaciones $reclamaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamaciones  $reclamaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reclamaciones $reclamaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamaciones  $reclamaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamaciones $reclamaciones)
    {
        //
    }
}