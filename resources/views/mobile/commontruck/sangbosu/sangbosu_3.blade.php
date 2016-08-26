@extends('mobile.commontruck.index')
@section('sub_content')
	<section class="description img_1">
		<h3>{{$title3[$title][3]}} 시공 이미지</h3>
		<p>메인 프레임 상단에 장착되는 목재로써 진동/소음을 감소 시켜주는 역할을 합니다.
		</p>
		<img src="{{URL::asset('images/common/ln_1.jpg')}}" alt="L/N(라이너) 시공이미지">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img width="70" src="{{URL::asset('images/common/ln_2-2.png')}}" alt="아피통(라이너용)목재"></p>
			<span>아피통(라이너용)목재</span>
		</div>
		<div class="">
			<p><img width="70" src="{{URL::asset('images/common/ln_2-1.png')}}" alt="아피통(라이너용)목재"></p>
			<span>아피통(라이너용)목재</span>
		</div>
	</section>
@endsection