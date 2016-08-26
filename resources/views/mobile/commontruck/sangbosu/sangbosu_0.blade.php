@extends('mobile.commontruck.index')
@section('sub_content')
	<section class="description img_1">
		<h3>C/B(갈비대) 시공이미지</h3>
		<p>적재함의 기본이 되는 목재로써 적재물의 하중을 버텨주고 지지해주는 가장 기본적인 목재입니다.
		  <br>특수코팅으로 제품의 수명을 대폭 늘려 효율성을 극대화 하였습니다.</p>
		<img src="{{URL::asset('images/common/cb_1.jpg')}}" alt="C/B(갈비대) 시공">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/cb_2-1.png')}}" alt="아피통(갈비대용)"></p>
			<span>아피통(갈비대용)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/common/cb_2-2.png')}}" alt="아피통(갈비대용)"></p>
			<span>아피통(갈비대용)</span>
		</div>
		<div class="">
			<p><img height="100%" width="100%" src="{{URL::asset('images/common/cb_2-3.png')}}" alt="아피통(갈비대용)"></p>
			<span>아피통(갈비대용)</span>
		</div>
	</section>
@endsection