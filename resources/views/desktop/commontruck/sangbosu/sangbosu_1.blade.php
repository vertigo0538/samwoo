@extends('desktop.commontruck.index')
@section('sub_content')
	<section class="description">
		<h3>F/B(갈비대) 시공이미지</h3>
		<p>적재함의 바닥역할을 하며 운반물을 적재시 미끄럽지 않고 적재하중에 대한 복원력이 매우 우수합니다.
		   <br>또한 비중이 낮은 반면 높은 강도와 탄성으로 최적의 효율을 지닌 제품입니다.
		</p>
		<img src="{{URL::asset('images/common/fb_1.jpg')}}" alt="C/B 시공">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/common/fb_2-1.png')}}" alt=""></p>
			<span>아피통(바닥재용)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/common/fb_2-2.png')}}" alt=""></p>
			<span>아피통(바닥재용)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/common/fb_2-3.png')}}" alt=""></p>
			<span>아피통(바닥재용)</span>
		</div>
	</section>
@endsection