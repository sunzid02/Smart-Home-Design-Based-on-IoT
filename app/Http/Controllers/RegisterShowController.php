<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Validator;
use Illuminate\Http\Request;
use App\User;
use App\file;
use Auth;
use Carbon\Carbon;
use Session;

class RegisterShowController extends Controller
{
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

    	return view('usertype.admin.register')->with('username',$un);
    	// return view('auth.register');
    }

    public function showAllUsers($value='')
    {
      //get all data from the table
      $allUsers = User::all();



      $id = Auth::user()->id ;

      $info = DB::table('users')
                  ->where('id',$id)
                  ->get();

      //checking the user role
      foreach ($info as $info ) {
        $role = $info->role;
      }
      if ($role  == "subadmin")
      {
        return view('usertype.subAdmin.userlist')
               ->with('allUsers',$allUsers);
      }
      else if ($role == "admin" ) {
        // code...
        return view('usertype.admin.userlist')
        ->with('allUsers',$allUsers);
      }
    }

    public function store(Request $request)
    {
      $name = $request->name;
      $email = $request->email;
      $password = $request->password;
      $passwordC = $request->password_confirmation;
      $role = $request->role;
      $createdTime = Carbon::now()->toDateTimeString();
      $updatedTme = Carbon::now()->toDateTimeString();
      $token = str_random(50);
      $ip = $request->ip;
      $phone = $request->phone;
      $status = $request->status;
      //$image = $request->pic;

      $user = new User();

      $validator = Validator::make($request->all(), [

            'email' => 'required | unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);


        if($validator->fails())
        {
            return redirect()
                ->back()
                ->with('errors', $validator->errors())
                ->withInput();
        }

        //----------------------------------------------
        if($request->hasFile('pic'))
        {
            $file = $request->file('pic');
            $filesize = $file->getSize();
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $file->getClientOriginalName());
            echo $filesize;

            $f = new File();
            $f->Name = $filename;
            $f->Size = $filesize;
            $f->save();
            //return 'yes';
            // echo $request->pic;
            // echo "protik";
        }
        else
        {
            echo 'Error uploading file';
        }
        
        //-------------------------------------------------

      //if ($password == $passwordC)
      //{
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->role = $role;
        $user->remember_token = $token;
        $user->created_at = $createdTime;
        $user->updated_at = $updatedTme;
        $user->ip = $ip;
        $user->phone = $phone;
        $user->status = $status;

        $user->save();

        // $profile_user=  User::orderBy('id', 'desc')->first();
        // print_r($profile_user);
        // die();
        // $file = new File();



        return redirect()->route('registershow.showAllUsers');
      //}
      // else
      // {
      //   // return redirect()->route('registershow.index');
      //   // echo '<script language="javascript">';
      //   // echo 'alert("password not matched")';
      //   // // return redirect()->route('registershow.index');
      //   //
      //   // echo '</script>';
      //   $message = "Username and/or Password incorrect.\\nTry again.";
      //   echo "<script type='text/javascript'>alert('$message');</script>";
      //   header("Refresh: 0.05");
      //   // exit;
      //
      //   // echo "<script type='javascript/text'>";
      //   // echo 'alert("password not matched")';
      //   // // echo "window.location.href = ".redirect()->route('registershow.index');
      //   // echo "</script>";
      //
      // }
    }

    //userEdit
    public function edit(Request $req)
    {
      // code...
      $id = $req->id;
      $userId = DB::table('users')->where('id',$id)->first();
      // echo "<pre>";
      // print_r($userId);
      return view('usertype.admin.user_edit')->withUid($userId);
    }

    //user update
    public function update(Request $request)
    {
      $id = $request->id;
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->role = $request->role;
      $user->ip = $request->ip;
      $user->phone = $request->phone;
      $user->status = $request->status;
      $user->save();
      return redirect()->route('registershow.showAllUsers');
    }

    //user deactivation
    public function deactivateUser(Request $request)
    {
      $id = $request->id;
      DB::table('users')->where('id', $id)
      ->update(['status' => 0]);
      Session::flash('deactivate', 'User Dectivated successfully!');
      return redirect()->route('registershow.showAllUsers');
    }

    //user Activation
    public function activateUser(Request $request)
    {
      $id = $request->id;
      DB::table('users')->where('id', $id)
      ->update(['status' => 1]);
      Session::flash('activate', 'User Activated successfully!');
      return redirect()->route('registershow.showAllUsers');
    }

}
