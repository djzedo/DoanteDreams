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
    
    // UPDATE and DELETING always specify the WHERE;
    DB::table('users')->whereName('Carlos')->delete();
    return 'Delete complete';
    
    // UPDATE and DELETING always specify the WHERE;
    DB::table('users')->where('name','=','mike')->update(['name'=>'Mike']);
    return 'Update complete';
    
    //INSERT
      /* Insert and grab the id of the inserted; */
    $id = DB::table('users')->insertGetId(['name'=>'Carlos','occupation'=>'Lawyer']);
    return 'Insertado y el id es '.$id;
    
    // INTO users (name,occupation)...;
    DB::table('users')->insert(['name'=>'mike','occupation'=>'Bodyguard']);
    return 'Insert Succesfull!';
    
    //SELECT * users WHERE id >= 2 ORDER BY occupation;
    $users = DB::table('users')->where('id','>=', 2)->orderby('Occupation')->get();
    dd($users);
    
     //SELECT * users WHERE occupation = chemist;
        /*
            note: use magic methods
        */
    $user = DB::table('users')->whereOccupation('chemist')->first();
    dd($user);
    
    //SELECT * users WHERE occupation = chemist;
    $user = DB::table('users')->where('occupation','chemist')->first();
    dd($user);
    
    
    //SELECT * users WHERE occupation = chemist;
    $user = DB::table('users')->where('occupation','chemist')->get();
    dd($user);
    
    //SELECT * FROM users ORDER BY name
    $users = DB::table('users')->orderBy('name')->get();
    dd($users);
    
    //Select * from Users;
    $users = DB::table('users')->get();
    dd($users);
    
});
