@extends('desktop.layouts.main')
@section('content')
		<div class="main_left">
			<section>
				<p class=""><img src="{{ URL::asset('images/main/left1.png') }}" alt="SAMWOO TJ PLUS" width="173"></p>
				<h1><img src="{{ URL::asset('images/main/left2.png') }}" alt="차량재,특수목 전문기업 삼우특장플러스" width="373"></h1>
				<span class="bar"></span>
				<p><img src="{{ URL::asset('images/main/left3.png') }}" alt="20여년간 축적한 경험" width="458"></p>
			</section>
		</div>	
		<div class="main_right cf">
			<section class="service">
				<a href="/commontruck/sangall/sangall_0">
				<h2><img src="{{ URL::asset('images/main/service_h3.png') }}" alt="" width="208"></h2>
				<p>보수가 필요한 트럭 적재함 오너분들께<br>
				   <span>다양한 규격과 형태의 고품질 목재</span>로<br> 
				   필요한 목재를 보다 쉽게<br> 
				   제공해 드리는 서비스 입니다.<br>
				</p>
				</a>
			</section>
			<section class="delivery common_right">
				<h2><img src="{{ URL::asset('images/main/delivery_h3.png') }}" alt="" width="140"></h2>
				<p>목재의 규격에 따라,<br>대물배송으로<br>처리됩니다.</p>
			</section>
			<section class="quota common_right">
				<a href="/step1">
					<h2><img src="{{ URL::asset('images/main/quota_h3.png') }}" alt="" width="65"></h2>
					<p>보다 편리하게 필요하신<br> 제품들의 견적요청<br> 해보세요!</p>	
				</a>
			</section>
		</div>
	
@endsection