<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Jenssegers\Agent\Agent;

Route::get('/', function () {
	$agent = new Agent();
	if ($agent -> isMobile() ) {
    return view('mobile.main.m_index'); //메인 페이지
} else {
    return view('desktop.main.index'); //메인 페이지
}    
//return view('desktop.main.index'); //메인 페이지
});
// 특장차
Route::get('/specialvehicle/{pageId}', 'SamwooController@specialvehicle'); 
Route::get('/specialvehicle/{pageId}/{subId}', 'SamwooController@specialvehicleSub'); 
//특장차 끝

//상용트럭 
// Route::get('/commontruck/{pageId}', 'SamwooController@commontruck'); 
Route::get('/commontruck/{pageId}/{subId}', 'SamwooController@commontruckSub'); 
//상용트럭 끝

//건자재
Route::get('/construction/{pageId}', 'SamwooController@construction'); 
Route::get('/construction/{pageId}/{subId}', 'SamwooController@constructionSub'); 
//건자재끝

//소개
Route::get('/introduce/{pageId}', 'SamwooController@introduce'); 
//소개끝




//이메일
Route::get('contact', 'EmailController@getContact'); 
Route::get('step1', 'EmailController@getStep1'); 
Route::get('step2', 'EmailController@getStep2'); 
Route::get('step3', 'EmailController@getStep3'); 
Route::post('step1', 'EmailController@postStep1'); 
Route::post('step2', 'EmailController@postStep2'); 
// Route::post('step3', 'EmailController@postStep3'); 
Route::post('send', 'EmailController@postContact'); 



