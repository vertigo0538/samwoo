@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>합판타입 시공 이미지</h3>
		<img src="{{URL::asset('images/special/wing_2-1.jpg')}}" alt="장폭 트레일러" class="mb10">
		<img src="{{URL::asset('images/special/wing_2-2.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="cf">
		<h3>합판 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/wing_2-3-1.png')}}" alt=""></p>
			<span>윙바디용 합판</span>
		</div>
		<div class="mgr">
			<p style="text-align:right;line-height:172px;"><img src="{{URL::asset('images/special/wing_2-3-2.png')}}" alt=""></p>
			<span>윙바디용 합판</span>
		</div>
	</section>



	<!-- <section class="cf">
		<h3>합판 상세 이미지</h3>
		<span><img src="{{URL::asset('images/special/wing_2-3-1.png')}}" alt=""></span>
		<span class="mgr"><img src="{{URL::asset('images/special/wing_2-3-2.png')}}" alt=""></span>
	</section> -->
@endsection