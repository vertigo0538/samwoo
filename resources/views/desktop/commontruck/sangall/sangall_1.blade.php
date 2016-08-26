@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>{{$title3[$title][1]}} 시공 이미지</h3>
		<p>축 추가 또는 적재함 보강 및 보수시 사용되는 목재이며, 특수 코팅을 이용하여 목재의 변화를 극소화 시켰습니다.
		   <br> * 보강목 공급 가능 차종 : 소형 / 중형 / 대형
		</p>
		<img class="mb10" src="{{URL::asset('images/common/domestic_1-1.jpg')}}" alt="신소재 시공이미지">
		<img class="mb10" src="{{URL::asset('images/common/domestic_1-2.jpg')}}" alt="신소재 시공이미지">
		<p class="img_description">건조 및 후처리(케미컬)한 신제품으로써 일본으로 수출되어 중형까지 사용되는 제품으로<br>추후 대형차종까지 확대 적용될 예정입니다.</p>
	</section>
	
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/domestic_2-1.png')}}" alt="신소재(보강목용)"></p>
			<span>신소재(보강목용)</span>
		</div>
		<div class="mgr full">
			<p><img src="{{URL::asset('images/common/domestic_2-2.png')}}" alt="신소재(보강목용)"></p>
			<span>신소재(보강목용)</span>
		</div>
	</section>
@endsection