<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

use View;

use Session;

use Jenssegers\Agent\Agent;

use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Input;


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
    public function getStep3()
    {
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile.email.step3');
            } else {
                return View::make('desktop.email.step3');
            }   
    }

    
    public function postStep2(Request $request)
    {
        
        

        // $messages = array(
        //     'main.required' => '1차분류를 선택해주세요',
        //     'onedepth.required' => '2차분류를 선택해주세요'
        //     // 'name' => '이름을 써주세요',
        //     //  'shopname' => '샵이름을 써주세요',
        //     //  'phone' => '핸드폰 번호를 입력해주세요',
        //     //  'email' => '이메일을 입력해주세요',
             
        //      );
        // $rules = array(
        //     'main' => 'required',
        //     'onedepth' => 'required',
        //     'twoepth' => 'required',
        //     'threedepth' => 'required'
        //     );
        // $validator = Validator::make($request->all(),$rules);
        //  if ($validator->fails()) {
        //  return redirect('/step1')->withErrors($validator)->withinput();
        // }

         // $validator = Validator::make($request->all(), [
         //    'onedepth' => 'required',
         //    'twodepth' => 'required',
         //    'threedepth' => 'required',
         //    ]);

        $datas = $request->except('_token');
        $count = count($datas);
        //var_dump($datas);
        
        
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile.email.step2',compact('datas','count'));
            } else {
                return View::make('desktop.email.step2',compact('datas','count'));
            }       


        //return View::make('desktop.email.step2',compact('datas','count'));
        //return View::make('desktop.email.send',compact('datas','count'));
    }
    
    public function postContact(Request $request)
    {
        $datas1 = $request->except('_token','name','shopname','phone','email','etc');
        $firstdatas = array(
                    '메인' => $request->main,
                    '1분류' => $request->onedepth,
                    '2분류' => $request->twodepth,
                    '3분류' => $request->threedepth,
                    '4분류' => $request->fourdepth,
                    '5분류' => $request->fivedepth
                );


        $firstfilter = array_filter($firstdatas); // 빈 배열은 출력되지 않게함

        $seconddatas = array(
                    '메인' => $request->main2,
                    '1분류' => $request->onedepth2,
                    '2분류' => $request->twodepth2,
                    '3분류' => $request->threedepth2,
                    '4분류' => $request->fourdepth2,
                    '5분류' => $request->fivedepth2
                );
        $secondfilter = array_filter($seconddatas);

        $thirddatas = array(
                    '메인' => $request->main3,
                    '1분류' => $request->onedepth3,
                    '2분류' => $request->twodepth3,
                    '3분류' => $request->threedepth3,
                    '4분류' => $request->fourdepth3,
                    '5분류' => $request->fivedepth3
                );
        $thirdfilter = array_filter($thirddatas);

        $mail_content = array(
            'name' => $request->name,
            'shopname' => $request->shopname,
            'phone' => $request->phone,
            'email' => $request->email,
            'etc' => $request->etc
            //'hidden' => $request->hidden
        );
        //$datas = $request->except('_token');



        Mail::send('desktop.email.send',['datas1'=>$datas1,'mail_content'=>$mail_content,'firstfilter'=>$firstfilter,'secondfilter'=>$secondfilter,'thirdfilter'=>$thirdfilter],function($message) use ($mail_content){
            $message->from($mail_content['email']);
            $message->to('khk0613@cside.co.kr');
            $message->subject($mail_content['shopname']);
        });
        Session::flash('success', 'Your Email was Sent!');
        
        return redirect('step3');
    }
}
