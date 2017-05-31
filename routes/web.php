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

Route::resource('users', 'UsersController');

MoreRoute::controller('/', 'HomeController');

/*
Route::get('tuProyecto', function () {
    return view('tuProyecto');
});
*/


Route::post('Agregar', function(){
    $name = Input::get('nombre');
    
    if($name) {
    
        if(DB::table('projects')->whereNombre($name)->first() !== null){
        
            return 'Poyecto ya existe';
        
        }else{ 
            
            $display = 'none';
            DB::table('projects')->insert(['nombre'=>$name]);
            $proyectos = DB::table('projects')->get();
            return view('tuProyecto')->with('proyectos',$proyectos)->with('display',$display);
            //return Redirect::to('tuProyecto');
        }
    }else{
        return 'Proyecto debe tener un nombre';
       
    }
});

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));

Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));

Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));

