@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>무늬합판 시공 이미지</h3>
		<p>윙바디 윙부위에 적용된 무늬 코팅 합판으로 깔끔한 외곽과 표면으로 제공되며, 
			안정된 품질과 합리적인 가격으로 공급하고 있습니다.</p>
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