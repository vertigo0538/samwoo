@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>국내원목 시공 이미지</h3>
		<p>축 추가 또는 적재함 보강 및 보수시 사용되는 목재이며, 특수 코팅을 이용하여 목재의 변화를 극소화 시켰습니다.
		   <br> * 보강목 공급 가능 차종 : 소형 / 중형 / 대형
		</p>
		<img class="mb10" src="{{URL::asset('images/common/new_1-1.jpg')}}" alt="국내원목 시공이미지">
		<img class="mb10" src="{{URL::asset('images/common/new_1-2.jpg')}}" alt="국내원목 시공이미지">
		<p class="img_description">철강 받침목 등에 적용된 목재로 국내 시장에서 쉽게 수입 • 유통되는 목재입니다.</p>
	</section>
	
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/new_2-1.png')}}" alt="MLH(국내수입)"></p>
			<span>MLH(국내수입)</span>
		</div>
		<div class="mgr full">
			<p><img src="{{URL::asset('images/common/new_2-2.png')}}" alt="MLH(국내수입)"></p>
			<span>MLH(국내수입)</span>
		</div>
	</section>
@endsection