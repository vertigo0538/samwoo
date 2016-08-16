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
							<li class="policy">
								<label class="p_check" for="policy"><span style="border-bottom:1px solid #000; width:inherit;">개인정보보호정책</span>에 동의합니다.</label>
								<input id="policy" type="checkbox" name="policy">
							</li>
						</ul>
					</div>
				</div> <!-- email_box -->
			</div> <!-- email_left -->

			<div class="email_right">
				<h3>최종제품 내역확인</h3>
				<div style="min-height:567px; border:1px solid #e5e5e5; overflow:hidden;">
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
	<div class="policy_popup">
		<h3>개인정보보호정책 (Personal Information Protection Policy)</h3>
		<div class="pp_content">
			<h4>개인정보 수집 및 이용에 대한 동의</h4>
			<p>
			고객님의 소중한 개인정보는 다음과 같은 정책에 따라 수집 및 이용됩니다. <br>
			저희 (주)삼우특장플러스에서는 해당 목적에 연관되는 개인정보만을 수집하며, <br>
			수집된 정보를 투명하고 안전하게 보호 관리할 것을 약속합니다. <br>
			이에 개인정보 수집및 이용에 대한 동의를 구합니다. <br><br>

			<strong>개인정보의 수집·이용 목적</strong> <br>
			고객님이 요청한 견적사항에 대해 정확한 답변을 위해 수집됩니다. <br><br>

			<strong>수집항목</strong><br>
			성명, 회사명, 연락처, 이메일, 기타내용<br><br>

			<strong>보유이용기간</strong><br>
			개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. <br>
			</p>
		</div>
	</div>
	

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
					},
					policy :{
						required:true,
						maxlength:1
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
					},
					policy:{
						required:"개인정보 보호정책에 동의해주세요",		
					}
				}
			});
		});
		// 최종제품 내역확인에 숫자 부여
		$("input[name='main']").parent().append("<span class='email_number'>01.</span>");
		$("input[name='main2']").parent().append("<span class='email_number'>02.</span>");
		$("input[name='main3']").parent().append("<span class='email_number'>03.</span>");
	</script>







	
@endsection

