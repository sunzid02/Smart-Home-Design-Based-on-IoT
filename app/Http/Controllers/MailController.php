<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Swift_Transport;
use Swift_Message;
use Swift_Mailer;
use App\Http\Controllers\Controller;

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
   public function send($value='')
   {
     // code...
     Mail::send(['html'=>'mail'],['name','sunzid'],function ($message){
       // code...
       //$file_to_attach = Request::url('cu.png');

       $message->to('sunzid02@gmail.com','To sunzid')->subject('Invalid user detected');
       $message->attach('C:\Users\joy\Desktop\photos\cu.png');
       $message->from('sunzid02@gmail.com','sunzid');

     });
     echo "success";
   }
}
