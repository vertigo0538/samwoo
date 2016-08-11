@extends('desktop.layouts.page')
@section('page_content')
<div style="height:500px;">
	<!-- <div style="width:300px; margin:0 auto;"> -->

	
<script>
var _A_1Depth = ["트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너"];
var _A_2Depth_T1 = ["평판 트레일러","장폭 트레일러","로베드 트레일러","기타 특수"];
var _A_2Depth_T2 = ["2.5톤~3.5톤","4.5톤~5톤","8톤~25톤"];
var _A_2Depth_T3 = ["1톤~1.5톤","2.5톤~3.5톤","4.5톤~5톤","8톤~25톤"];
var _A_2Depth_T4 = ["탑차용","덤프용"];
var _A_3Depth_T1 = ["바닥 보수","기타 보수"];



var _B_1Depth = ["현대","대우","기타(해외제조사)"];
var _B_2Depth_T1 = ["(소형)2.5톤","(소형)3.5톤",
					"(중형)4.5톤 단축","(중형)4.5톤 장축","(중형)4.5톤 초장축","(중형)5톤 단축","(중형)5톤 장축","(중형)5톤 초장축",
					"(중형)5톤 초장축 플러스","(중형)5톤 와이드 7.6","(중형)5톤 와이드 8.3",
					"(대형)8톤 장축","(대형)8톤 초장축","(대형)9.5톤 장축","(대형)9.5톤 초장축","(대형)9.5톤 극장축","(대형)11톤 - 25톤"
					];
var _B_2Depth_T2 = ["(중형)4.5톤","(중형)5톤",
					"(대형)8톤 장축","(대형)8톤 초장축","(대형)9.5톤 장축","(대형)9.5톤 초장축","(대형)9.5톤 극장축","(대형)11톤 - 25톤",
					];
var _B_3Depth_T1 = ["C/B(갈비대)","F/B(바닥재)","G/B(문짝)","L/N(라이너)"];
var _B_3Depth_T2 = ["C/B(갈비대)","L/N(라이너)"];



var _C_1Depth = ["야외 데크재","후로링(건축&체육관 外)"];
var _C_2Depth_T1 = ["(남양재)APITONG(아피통)","(남양재)MLH(하드우드)","(남양재)TALI(탈리)","(남양재)IPE(이페)","(북양재)탄화목(참나무外)"];
var _C_2Depth_T2 = ["(남양재)APITONG(아피통)","(남양재)MERPAU(멀파우)","(남양재)MLH(하드우드)","(남양재)ACACIA(아카시아)","(남양재)MERBAU(멀바우)",
					"(북양재)MAPLE(단풍나무)","(북양재)OAK(참나무)","(북양재)BEECH(너도밤나무)","(북양재)ASH"
					];

var _C_3Depth_T1 = ["SOLID(솔리드)"];
var _C_3Depth_T2 = ["SOLID(솔리드 코팅사양)"];

var _C_4Depth_T1 = ["두께*폭(19*80)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T2 = ["두께*폭(15*75)","두께*폭(18*75)","두께*폭(24*60)"];
var _C_4Depth_T3 = ["두께*폭(17*90)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T4 = ["두께*폭(15*150)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T5 = ["두께*폭(15*150)","두께*폭(15*75)","두께*폭(15*120)","두께*폭(15*150)","기타(별도기재부탁드립니다)"];


var _D_Text= ["기타(별도기재부탁드립니다)"];
var _D_Text2= ["견적요청 바로가기"];



// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");
// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");
// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");

$(function(){
	var sel1 = $('select[name=1depth]'),
		sel2 = $('select[name=2depth]'),
		sel3 = $('select[name=3depth]'),
		sel4 = $('select[name=4depth]'),
		radio = $('input[type=radio]'),
		op1 = [];



function reset(){
	sel1.find("option").remove();
	sel2.find("option").remove();
	sel3.find("option").remove();
	sel4.find("option").remove();
}
	

// 1뎁스결정하기
	radio.change(function(){
		var _this = $(this),
		     val = _this.val();
		//alert(val);
		reset();
	switch(val){
		case "special":
		set1depth(_A_1Depth);
		$(".except").hide();
		break;
		case "common":
		set1depth(_B_1Depth);
		$(".text_1").text("• 제조사");
		$(".text_2").text("• 차종");
		$(".text_3").text("• 보수부위");
		$(".except").hide();
		break;
		case "construction":
		set1depth(_C_1Depth);
		$(".text_1").text("• 용도");
		$(".text_2").text("• 수종");
		$(".text_3").text("• 제품타입");
		$(".except").show();
		break;
	}	
	});

	function set1depth(arr){
		op1.push("<option>"+"선택해주세요"+"</option>");
		for (var i = 0, len = arr.length; i < len; i++) {
			op1.push("<option value=\""+arr[i]+"\">"+arr[i]+"</option>");
		}
		if (op1.length > 0 ) {
			sel1.find('option').remove();
			sel1.append(op1.join(''));
			op1 = [];
		}
	}


// 1뎁스결정하기 끝



	
// 2차뎁스결정하기
	
	sel1.change(function(){
		//alert('1');
		var _this = $(this),
			val = _this.val();
		switch(val) {
			case "트레일러" :
				setSelectBox(_A_2Depth_T1,sel2);
			break;
			case "윙바디(WING-CAR)" :
				setSelectBox(_A_2Depth_T2,sel2);
			break;
			case "탑차(TOP_CAR)" :
				setSelectBox(_A_2Depth_T3,sel2);
			break;
			case "덤프/특장차 용 라이너" :
				setSelectBox(_A_2Depth_T4,sel2);
			break;
			case "현대" :
				sel3.parent().show();
				setSelectBox(_B_2Depth_T1,sel2);
			break;
			case "대우" :
				sel3.parent().show();
				setSelectBox(_B_2Depth_T2,sel2);
			break;
			case "기타(해외제조사)" :
				sel3.parent().hide();
				setSelectBox(_D_Text2,sel2);
			break;
			case "야외 데크재" :
				$(".hi").remove();
				setSelectBox(_C_2Depth_T1,sel2);
			break;
			case "후로링(건축&체육관 外)" :
				$(".hi").remove();
				setSelectBox(_C_2Depth_T2,sel2);
			break;
		}
	});

	function setSelectBox(arr,sel){
		op1.push("<option>"+"선택해주세요"+"</option>");
		for (var i=0, len=arr.length; i < len; i++) {
			op1.push("<option value=\""+arr[i]+"\">"+arr[i]+"</option>");
		}
		if (op1.length > 0 ) {
			sel.find('option').remove();
			sel.append(op1.join(''));
			op1 = [];
		}
	}

// 2차뎁스 결정하기 끝


// 3차뎁스 결정하기
	sel2.change(function(){
		var _this = $(this),
			val = _this.val(),
			sel3_option_none = sel3.find('option').attr('value','');


		switch(val) {
			case "평판 트레일러" :
				sel3.parent().show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "장폭 트레일러" :
				sel3.parent().show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "로베드 트레일러" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "기타 특수" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "2.5톤~3.5톤" :
				sel3.parent().show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "4.5톤~5톤" :
				sel3.parent().show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "8톤~25톤" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "1톤~1.5톤" :
				//sel3.show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "2.5톤~3.5톤" :
				sel3.parent().show();
				setSelectBox(_A_3Depth_T1,sel3);
			break;
			case "4.5톤~5톤" :
				sel3.parent().show();
				sel3_option_none;
			break;
			case "8톤~25톤" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "탑차용" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "덤프용" :
				sel3.parent().hide();
				sel3_option_none;
			break;
			case "(중형)4.5톤" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(중형)5톤" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)8톤 장축" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)8톤 초장축" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)9.5톤 장축" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)9.5톤 초장축" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)9.5톤 극장축" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(대형)11톤 - 25톤" :
				setSelectBox(_B_3Depth_T2,sel3);
			break;
			case "(남양재)APITONG(아피통)" :
				$(".ss_3").show();
				$(".except").show();
				setSelectBox(_C_3Depth_T1,sel3);
			break;
			case "(남양재)MLH(하드우드)" :
				if(sel1.val() == "야외 데크재"){
					setSelectBox(_D_Text,sel3);
					//sel4.parent().remove();
				}
				if(sel1.val() == "후로링(건축&체육관 外)"){
					setSelectBox(_C_3Depth_T2,sel3);	
				}
				
			break;
			case "(남양재)TALI(탈리)" :
				$(".ss_3").hide();
				$(".except").hide();
				//setSelectBox(_D_Text,sel3);
			break;
			case "(남양재)IPE(이페)" :
				//setSelectBox(_D_Text,sel3);
			break;
			case "(북양재)탄화목(참나무外)" :
				//setSelectBox(_D_Text,sel3);
			break;
			case "(남양재)MERPAU(멀파우)" :
				setSelectBox(_C_3Depth_T1,sel3);
			break;
			case "(남양재)ACACIA(아카시아)" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			case "(남양재)MERBAU(멀바우)" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			case "(북양재)MAPLE(단풍나무)" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			case "(북양재)OAK(참나무)" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			case "(북양재)BEECH(너도밤나무)" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			case "(북양재)ASH" :
				setSelectBox(_C_3Depth_T2,sel3);
			break;
			default :
				setSelectBox(_B_3Depth_T1,sel3);
			break;
		}
	});

// 3차뎁스 결정하기 끝


//4차뎁스 결정하기
sel3.change(function(){
		//alert('1');
		var _this = $(this),
			val = _this.val();

		// alert(val);	
		switch(val) {
			case "SOLID(솔리드)" :
				if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)APITONG(아피통)"){
					setSelectBox(_C_4Depth_T1,sel4);
				}
				if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)APITONG(아피통)"){
					setSelectBox(_C_4Depth_T2,sel4);
				}
				if(sel2.val() == "(남양재)MERPAU(멀파우)"){
					setSelectBox(_C_4Depth_T3,sel4);
				}
				
			break;
			case "SOLID(솔리드 코팅사양)" :
				if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)MLH(하드우드)"){
					setSelectBox(_C_4Depth_T4,sel4);
				}else{
					setSelectBox(_C_4Depth_T5,sel4);
				}
			break;
		}
	});
//4차뎁스 결정하기 끝

// textarea 노출
sel4.change(function(){
	var _this = $(this),
			val = _this.val();
	switch(val){
		case "기타(별도기재부탁드립니다)" :
		_this.parent().parent().append("<li class=\"hi\"><textarea></textarea></li>")
	}
	
	
	
});
// textarea 노출 끝


});

//console.log( _A_1Depth );=
</script>
		<div class="quota_step">
			<h2><span class="blind">요청/제품선택</span></h2>
		</div>
		<div class="select_wrap">
			<h3>상세 제품 선택</h3>
			<div class="select_box cf">
				<div class="select_first">
					<p>1차분류</p>
					<ul>
						<li>
							<label for="select1">
								<img src="{{URL::asset('images/quota/round.png')}}" alt="">
								<p>특장차</p>
							</label>
							<input id="select1" value="special" type="radio" name="main">
						</li>
						<li>
							<label for="select2">
								<img src="{{URL::asset('images/quota/round.png')}}" alt="">
								<p>상용트럭</p>
							</label>
							<input id="select2" value="common" type="radio" name="main">
						</li>
						<li>
							<label for="select3">
								<img src="{{URL::asset('images/quota/round.png')}}" alt="">
								<p>건자재</p>
							</label>
							<input id="select3" value="construction" type="radio" name="main">
						</li>
					</ul>
				</div>
				<div class="select_second">
					<p>2차분류</p>
					<ul>
						<li class="ss_1">
							<span class="ss_text text_1">• 차종</span>
							<span class="under_arrow"></span>
							<select name="1depth"></select>
						</li>
						<li class="ss_2">
							<span class="ss_text text_2">• 상세차종</span>
							<span class="under_arrow"></span>
							<select name="2depth"></select>
						</li>
						<li class="ss_3">
							<span class="ss_text text_3">• 보수부위</span>
							<span class="under_arrow"></span>
							<select name="3depth"></select>
						</li>
						<li class="except">
							<span class="ss_text">• 규격</span>
							<span class="under_arrow"></span>
							<select name="4depth"></select>
						</li>
					</ul>
				</div>
			</div>
			<!-- <div class="option_select cf"> -->
				







				<!-- <table>
					<th>1차분류</th>
					<th>2차분류</th>
					<tr>
						<td><input value="special" type="radio" name="main">특장차</td>
						<td>
							<select name="1depth">
							</select>
						</td>
					</tr>
					<tr>
						<td><input value="common" type="radio" name="main">상용트럭</td>
						<td>
							<select name="2depth">
							</select>
						</td>
					</tr>
					<tr>
						<td><input value="construction" type="radio" name="main">건자재</td>
						<td >
							<select name="3depth">
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
						<select class="4depth_option" name="4depth" style="display:none;">
								<option></option>
						</select>
						</td>
					</tr>
				</table> -->
			<!-- </div> -->
		</div>





		
		
		

		
		
		
		
	</div>
<!-- </div> -->
@endsection