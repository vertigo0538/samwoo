@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>G/B(문짝)시공 이미지</h3>
		<p>적재함의 DOOR역할을 하며 휠감도 및 측면하중에 대한 복원력이 매우 우수합니다.
		   <br>* 소형트럭 : 특수합판 구성
		   <br>* 대형트럭 : 목재타입 GATE BOARD 구성
		</p>
		<img class="mb10" src="{{URL::asset('images/common/gb_1.jpg')}}" alt="C/B 시공">
		<p class="img_description">특수합판 타입</p>
		<img class="mb10" src="{{URL::asset('images/common/gb_2.jpg')}}" alt="C/B 시공">
		<p class="img_description">목재타입</p>
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/gb_2-1.png')}}" alt=""></p>
			<span>아피통(문짝용)목재</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/common/gb_2-2.png')}}" alt=""></p>
			<span>방수합판(문짝용)</span>
		</div>
	</section>
@endsection