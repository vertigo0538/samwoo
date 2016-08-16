<style type="text/css">
	.cs_info ul li{
		padding: 10px 0;
		list-style: none;
	}	
	.info{
		border:1px solid #dcdcdc;		
		padding-top: 10px;
	}
	.info_ul{
		float: left;
		/*width: 150px;*/
	}
	.info_ul2 li{
		border-top:3px solid #848383;
	}
	.info_ul ul{
		margin:0;
		padding: 0;
	}
	.color1{
		background-color: #ededed;
		font-weight: bold;

	}
	.info_ul li{
		width: 300px;
		border:1px solid #dcdcdc;
		list-style: none;
		padding: 20px 0;
		text-align: center;
		height: 60px;
		box-sizing: border-box;
	}
	.info_ul li:last-child{
		height: 200px;
		text-align: left;
	}
	h2{
		padding-top: 20px;
		padding-left: 20px;
		/*background:url(../images/page/full_arrow.png) 0px 0px no-repeat;
		background-size: 15px 15px;*/
	}
	h2 img{
		width: 17px;
		display: inline-block;
		margin-right: 10px;
	}
	.info_quota{
		padding-left: 40px;
	}
	.td{
		font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;
	}
	.td2{
		width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;
	}
	table{
		table-layout: fixed;
		border-collapse: collapse;
		
	}
</style>



<div style="text-align:center; padding:40px; border:1px solid #ededed;"> 
	<img src="{{URL::asset('/images/main/come.png')}}" alt="">
</div>

<h2><img src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">고객정보</h2>
<!-- <div class="cs_info info"> -->
<table style="border-collapse:collapse;">
	<tr>
		<td class="td" style="">이름</td>
		<td class="td2">{{$mail_content['name']}}</td>
	</tr>
	<tr>
		<td class="td" style="">상호명</td>
		<td class="td2">{{$mail_content['shopname']}}</td>
	</tr>
	<tr>
		<td class="td" style="">전화번호</td>
		<td class="td2">{{$mail_content['phone']}}</td>
	</tr>
	<tr>
		<td class="td" style="">이메일</td>
		<td class="td2">{{$mail_content['email']}}</td>
	</tr>
	<tr>
		<td class="td" style="">기타 문의</td>
		<td class="td2">{{$mail_content['etc']}}</td>
	</tr>
</table>
<!-- </div> -->

<h2><img src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">견적내용</h2>
<!-- <div class="info cf"> -->
	<div class="info_ul info_ul2">
		<ul>
			<li class="color1"></li>
			<li class="color1">대분류</li>
			<li class="color1">1분류</li>
			<li class="color1">2분류</li>
			<li class="color1">3분류</li>
			<li class="color1">4분류</li>
			<li class="color1" style="text-align:center;">기타 별도기재</li>
		</ul>
	</div>
	<div class="info_ul">
		<ul>
			<li class="color1">견적서1</li>
			@foreach($firstdatas as $key => $value)
			<li>{{$value}}</li>	
			@endforeach
		</ul>
	</div>
	<div class="info_ul">
		<ul>
			<li class="color1">견적서2</li>
			@foreach($seconddatas as $key => $value)
			<li>{{$value}}</li>	
			@endforeach
		</ul>
	</div>
	<div class="info_ul">
		<ul>
			<li class="color1">견적서3</li>
			@foreach($thirddatas as $key => $value)
			<li>{{$value}}</li>	
			@endforeach
		</ul>
	</div>
<!-- </div> -->

