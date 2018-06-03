<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\Http\Controllers\Controller;
use Session;

class MailController extends Controller
{
    //
    public function __construct()
   {

   }

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {

   }

   /**
    * Update posisi menu
    *
    * @param  int  $id
    * @return Response
    */
   public function send()
   {

     // code...
     Mail::send(['html'=>'mail'],['name','sunzid'],function ($message){
       // code...
       //$file_to_attach = Request::url('cu.png');
       $imagePath=  Session::get('imagePath');
       $message->to('sunzid02@gmail.com','To sunzid')->subject('Invalid user detected');
       $message->attach($imagePath);
       $message->from('sunzid02@gmail.com','sunzid');

     });

     return view('check.index2');
   }

   public function test(Request $req)
   {
     // code...
    $t=  Session::get('key');
     echo $t;
   }
}
