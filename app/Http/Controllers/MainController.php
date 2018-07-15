<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function main()
      {
        
      return view('pages.main');
      }
      
      public function form(Request $request)
      {
         $data= array(
      'p1' => request('p1'),
      'p2' => request('p2'),
      'email' => request('email'),
      );

       \Mail::send('email.mail', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'],$data['p1'],$data['p2']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     return back();
}
}