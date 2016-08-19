@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>무늬합판 시공 이미지</h3>
		<p>깔끔하고 균일한 표면과 목질무늬를 추가하여 미려하고 자연스러운 느낌을 강조하였습니다.</p>
		<img src="{{URL::asset('images/special/wing_3-1.jpg')}}" alt="무늬합판 시공 이미지" class="mb10">
		<img src="{{URL::asset('images/special/wing_3-2.jpg')}}" alt="무늬합판 시공 이미지">
	</section>
	<section class="cf">
		<h3>무늬합판 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/wing_3-3-1.png')}}" alt="윙바디용 무늬합판"></p>
			<span>윙바디용 무늬합판</span>
		</div>
		<div class="">
			<p><img src="{{URL::asset('images/special/wing_3-3-2.png')}}" alt="윙바디용 무늬합판"></p>
			<span>윙바디용 무늬합판</span>
		</div>
	</section>
@endsection