@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>아대 시공이미지</h3>
		<img src="{{URL::asset('images/common/ad_1.jpg')}}" alt="C/B 시공">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-3.png')}}" alt=""></p>
			<span>아피통(아대용)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-2.png')}}" alt=""></p>
			<span>아피통(아대용)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/common/ad_2-1.png')}}" alt=""></p>
			<span>아피통(아대용)</span>
		</div>
	</section>
@endsection