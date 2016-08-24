<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\samwoo;

use View;

use Jenssegers\Agent\Agent;

class SamwooController extends Controller
{
	
    //특장차
    public function specialvehicle($pageId)
    {
        $title = $pageId; //사이드바 메뉴 보여주기
        $title1 = ['평판/장폭 및 로베드 트레일러','윙바디용 바닥재','탑차용 바닥재','덤프/특장차 라이너','탑차용 SWING DOOR'];   //h2 제목 뿌려주기
        $title2 = 'specialvehicle'; //a link 공통된 url
        $title3 = array(
                'wing' => array('목재타입','합판타입','무늬합판'),
                'topcar' => array('목재타입','합판타입')
            ); // 사이드바 서브메뉴 뿌려주기
        $title4 = '';
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/specialvehicle.'.$pageId.'',compact('title','title1','title2','title3','title4'));
            } else {
                return View::make('desktop/specialvehicle.'.$pageId.'',compact('title','title1','title2','title3','title4'));
            }   
                //return View::make('desktop/specialvehicle.'.$pageId.'',compact('title','title1','title2','title3','title4'));
    }
    public function specialvehicleSub($pageId,$subId)
    {
        $title = $pageId;
        $title1 = ['평판/장폭 및 로베드 트레일러','윙바디용 바닥재','탑차용 바닥재','덤프/특장차 라이너','탑차용 SWING DOOR'];    
        $title2 = 'specialvehicle';
        $title3 = array(
                'wing' => array('목재타입','합판타입','무늬합판'),
                'topcar' => array('목재타입','합판타입')
            );
        $title4 = $subId;
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/specialvehicle.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            } else {
                return View::make('desktop/specialvehicle.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            }   
                //return View::make('desktop/specialvehicle.'.$pageId.'',compact('title','title1','title2','title3','title4'));
        //return View::make('desktop/specialvehicle.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
    }
    //특장차 끝

    //상용트럭
    public function commontruckSub($pageId,$subId)
    {
        
        $title = $pageId;
        $title1 = ['상용트럭(전차종) 보강목','상용트럭 적재함 보수용목재'];    
        $title2 = 'commontruck';
        $title3 = array(
                'sangall' => array('아피통','신제품','국내원목'),
                'sangbosu' => array('C/B(갈비대/보강목)','F/B(바닥재)','G/B(문짝)','L/N(라이너)','아대'),
                'sangbosutap' => array('C/B','F/B','G/B','L/N','아대')
            );
        $title4 = $subId;
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/commontruck.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            } else {
                return View::make('desktop/commontruck.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            }   
        
    }
    //상용트럭끝
    
    //건자재
    public function construction($pageId)
    {
        $title = $pageId;
        $title1 = ['데크재(야외 데크재용)','후로링','기타'];    
        $title2 = 'construction';
        $title3 = array(
                'huroring' => array('후로링','코팅후로링')
            );
        $title4 = '';
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/construction.'.$pageId.'',compact('title','title1','title2','title3','title4'));
            } else {
                return View::make('desktop/construction.'.$pageId.'',compact('title','title1','title2','title3','title4'));
            }   
    }
    public function constructionSub($pageId,$subId)
    {
        $title = $pageId;
        $title1 = ['데크재(야외 데크재용)','후로링','기타'];    
        $title2 = 'construction';
        $title3 = array(
                'huroring' => array('후로링','코팅후로링')
            );
        $title4 = $subId;
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/construction.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            } else {
                return View::make('desktop/construction.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
            }   
        //return View::make('desktop/construction.'.$pageId.'.'.$subId.'',compact('title','title1','title2','title3','title4'));
    }
    //건자재끝



    //소개페이지
    public function introduce($pageId)
    {
        $title = $pageId;
        $title1 = ['인사말','오시는길'];    
        $title2 = 'introduce';
        $agent = new Agent();
            if ($agent -> isMobile() ) {
                return View::make('mobile/introduce.'.$pageId.'',compact('title','title1','title2'));
            } else {
                return View::make('desktop/introduce.'.$pageId.'',compact('title','title1','title2'));
            }   
    }
    //소개페이지끝


}
