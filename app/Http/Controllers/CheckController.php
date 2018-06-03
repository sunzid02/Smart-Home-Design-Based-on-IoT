<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class CheckController extends Controller
{
    public function index()
    {
    	return view('check.index');
    }

    public function verify(Request $request)
    {
    	//echo $request->ip;
    	$check = DB::table('users')
                    ->get();

        $ip = $request->ip;
        $email = $request->email;
        $phone = $request->phone;

        echo $ip." ".$email." ".$phone;
        echo "<br>";
        foreach ($check as $key)
        {
          // echo dd($key);
          $userName= $key->name;
        	//echo $key->role;
        	if(($key->ip == $ip && $key->email == $email) ||
        		($key->ip == $ip && $key->phone == $phone))
        	{
            if($key->role == "admin")
            {
              echo $key->role;
              echo "admin found";
              if (Auth::attempt(['ip' => $ip, 'password' => 'adminn', 'status' => 1])) {
                  // // Authentication passed...
                  // Hash::check($, $key->password);
                  // echo "<br>name: ".$key->role."<br>";
                  // die();
                  return redirect()->route('home');
              }
            }
            else if($key->role == "subadmin")
            {
              echo $key->role;
              if (Auth::attempt(['ip' => $ip, 'password' => 'subadmin', 'status' => 1])) {
                  // Authentication passed...
                  return redirect()->route('home');
              }
            }
            else if($key->role == "guest")
            {
              echo $key->role;
              if (Auth::attempt(['ip' => $ip, 'password' => 'guestt', 'status' => 1])) {
                  // Authentication passed...
                  return redirect()->route('home');
              }
            }
        	}
        }

        echo 'buzzer'."<br>";
        // echo decrypt($key->$key->role);
        $password = Hash::make($key->password);
        echo $password;
    }
}
