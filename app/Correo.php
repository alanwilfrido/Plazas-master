<?php

namespace App;
use Mail;
use Session;
use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    public static function enviaMail($request){
    	try {
		    Mail::send('contact.message',$request->all(), function($msj){
            $msj->subject('Correo de contacto(SAP)');
            $msj->to('agricolagrain@gmail.com');
       		 });

            Session::flash('view', 'mail');
            Session::flash('header','¡Éxito!');
            Session::flash('status','success');
            Session::flash('message','Se ha enviado correctamente.');
		} catch (Exception $e) {
		    Session::flash('header','¡Ups!');
            Session::flash('status','fail');
            Session::flash('message','Parece que algo ha salido mal.');
		}
    }
}
