@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>목재타입 시공 이미지</h3>
		<p>박스나 기타 적재물의 미끄럼방지에 효과가 탁월하며, 하중에 대한 안정성과 제품의 안정된 수송에 매우 적합합니다.</p>
		<img class="mb10" src="{{URL::asset('images/special/topcar_1-1.jpg')}}" alt="장폭 트레일러">
		<img src="{{URL::asset('images/special/topcar_1-2.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="cf">
		<h3>목재타입 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/topcar_1-3-1.png')}}" alt=""></p>
			<span>동남아산(MLH)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/topcar_1-3-2.png')}}" alt=""></p>
			<span>동남아산(MLH)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/special/topcar_1-3-3.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/topcar_1-3-4.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
	</section>
@endsection