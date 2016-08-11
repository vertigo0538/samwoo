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
		<h3><img src="{{URL::asset('/m_images/quota/step2.png')}}" alt="" width="100%"></h3>
	</div>
	<div class="email_wrap cf">
		<div class="email_left">
			<form action="{{url('send')}}" method="post">
				{{csrf_field()}}
				<h3>의뢰자 정보입력</h3>
				<div class="email_box">
					<p>견적 받으시는 의뢰자의 정보를 입력해주세요.</p>
					<div class="email_info">
						<ul>
							<li>
								<span>성함</span>
								<input type="text" name="name">	
								@if(count($errors) > 0)
                                    @foreach($errors -> all() as $error)
                                        {{$error}}
                                    @endforeach
                                @endif
							</li>
							<li>
								<span>상호명</span>
								<input type="text" name="shopname">	
							</li>
							<li>
								<span>연락처</span>
								<input type="text" name="phone">
							</li>
							<li>
								<span>이메일</span>
								<input type="text" name="email">
							</li>
							<li>
								<span style="vertical-align:top;">기타문의</span>
								<textarea name="etc" id="" cols="30" rows="10" name="etc"></textarea>
							</li>
						</ul>
					</div>
				</div> <!-- email_box -->
			</div> <!-- email_left -->

			<div class="email_right">
				<h3>최종제품 내역확인</h3>
				<div style="border:1px solid #e5e5e5; overflow:hidden;">
				@foreach($datas as $key => $value)
					<div>
						<input type="text" value="{{$value}}" name="{{$key}}" readonly="readonly">
					</div>
				@endforeach
				</div>
			<div class="email_button cf">
				<div class="next">
					<button type="submit">다음</button>	
				</div>
				<div class="prev">
					<a href="javascript:history.back()">이전</a>	
				</div>								
			</div>
			</div> <!-- email_right -->

			
		</form>
		
	</div> <!-- email_wrap -->
	









<style>
	.email_box{
		min-height: 500px;
		/*border: 1px solid red;*/
	}
</style>
	
@endsection

