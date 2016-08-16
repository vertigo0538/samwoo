@extends('desktop.layouts.page2')
@section('page_content')
	<div class="quota_step">
		<h2><img src="{{URL::asset('/images/quota/step3.png')}}" alt=""></h2>
	</div>
	<div class="complete_wrap">
		<h3>견적요청 완료</h3>
		<div class="complete_box">
			<img src="{{URL::asset('/images/quota/complete.png')}}" alt="">
		</div>
		<div class="back_home cf">
			<a href="{{url('/')}}">홈으로</a>
		</div>
	</div> <!-- complete_wrap -->
	
	
@endsection

