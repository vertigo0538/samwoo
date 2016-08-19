<div style="text-align:center; padding:40px; border:1px solid #ededed;"> 
	<img src="{{URL::asset('/images/main/come.png')}}" alt="">
</div>

<h2 style="padding-top: 20px;padding-left: 20px;"><img style="width: 17px;display: inline-block;margin-right: 10px;" src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">고객정보</h2>
<!-- <div class="cs_info info"> -->
<table style="table-layout: fixed;
		border-collapse: collapse;">
	<tr>
		<td class="td" style="font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;">이름</td>
		<td class="td2" style="width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;">{{$mail_content['name']}}</td>
	</tr>
	<tr>
		<td class="td" style="font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;">상호명</td>
		<td class="td2" style="width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;">{{$mail_content['shopname']}}</td>
	</tr>
	<tr>
		<td class="td" style="font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;">전화번호</td>
		<td class="td2" style="width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;">{{$mail_content['phone']}}</td>
	</tr>
	<tr>
		<td class="td" style="font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;">이메일</td>
		<td class="td2" style="width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;">{{$mail_content['email']}}</td>
	</tr>
	<tr>
		<td class="td" style="font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;">기타 문의</td>
		<td class="td2" style="width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;">{{$mail_content['etc']}}</td>
	</tr>
</table>
<!-- </div> -->

<div style="clear:both;">
	<h2 style="padding-top: 20px;padding-left: 20px;"><img style="width: 17px;display: inline-block;margin-right: 10px;" src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">견적서1</h2>
	<div class="info_ul info_ul2" style="float:left; width:18%;border-top:3px solid #848383;">
		<ul style="margin:0;padding: 0;">
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >대분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >1분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >2분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >3분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >4분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 300px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >별도기재</li>
		</ul>
	</div>
	<div class="info_ul" style="float:left; width:80%;border-top:3px solid #848383;">
			<ul style="margin:0;padding: 0;">
				@foreach($firstdatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing:border-box;">{{$value}}</li>	
				@endforeach
				@foreach($firstetc as $key => $value)
				<li style="overflow-y:auto; margin-left:0px !important; height: 300px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing:border-box;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
</div>
<div style="clear:both;">
	<h2 style="padding-top: 20px;padding-left: 20px;"><img style="width: 17px;display: inline-block;margin-right: 10px;" src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">견적서2</h2>
	<div class="info_ul info_ul2" style="float:left; width:18%;border-top:3px solid #848383;">
		<ul style="margin:0;padding: 0;">
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >대분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing:border-box; background-color: #ededed; font-weight: bold;" class="color1" >1분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing:border-box; background-color: #ededed; font-weight: bold;" class="color1" >2분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing:border-box; background-color: #ededed; font-weight: bold;" class="color1" >3분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing:border-box; background-color: #ededed; font-weight: bold;" class="color1" >4분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 300px;box-sizing:border-box; background-color: #ededed; font-weight: bold;" class="color1" >별도기재</li>
		</ul>
	</div>
	<div class="info_ul" style="float:left; width:80%;border-top:3px solid #848383;">
			<ul style="margin:0;padding: 0;">
				@foreach($seconddatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;">{{$value}}</li>	
				@endforeach
				@foreach($secondetc as $key => $value)
				<li style="overflow-y:auto; margin-left:0px !important; height: 300px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing: border-box;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
</div>
<div style="clear:both;">
	<h2 style="padding-top: 20px;padding-left: 20px;"><img style="width: 17px;display: inline-block;margin-right: 10px;" src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">견적서3</h2>
	<div class="info_ul info_ul2" style="float:left; width:18%;border-top:3px solid #848383;">
		<ul style="margin:0;padding: 0;">
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >대분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >1분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >2분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >3분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >4분류</li>
			<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 300px;box-sizing: border-box;background-color: #ededed; font-weight: bold;" class="color1" >별도기재</li>
		</ul>
	</div>
	<div class="info_ul" style="float:left; width:80%;border-top:3px solid #848383;">
			<ul style="margin:0;padding: 0;">
				@foreach($thirddatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;">{{$value}}</li>	
				@endforeach
				@foreach($thirdetc as $key => $value)
				<li style="overflow-y:auto; margin-left:0px !important; height: 300px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing: border-box;21212">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
</div>


