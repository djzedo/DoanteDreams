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
    DB::statement("ALTER TABLE users ADD email VARCHAR(60)");
    return 'Statement Done!';
    
});


/*
Route::get('/', function () {
    $user = DB::delete('DELETE FROM users WHERE name = ?' , ['Aron']);
    return 'Delete Succesfull';
});


/*
Route::get('/', function () {
    $user = DB::update('UPDATE users SET occupation = ? WHERE name = ?' , ['Cook','Aron']);
    return 'Update Succesfull';
});



/*
Route::get('/', function () {
    $users = DB::select('SELECT * FROM users WHERE occupation = "Chemist"');
    foreach ($users as $user) {
    echo $user->name.' is a '.$user->occupation;
    }
});


/*
Route::get('/', function () {
    $user = DB::select('SELECT * FROM users WHERE occupation = "Chemist"');
    dd($user);
});

/*
Route::get('/', function () {
    $user = DB::selectOne('SELECT * FROM users WHERE id = 1');
    dd($user);
});

/*
Route::get('/', function () {
    $users = DB::insert('INSERT INTO users (name,occupation) VALUES(?,?)',['Aron','Chemist']);
    return 'Insert Completed';
});

/*
Route::get('/', function () {
    $users = DB::select('select * from users');
    return ['usuarios' => $users];
});

/*
Route::get('/', function () {
    $users = DB::select('select * from users');
    var_dump($users);
});


*/
