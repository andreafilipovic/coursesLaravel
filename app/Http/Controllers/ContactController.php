<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $subject=$request->subject;
        $fullName=$request->fullName;
        $body=$request->message;
        $from=$request->email;
        $data=['body'=>$body];
         Mail::send('mail',$data,function($message) use ($from,$subject,$fullName){
             $message->to('coursesasp@gmail.com','Admin')
                    ->subject($subject);
            $message->from($from,$fullName);
         });

         $poruka="Mail sent succesfully";
         return response()->json($poruka);
    }
}
