<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\users;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id ;

        $info = DB::table('users')
                    ->where('id',$id)
                    ->get();

         // echo "<pre>";
         // print_r($info);

         foreach ($info as $key)
         {
            $role = $key->role;
            $userName= $key->name;

         }
         $un = $userName;

         if($role == "admin")
         {
            //echo "admin found";
            return view('usertype.admin.index')->with('username',$un);
         }
         else if($role== "subadmin")
         {
           return view('usertype.subAdmin.index')->with('username',$un);
         }
         else if($role== "guest")
         {
           return view('usertype.guest.index')->with('username',$un);
         }

        return view('home');
    }
}
