@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>평판/장폭 및 로베드 트레일러 FLOOR</h3>
		<p>특장차용 목재 전문 제조 기업으로써 20년간 축적된 경험과 기술을 바탕으로 안정된 납기와 균일하고 월등한 품질.<br>
			고객과 기업상호간에 win-win 할수 있는 체재를 구축하여 내,외부환경의 변동 등에 즉각적이고 탄력적인 대응을 <br>
			바탕으로 공급하고 있습니다. <br>* 맞춤제작가능
		</p>	
	</section>
	<section class="description">
		<h3>장폭트레일러 시공이미지</h3>
		<img src="{{URL::asset('images/special/peong_1.jpg')}}" alt="평판/장폭 및 로베드 트레일러 FLOOR">
	</section>
	<section>
		<h3>평판/장폭 트레일러 시공이미지</h3>
		<img src="{{URL::asset('images/special/peong_2.jpg')}}" alt="평판/장폭 트레일러">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/peong_3-1.png')}}" alt="아피통(트레일러용)"></p>
			<span>아피통(트레일러용)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/peong_3-2.png')}}" alt="아피통(트레일러용)"></p>
			<span>아피통(트레일러용)</span>
		</div>
	</section>
@endsection