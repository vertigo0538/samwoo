@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>합판타입 시공 이미지</h3>
		<img class="mb10" src="{{URL::asset('images/special/topcar_2-1.jpg')}}" alt="장폭 트레일러">
		<img src="{{URL::asset('images/special/topcar_2-2.jpg')}}" alt="장폭 트레일러">
	</section>
	<section class="cf">
		<h3>합판타입 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/topcar_2-3-1.png')}}" alt=""></p>
			<span>탑차용 합판1</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/topcar_2-3-2.png')}}" alt=""></p>
			<span>탑차용 합판2</span>
		</div>
	</section>
@endsection