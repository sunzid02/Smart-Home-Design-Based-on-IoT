<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

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



      //device off
      public function deviceOff(Request $request)
      {
        $id = $request->id;
        $name = $request->name;
        DB::table('rooms')->where('id', $id)
        ->update(['status' => 0]);
        Session::flash('off', 'Device off!');
        return redirect()->route('room.index');
      }

      //device On
      public function deviceOn(Request $request)
      {
        $id = $request->id;
        DB::table('rooms')->where('id', $id)
        ->update(['status' => 1]);
        Session::flash('on', 'Device On !');
        return redirect()->route('room.index');
      }

      // subadmindevice off
      public function subAdminDeviceOff(Request $request)
      {
        $id = $request->id;
        $name = $request->name;
        DB::table('subadmin_room_device')->where('id', $id)
        ->update(['status' => 0]);
        Session::flash('off', 'Device off!');
        return redirect()->route('room.index');
      }

      //subadmin device On
      public function subAdminDeviceOn(Request $request)
      {
        $id = $request->id;
        DB::table('subadmin_room_device')->where('id', $id)
        ->update(['status' => 1]);
        Session::flash('on', 'Device On !');
        return redirect()->route('room.index');
      }

      // guest off
      public function guestDeviceOff(Request $request)
      {
        $id = $request->id;
        $name = $request->name;
        DB::table('guest_room_device')->where('id', $id)
        ->update(['status' => 0]);
        Session::flash('off', 'Device off!');
        return redirect()->route('room.index');
      }

      //guest device On
      public function guestDeviceOn(Request $request)
      {
        $id = $request->id;
        DB::table('guest_room_device')->where('id', $id)
        ->update(['status' => 1]);
        Session::flash('on', 'Device On !');
        return redirect()->route('room.index');
      }
}
