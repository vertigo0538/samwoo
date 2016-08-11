@extends('mobile.layouts.page')
@section('page_content')
<style>
    .go_top{
        display: none;
    }
</style>
	<div class="bread_crumbs">
		<h2 style="background-image:none;">견적요청</h2>
	</div>
	<div class="quota_step">
		<h3><img src="{{URL::asset('/m_images/quota/step3.png')}}" alt="" width="100%"></h3>
	</div>
	<div class="complete_wrap">
		<h3>견적요청 완료</h3>
		<div class="complete_box">
			<img src="{{URL::asset('/m_images/quota/complete.png')}}" alt="" width="217">
		</div>
		<div class="complete_text">
			<p class="center">삼우특장플러스에 견적을 요청해주셔서 감사합니다<br>
			작성해주신 요청서가 담당자에게 발송 되었으니,<br> 
			꼼꼼히 확인 후 연락드리겠습니다.</p>
		</div>
		<div class="back_home cf">
			<a href="{{url('/')}}">홈으로</a>
		</div>
	</div> <!-- complete_wrap -->
	
@endsection

