@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>덤프/특장차 라이너</h3>
		<p>일반 트럭적재함의 Liner와 Spacer의 역할을 하며, 샤시와 탑간의 간섭을 막아주고 부품손상을 방지하는 기능을 합니다.</p>	
		<img src="{{URL::asset('images/special/dump_1.jpg')}}" alt="장폭 트레일러" class="mb10">
	</section>
	<!-- <section>
		<h3>덤프/특장차 라이너</h3>
		<img src="{{URL::asset('images/special/peong_2.jpg')}}" alt="">
	</section> -->
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/dump_3-1.png')}}" alt=""></p>
			<span>덤프/특장차 라이너용(아피통) 목재</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/dump_3-2.png')}}" alt=""></p>
			<span>덤프/특장차 라이너용(아피통) 목재</span>
		</div>
	</section>

@endsection