<style type="text/css">
	/*.cs_info ul li{
		padding: 10px 0;
		list-style: none;
	}	
	.info{
		border:1px solid #dcdcdc;		
		padding-top: 10px;
	}*/
	/*.info_ul{
		float: left;
	}*/
	/*.info_ul2 li{
		border-top:3px solid #848383;
	}*/
	/*.info_ul ul{
		margin:0;
		padding: 0;
	}*/
	/*.color1{
		background-color: #ededed;
		font-weight: bold;

	}*/
	/*.info_ul li{
		
		border:1px solid #dcdcdc;
		list-style: none;
		padding: 20px 0;
		text-align: center;
		height: 60px;
		box-sizing: border-box;
	}*/
	/*.info_ul li:last-child{
		height: 200px;
		text-align: left;
	}*/
	/*h2{
		padding-top: 20px;
		padding-left: 20px;*/
		/*background:url(../images/page/full_arrow.png) 0px 0px no-repeat;
		background-size: 15px 15px;*/
	/*}*/
	/*h2 img{
		width: 17px;
		display: inline-block;
		margin-right: 10px;
	}*/
	/*.info_quota{
		padding-left: 40px;
	}*/
	/*.td{
		font-weight:bold; background-color:#ededed; border:1px solid #dcdcdc; width:200px; text-align: center; padding: 20px;
	}
	.td2{
		width: 80%;
		border:1px solid #dcdcdc;
		padding: 20px 0px 20px 40px;
	}*/
	/*table{
		table-layout: fixed;
		border-collapse: collapse;
		
	}*/
</style>



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

<h2 style="padding-top: 20px;padding-left: 20px;"><img style="width: 17px;display: inline-block;margin-right: 10px;" src="{{URL::asset('/images/page/full_arrow.png')}}" alt="">견적내용</h2>
<!-- <div class="info cf"> -->
	<div>
		<div class="info_ul info_ul2" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" ></li>
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" >대분류</li>
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" >1분류</li>
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" >2분류</li>
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" >3분류</li>
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;" class="color1" >4분류</li>
				<!-- <li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;height: 200px;text-align: center;" class="color1">기타 별도기재</li> -->
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				<li class="margin-left:0px !important; color1" style="background-color: #ededed;font-weight: bold;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed;">견적서1</li>
				@foreach($firstdatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				<li class="margin-left:0px !important; color1" style="background-color: #ededed;font-weight: bold;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed;">견적서2</li>
				@foreach($seconddatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				<li class="margin-left:0px !important; color1" style="background-color: #ededed;font-weight: bold;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed;">견적서3</li>
				@foreach($thirddatas as $key => $value)
				<li style="margin-left:0px !important; text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
	</div>
	<div style="clear:both;">
		<div class="info_ul info_ul2" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				<li style="margin-left:0px !important; border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;height: 60px;box-sizing: border-box;border-top:3px solid #848383;background-color: #ededed; font-weight: bold;height: 400px;text-align: center;" class="color1">기타 별도기재</li>
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				@foreach($firstetc as $key => $value)
				<li style="margin-left:0px !important; height: 400px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				@foreach($secondetc as $key => $value)
				<li style="margin-left:0px !important; height: 400px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
		<div class="info_ul" style="float:left; width:18%;">
			<ul style="margin:0;padding: 0;">
				@foreach($thirdetc as $key => $value)
				<li style="margin-left:0px !important; height: 400px;text-align: left;border:1px solid #dcdcdc;list-style: none;padding: 20px 0;text-align: center;box-sizing: border-box;border-top:3px solid #848383;">{{$value}}</li>	
				@endforeach
			</ul>
		</div>
	</div>
<!-- </div> -->

