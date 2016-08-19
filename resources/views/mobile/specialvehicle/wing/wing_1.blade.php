@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>합판타입 시공 이미지</h3>
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