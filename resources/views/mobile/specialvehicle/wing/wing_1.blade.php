@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>{{$title3[$title][1]}} 시공 이미지</h3>
		<p>Anti-Slip 합판은 방수합판위에 열경화성 페놀수지가 함침된 필름을 열압으로 접착시켜 생산한 합판으로 
			온도와 습도 변화에 따른 수축 및 팽창이 현저히 낮고 충격 흡수 및 강도 보존율이 높아 
			버스, 소형 Top 내장재로 매우 적합합니다.</p>
		<img src="{{URL::asset('images/special/wing_2-1.jpg')}}" alt="합판타입 시공 이미지" class="mb10">
		<img src="{{URL::asset('images/special/wing_2-2.jpg')}}" alt="합판타입 시공 이미지">
	</section>
	<section class="cf">
		<h3>합판 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/wing_2-3-1.png')}}" alt="윙바디용 합판"></p>
			<span>윙바디용 합판</span>
		</div>
		<div class="">
			<p style="text-align:right;line-height:172px; height:180px;"><img src="{{URL::asset('images/special/wing_2-3-2.png')}}" alt="윙바디용 합판"></p>
			<span>윙바디용 합판</span>
		</div>
	</section>
@endsection