<?php

namespace App\Http\Controllers;

use Request;
use App\User;
use Validator, Redirect, Hash, Auth;


class UsersController extends Controller
{
    public function __construct()
    {/*
        $this->middleware('filters', ['only' => ['show', 'edit', 'update', 'destroy']]);
        $this->middleware('autorizado', ['only' => ['edit', 'update', 'destroy']]);
        $this->middleware('admin', ['only' => ['create']]);*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users')->withUsers(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = 
            [
                'username' => 'required|unique:users',
                'password' => 'required|min:6',
                'password-repeat' => 'required|same:password',
                'isAdmin' => 'required'
            ];
        
        $validator = Validator::make(Request::all(), $rules);
        
        if ($validator->fails())
        {
            return Redirect::to('users/create')
                ->withInput()
                ->withErrors($validator->messages());
        }
        
            User::create
                ([
                    'username' => Request::get('username'),
                    'password' => Hash::make(Request::get('password')),
                    'email' => Request::get('email'),
                    'admin' => Request::get('isAdmin')
                    
                ]);
        
            return Redirect::to('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $owner = (Auth::id() == (int) $id);
        return view('profile')->withUser($user)->withOwner($owner);
        
        
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        return view('edit')->withId($id);
        
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
        $rules = 
            [
                'username' => 'unique:users'
            ];
        
        $validator = Validator::make(Request::all(), $rules);
        
         if ($validator->fails())
        {
            return Redirect::to('users/'.$id.'/edit')
                ->withInput()
                ->withErrors($validator->messages());
        }
        
        $user = User::find($id);
        if (Request::has('username'))
        {
            $user->username = Request::get('username');
        }
        
        
         if (Request::has('password'))
        {
            $user->password = Hash::make(Request::get('password'));
        }
        
        $user->save();
        
        return Redirect::to('users/'.$id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::find($id);
        $deleteUser->delete();
        
        return redirect('users');
    }
}
