<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $display = 'none';
    $proyectos = DB::table('projects')->get();
    return view('tuProyecto')->with('proyectos',$proyectos)->with('display',$display);
    
});

Route::post('Agregar', function(){
    $name = Input::get('nombre');
    $display;
    if($name) {
    
        if(DB::table('projects')->whereNombre($name)->first() !== null){
        
            return 'Poyecto ya existe';
        
        }else{ 
            DB::table('projects')->insert(['nombre'=>$name]);
            return Redirect::to('/');
        }
    }else{
        //return 'Proyecto debe tener un nombre';
         return Redirect::to('/')->withDisplay('block');
    }
});

/* Donar sin PayPal
Route::post('Donar',function(){
    $donacion = Input::get('Donacion');
    $id = Input::get('id');
    
    DB::table('projects')->where('id',$id)->increment('cantidad', $donacion);
        return Redirect::to('/');
});
fin Donar Sin PayPal
*/

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));

Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));

Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));

