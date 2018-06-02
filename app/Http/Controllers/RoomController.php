<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
  public function index()
  {
    $device = DB::table('rooms')
            ->get();
    //printf($file);

    $id = Auth::user()->id ;

    $info = DB::table('users')
                ->where('id',$id)
                ->get();

    //checking the user role
    foreach ($info as $info ) {
      $role = $info->role;
    }

    if ($role  == "guest")
    {
      $device = DB::table('guest_room_device')
              ->get();
      return view('room.guest.index')
                ->with('device', $device);
    }
    else if ($role == "admin")
    {
      return view('room.index')
                ->with('device', $device);

    }
    else if ($role == "subadmin")
    {    $device = DB::table('subadmin_room_device')
                ->get();
        // echo "<pre>";
        // print_r($device);
        //
        // foreach (array_keys($device->device, 'Laptop') as $key)
        // {
        //     unset($array[$key]);
        // }
        // echo "<br>Pore<br>";
        // echo "<pre>";
        // print_r($device);
        // die();
      return view('room.subAdmin.index')
                ->with('device', $device);
    }

  }
}
