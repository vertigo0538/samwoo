@extends('mobile.layouts.main')
@section('content')
	<div class="slider_wrap">
		<ul class="bxslider cf">
			<li>
				<img src="{{URL::asset('m_images/main/main_text1.png')}}" alt="삼우특장플러스" width="100%">
			</li>
			<li><img src="{{URL::asset('m_images/main/main_text2.png')}}" alt="삼우특장플러스" width="100%"></li>
		</ul>
	</div>
	<!-- </div> -->
	</div>
		<div class="delivery">
			<img src="{{URL::asset('m_images/main/delivery.png')}}" alt="배송관련 유의사항" width="100%">
		</div>
		<div class="quota">
			<a href="/step1"><img src="{{URL::asset('m_images/main/quota.png')}}" alt="견적요청" width="100%"></a>
		</div>	
	
	
	
@endsection