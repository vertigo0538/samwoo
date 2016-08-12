<!-- <script src="https://code.jquery.com/jquery-3.1.0.slim.js" integrity="sha256-L6ppAjL6jgtRmfiuigeEE5AwNI2pH/X9IBbPyanJeZw=" crossorigin="anonymous"></script> -->
		
<style type="text/css">
	.cs_info ul li{
		padding: 10px 0;
		list-style: none;
	}	
	.info{
		border:1px solid #ededed;		
		padding-top: 10px;
	}
	h2{
		padding-top: 20px;
		padding-left: 20px;
	}
	.info_quota{
		padding-left: 40px;
	}
</style>



<div style="text-align:center; padding-top:10px;">
	<img src="{{URL::asset('/images/main/logo.png')}}" alt="" width="100">
</div>

<h2>고객정보</h2>
<div class="cs_info info">
	<ul>
		<li>
			이름 : {{$mail_content['name']}}
		</li>	
		<li>
			상호명 : {{$mail_content['shopname']}}
		</li>	
		<li>
			전화번호 : {{$mail_content['phone']}}
		</li>	
		<li>
			이메일 : {{$mail_content['email']}}
		</li>	
		<li>
			기타 문의 : {{$mail_content['etc']}}
		</li>	
	</ul>
</div>

<h2>견적내용</h2>
<div class="info">
	<div class="info_quota">
		<h3>견적서1</h3>
		<table>
			@foreach($firstfilter as $key => $value)
				<tr>
					<td class="1">{{$key}}</td>
					<td class="2">{{$value}}</td>
				</tr>
			@endforeach
		</table>
	</div>
	<div class="info_quota">
		<h3>견적서2</h3>
		@if(count($secondfilter) > 0)
			@foreach($secondfilter as $key => $value)
			<div style="padding: 10px 0;">
				{{$value}}		
			</div>
			@endforeach
		@else
			<p>내용이 없습니다.</p>
		@endif
	</div>
	<div class="info_quota">
		 <h3>견적서3</h3>
		@if(count($thirdfilter) > 0)
			@foreach($thirdfilter as $key => $value)
			<div style="padding: 10px 0;">
				{{$value}}		
			</div>
			@endforeach
		@else
			<p>내용이 없습니다.</p>
		@endif
	</div>	 
</div>


<!-- <script type="text/javascript">
	$(function(){
		$(".2").each(function(){
			var $1 = $(".1").text();
			if($2 == "트레일러"){
				$1.text("차종");
			}
		});
	});

</script> -->