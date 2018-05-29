<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class PasswordController extends Controller
{
    public function index()
    {
    	return view('password.index');
    }

     public function verify(Request $request)
    {
    	//$un = $request->input('username');
    	$count = 0;
    	
    	/*$user = User::where('username', $request->username)
    		->where('password', $request->password)
    		->first();*/
    	$user = DB::table('users')
    		->where('username', $request->username)
    		->where('password', $request->password)
    		->first();

    	if($user != null)
    	{
            $request->session()->put('loggedUser', $user);
    		return view('gate.index');
    	}
    	else
    	{
    		$count++;
    		$request->session()->flash('username', $request->username);
    		$request->session()->flash('message', 'Invalid username or password');
    		return view('password.index')
    			//->with('username', $un)
    			->with('message', 'Invalid username or password')
    			->with('count', $count);
    		//return redirect()->route('password.index');
    	}
    }
}
