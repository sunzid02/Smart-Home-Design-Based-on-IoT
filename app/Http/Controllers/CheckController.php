<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\DB;

// <script type="text/javascript">
//     function play_sound() {
//         var audioElement = document.createElement('audio');
//         audioElement.setAttribute('src', '/assets/music/sound_file.mp3');
//         audioElement.setAttribute('autoplay', 'autoplay');
//         audioElement.load();
//         audioElement.play();
//     }
// </script>


class CheckController extends Controller
{
    public function index()
    {
    	return view('check.index');
    }

    public function verify(Request $request)
    {
    	//echo $request->ip;
    	$check = DB::table('checks')
                    ->get();

        foreach ($check as $key) {
        	//echo $key->Email;
        	if(($request->ip == $key->IP && $request->email == $key->Email) || 
        		($request->ip == $key->IP && $request->phone == $key->Phone))
        	{
        		return view('gate.index');
        	}
        	// else
        	// {
        	// 	echo 'buzzer';
        	// }
        }
        //return view('buzzer.index');
        echo 'buzzer';
       // echo '<script type="text/javascript">play_sound();</script>';
    }
}
