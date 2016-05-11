<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plazas;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlazasController extends Controller
{

    public function index()
    {
        return Redirect::to('/mensaje');
    }

    public function altas()
    {
        return view('altas');
    }

    public function bajas()
    {
        $plaza = Plazas::getPlazasEnAlta();

        return view('bajas', compact('plaza'));
    }

    public function aumentoView()
    {
        return view('aumentar');
    }

    public function cambios()
    {
        $plaza = Plazas::getPlazas();

        return view('cambios', compact('plaza')); //qué no era $plaza en vez de plaza?
    }

    public function contacto()
    {
        return view('contact.contact');
    }

    public function mensaje()
    {
        return view('layouts.message');
    }

    public function aumento(Request $request)
    {
        Plazas::amuentarP($request);

        return Redirect::to('/mensaje');
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
        Plazas::darAlta($request);

        return Redirect::to('/mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Plazas = Plazas::find($id);   //DE DONDE SACAS EL MÉTODO FIND?

        return view('editar', ['Plazas' => $Plazas]);  //QUÉ ES 'Plazas'?, si $Plazas según yo trae ya todos los datos.
    }

    public function Bajaedit($id)
    {
        Plazas::darBaja($id);

        return Redirect::to('/mensaje');
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
        Plazas::actualizaP($request, $id);

        return Redirect::to('/mensaje');
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
