@extends('mobile.construction.index')
@section('sub_content')
	<section class="description img_1">
		<h3>시공사진제목</h3>
		<img src="{{URL::asset('images/construction/none.jpg')}}" alt="시공사진제목" class="mb10">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/construction/etc_2-1.png')}}" alt="1.7"></p>
			<span>1.7</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/etc_2-2.png')}}" alt="2.6"></p>
			<span>2.6</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/construction/etc_2-3.png')}}" alt="3"></p>
			<span>3</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/etc_2-4.png')}}" alt="5"></p>
			<span>5</span>
		</div>
	</section>
@endsection