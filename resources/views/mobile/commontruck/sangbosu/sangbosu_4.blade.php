@extends('mobile.commontruck.index')
@section('sub_content')
	<section class="description img_1">
		<h3>아대 시공이미지</h3>
		<img src="{{URL::asset('images/common/ad_1.jpg')}}" alt="아대 시공이미지">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-3.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-2.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
		<div class="">
			<p><img src="{{URL::asset('images/common/ad_2-1.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
	</section>
@endsection