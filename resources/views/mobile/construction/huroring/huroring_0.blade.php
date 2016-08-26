@extends('mobile.construction.index')
@section('sub_content')
	<section class="description img_1">
		<h3>{{$title3[$title][0]}}</h3>
		<img src="{{URL::asset('images/construction/hu_1.png')}}" alt="후로링" class="mb10">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/construction/hu_2-1.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/hu_2-2.png')}}" alt="방키라이(apitong)"></p>
			<span>방키라이(BANKIRAI)</span>
		</div>
		<div class="">
			<p><img src="{{URL::asset('images/construction/hu_2-3.png')}}" alt="동남아산 하드우드(mlh)"></p>
			<span>동남아산 하드우드(MLH)</span>
		</div>
	</section>
@endsection