@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>{{$title3[$title][4]}} 시공 이미지</h3>
		<p>제품 고정시 손상 방지를 위해 제품에 덧대어주는 화물차용품입니다. 
		<br>* 동남아 직수입</p>
		<img class="mb10" src="{{URL::asset('images/common/ad_1.jpg')}}" alt="아대 시공이미지">
		<!-- <p class="img_description">아대용 목재 공급 사이즈 : 1자 ~ 8자 가능</p> -->
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-3.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/common/ad_2-2.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/common/ad_2-1.png')}}" alt="아피통(아대용)"></p>
			<span>아피통(아대용)</span>
		</div>
	</section>
@endsection