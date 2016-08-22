@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>목재타입 시공 이미지</h3>
		<p>천연 목재가 갖는 특장점인 높은 탄성지수와 휨강도는 제품을 상하지 않게 하며, <br>
			복원력이 뛰어나 중량물 적재시 적재함의 평탄도를 유지해줍니다.</p>
		<img src="{{URL::asset('images/special/wing_1-1.jpg')}}" alt="목재타입 시공 이미지" class="mb10">
		<img src="{{URL::asset('images/special/wing_1-2.jpg')}}" alt="목재타입 시공 이미지">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/wing_1-3-1.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/special/wing_1-3-2.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/wing_1-3-3.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
	</section>
@endsection