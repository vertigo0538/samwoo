@extends('mobile.construction.index')
@section('sub_content')
	<section class="description img_1">
		<h3>후로링</h3>
		<img src="{{URL::asset('images/construction/none.jpg')}}" alt="장폭 트레일러" class="mb10">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/construction/hu_2-1.png')}}" alt=""></p>
			<span>아피통(APITONG)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/hu_2-2.png')}}" alt=""></p>
			<span>방카라이(BANKIRAI)</span>
		</div>
		<div class="">
			<p><img src="{{URL::asset('images/construction/hu_2-3.png')}}" alt=""></p>
			<span>동남아산 하드우드(MLH)</span>
		</div>
	</section>
@endsection