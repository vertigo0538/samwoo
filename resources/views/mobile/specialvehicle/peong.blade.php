@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>{{$title1[0]}} FLOOR</h3>
		<p style="padding-bottom:10px;">(주)삼우특장플러스는 특장차용 목재 전문 제조기업으로써 20여 년간 축적된 경험과 기술을 바탕으로 안정된 납기와 엄격한 품질관리를 통해 최상의 제품을 생산하여 고객과 기업 상호 간의 Win-Win 할 수 있는 체재를 구축하였습니다.
		<p>또한 외부환경 변화에 즉각적이고 탄력적으로 대응하며, 고객님께 최상의 제품을 공급하고 있습니다.</p>
		* 맞춤제작가능
		</p>	
	</section>
	<section class="img_1">
		<h3>장폭트레일러 시공이미지</h3>
		<img src="{{URL::asset('images/special/peong_1.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="img_1">
		<h3>평판/장폭 트레일러 시공이미지</h3>
		<img src="{{URL::asset('images/special/peong_2.jpg')}}" alt="평판/장폭 트레일">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/peong_3-1.png')}}" alt="아피통(트레일러용)"></p>
			<span>아피통(트레일러용)</span>
		</div>
		<div class="">
			<p><img src="{{URL::asset('images/special/peong_3-2.png')}}" alt="아피통(트레일러용)"></p>
			<span>아피통(트레일러용)</span>
		</div>
	</section>
@endsection