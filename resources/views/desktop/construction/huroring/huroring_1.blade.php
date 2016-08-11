@extends('desktop.construction.index')
@section('sub_content')
	<section class="description">
		<h3>코팅 후로링</h3>
		<img src="{{URL::asset('images/construction/none.jpg')}}" alt="장폭 트레일러" class="mb10">
	</section>
	<section class="triple cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/construction/ko_2-1.png')}}" alt=""></p>
			<span>아카시아(ACACIA)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/ko_2-2.png')}}" alt=""></p>
			<span>캠파스(CAMPAS)</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/construction/ko_2-3.png')}}" alt=""></p>
			<span>캠파스(CAMPAS)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/ko_2-4.png')}}" alt=""></p>
			<span>말파우(MERPAU)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/ko_2-5.png')}}" alt=""></p>
			<span>동남아산 하드우드(MLH)</span>
		</div>
	</section>
@endsection