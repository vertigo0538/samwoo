@extends('mobile.specialvehicle.index')
@section('sub_content')
	<section class="description img_1">
		<h3>장폭 트레일러</h3>
		<img src="{{URL::asset('images/special/peong_1.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="img_1">
		<h3>평판/장폭 트레일러</h3>
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