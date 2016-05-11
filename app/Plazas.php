<?php

namespace App;

use DB;  //QUÉ ES ESTO?
use Session;  //QUÉ ES ESTO?
use Illuminate\Database\Eloquent\Model;

class Plazas extends Model
{
    protected $table = "Plazas";

    protected $fillable = ['nombre','vigencia', 'sueldo', 'sobresueldo', 'estimulo'];

    public static function darAlta($request){
    	try {
		    Plazas::create([
            'nombre'=> $request['nombre'], // $request['nombre'] SE LO PONE AL ATRIBUTO 'nombre' DE LA BD
    		'vigencia'=> "A",
    		'sueldo'=> $request['sueldo'],
    		'sobresueldo'=> $request['sobresueldo'],
    		'estimulo'=> $request['estimulo'],
    		]);

            Session::flash('view', 'alta');
            Session::flash('header','¡Éxito!');
            Session::flash('status','success');
            Session::flash('message','Se ha dado de alta correctamente.');
		} catch (Exception $e) {
		    Session::flash('header','¡Ups!');
            Session::flash('status','fail');
            Session::flash('message','Parece que algo ha salido mal.');
		}

    }

    public static function darBaja($id){
        try{
            $plaza = Plazas::find($id);
            $plaza->fill(array('vigencia' => 'B'));
            $plaza->save();

            Session::flash('view', 'baja');
            Session::flash('header','¡Éxito!');
            Session::flash('status','success');
            Session::flash('message','Se ha dado de baja correctamente.');
        } catch (Exception $e) {
            Session::flash('header','¡Ups!');
            Session::flash('status','fail');
            Session::flash('message','Parece que algo ha salido mal.');
        }
    }

    public static function amuentarP($request){
        try{
            $porcentaje = $request['porcentaje']/100;

            DB::transaction(function () use ($request, $porcentaje) {
                DB::update('UPDATE `plazas` SET `'.$request['tb'].'` = `'.$request['tb'].'` + (`'.$request['tb'].'` * '.$porcentaje.')');
            });

            Session::flash('view', 'aumenta');
            Session::flash('header','¡Éxito!');
            Session::flash('status','success');
            Session::flash('message','Se ha realizado el aumento correctamente.');
        } catch (Exception $e) {
            Session::flash('header','¡Ups!');
            Session::flash('status','fail');
            Session::flash('message','Parece que algo ha salido mal.');
        }
    }

    public static function actualizaP($request, $id){
        try{
            $plaza = Plazas::find($id);   //QUÉ HACE FIND?
            $plaza->fill($request->all()); //ACTUALIZA EL ID QUE ENCONTRÓ
            $plaza->save();

            Session::flash('view', 'act');
            Session::flash('header','¡Éxito!');
            Session::flash('status','success');
            Session::flash('message','Se ha realizado la actualización correctamente.');
        } catch (Exception $e) {
            Session::flash('header','¡Ups!');
            Session::flash('status','fail');
            Session::flash('message','Parece que algo ha salido mal.');
        }
    }

    public static function getPlazasEnAlta(){
        $plaza = Plazas::where('vigencia', 'A')->paginate(10); //"QUÉ ES PAGINATE(10)""
        if(count($plaza) < 1){
            Session::flash('message','No hay ninguna plaza para dar de baja.');
        }
        return $plaza;
    }

    public static function getPlazas(){
        $plaza = Plazas::paginate(10);    //"QUÉ ES PAGINATE(10)""
        if(count($plaza) < 1){
            Session::flash('message','No hay ninguna plaza para actualizar.');
        }
        return $plaza;
    }
}
