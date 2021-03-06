<?php

namespace App\Http\Controllers;
use Request;
use Redirect;
use Auth;
use Input;
class HomeController extends Controller
{
     public function __construct()
    {
       $this->middleware('auth', ['only' => ['getMembers']]);
    }
   
    public function getIndex()
    {
         return view('login');
    }
    
    public function getLogin()
    {
        return view('login');
        
    }
    
    public function postLogin(){
        
        $credentials = 
            [
                'username' => Request::get('username'),
                'password' => Request::get('password')
            ];
        
        if(Auth::attempt($credentials))
        {
            $display = 'none';
            $proyectos = \DB::table('projects')->get();
            return view('tuProyecto')->with('proyectos',$proyectos)->with('display',$display);
            return redirect::intended('tuProyecto');
        }
        else
        {
            return redirect::to('login')->withInput();
        }
    }
    
     public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
    
    public function getMembers()
    {
        return view('tuProyecto');
    }
}
