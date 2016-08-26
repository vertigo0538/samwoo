@extends('mobile.commontruck.index')
@section('sub_content')
	<section class="description img_1">
		<h3>아피통 시공 이미지</h3>
		<p>축 추가 또는 적재함 보강 및 보수시 사용되는 목재이며, 특수 코팅을 이용하여 목재의 변화를 극소화 시켰습니다.
		   <br> * 보강목 공급 가능 차종 : 소형 / 중형 / 대형
		</p>
		<img src="{{URL::asset('images/common/apitong_1-1.jpg')}}" alt="아피통 시공이미지" class="mb10">
		<img src="{{URL::asset('images/common/apitong_1-2.jpg')}}" alt="아피통 시공이미지">
		<p class="img_description">20여년 이상 차량,선박,화차,철도침목 등 적용된 검증된 남양재로 100% 동남아 직수입품 입니다.</p>
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/apitong_2-1.png')}}" alt="아피통(보강목용)"></p>
			<span>아피통(보강목용)</span>
		</div>
		<div class="">
			<p><img width="100%" height="100%" src="{{URL::asset('images/common/apitong_2-2.png')}}" alt="아피통(보강목용)"></p>
			<span>아피통(보강목용)</span>
		</div>
	</section>
@endsection