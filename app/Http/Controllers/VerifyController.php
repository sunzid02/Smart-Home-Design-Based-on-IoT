<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class VerifyController extends Controller
{
    //
    public function check(Request $request)
    {
      // code...
      $ip = $request->ip;
      $email = $request->email;
      $phone = $request->phone;

      $info = User::all();

      foreach ($info as $info)
      {
        if (($info->ip == $ip && $info->email == $email) || ($info->ip == $ip && $info->phone == $phone))
        {
          return redirect()->route('file.index');
        }

      }
        return view('sorry');
    }
}
