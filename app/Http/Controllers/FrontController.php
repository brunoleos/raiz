<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;
use App\About;
use App\Slideset;
use App\Metodologium;
use App\Depoimento;
use App\Familium;
use App\Jogo;
use App\User;
use Auth;

class FrontController extends Controller
{
    public function index()
    {

        $slides = Slideshow::all();
        $about = About::find(1);
        $persona = Slideset::all();
        $metodo = Metodologium::all();
        $dep = Depoimento::all();
        $familia = Familium::all();
        $jogos = Jogo::all();

        return view('front.site', compact('slides', 'about', 'persona', 'metodo', 'dep', 'familia', 'jogos'));
    }

    public function lg()
    {
    	if (Auth::check()) {
     $id = Auth::user()->id;
     
     $user = User::find($id);

     return $user;
}else{
	$user = array('id' => 0, 'name' => null, 'email' => null, 'password' => null, 'remember_token' => null, 'created_at' => null, 'updated_at' => null, 'role_id' => null );
	return json_encode($user);
}


    }
}
