@extends('desktop.layouts.page2')
@section('page_content')
<style>
	.email_box{
		min-height: 500px;
		/*border: 1px solid red;*/
	}
</style>
	<div class="quota_step">
		<h2><img src="{{URL::asset('/images/quota/step2.png')}}" alt=""></h2>
	</div>
	<div class="email_wrap cf">
		<div class="email_left">
			<form action="{{url('send')}}" method="post" id="email_form">
				{{csrf_field()}}
				<h3>의뢰자 정보입력</h3>
				<div class="email_box">
					<p>견적 받으시는 의뢰자의 정보를 입력해주세요.</p>
					<div class="email_info">
						<ul>
							<li class="cf">
								<div style="">
									<span>성함</span>
									<input type="text" name="name">	
								</div>
								<div>
									<span>상호명</span>
									<input type="text" name="shopname">	
								</div>
							</li>
							<li>
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
				<div style="min-height:550px; border:1px solid #e5e5e5; overflow:hidden;">
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
	


	<script type="text/javascript">
		$(function(){
			$("#email_form").validate({
				rules:{
					name : {
						required:true
					},
					shopname : {
						required:true
					},
					phone :{
						required:true	
					},
					email :{
						required:true,
						email:true
					}
				}, //rules
				messages:{
					name :{
						required:"성함을 입력해주세요"
					},
					shopname:{
						required:"상호명을 입력해주세요"	
					},
					phone:{
						required:"연락처를 입력해주세요"		
					},
					email:{
						required:"이메일을 입력해주세요",		
						email:"정확한 이메일 주소를 입력해주세요"	
					}
				}
			});
		});
	</script>







	
@endsection

