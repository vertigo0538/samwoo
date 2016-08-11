<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use View;

use Session;

use Jenssegers\Agent\Agent;

class EmailController extends Controller
{
    public function getContact()
    {
   		$agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile.email.contact');
            } else {
                return View::make('desktop.email.contact');
            }   
    }
    public function getStep1()
    {
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile.email.step1');
            } else {
                return View::make('desktop.email.step1');
            }   
    }
    public function getStep2()
    {
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile.email.step2');
            } else {
                return View::make('desktop.email.step2');
            }   
    }
    public function postStep2(Request $request)
    {
        // $datas = $request->all() + [ "v1" => "onedepth", "v2" => "twodepth", "v3" => "threedepth","v4" => "fourdepth" ];
        //$datas = $request->all();
        $datas = $request->except('_token');
        $count = count($datas);
        //count($datas);
        //$array = array_add($datas);
        
        
        // $datas = array(
        //     'main' =>$request->main,
        //     '1depth' => $request->onedepth,
        //     '2depth' => $request->twodepth,
        //     '3depth' => $request->threedepth,
        //     '4depth' => $request->fourdepth
        //     );
        // $main = $datas['main'];
        // $onedepth = $datas['1depth'];
        // $twodepth = $datas['2depth'];
        // $threedepth = $datas['3depth'];
        // $fourdepth = $datas['4depth'];
        var_dump($datas);
        
        //return View::make('desktop.email.step2',compact('datas','main','onedepth','twodepth','threedepth','fourdepth'));
        return View::make('desktop.email.step2',compact('datas','count'));
        //return View::make('desktop.email.send',compact('datas','count'));
    }

    public function postContact(Request $request)
    {
    	$datas1 = $request->except('_token','name','shopname','phone','email','etc');
        // $firstdatas = array(
        //             '1차분류' => $request -> $datas1[]    

        //     );


        $mail_content = array(
    		'name' => $request->name,
            'shopname' => $request->shopname,
            'phone' => $request->phone,
            'email' => $request->email,
            'etc' => $request->etc
            //'hidden' => $request->hidden
        );
        //$datas = $request->except('_token');


    	Mail::send('desktop.email.send',['datas1'=>$datas1,'datas2'=>$datas2],function($message) use ($datas2){
    		$message->from($datas2['email']);
    		$message->to('khk0613@cside.co.kr');
    		$message->subject($datas2['shopname']);
        });
    	Session::flash('success', 'Your Email was Sent!');
    	
    	return redirect('/');
    }
}
