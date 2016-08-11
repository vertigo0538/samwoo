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
	var op1 = [],
		start_id = 4;

	function addField() {
		var clone = ""
		clone = '<div class="select_box cf">'+
				'	<div class="select_first">'+
				'		<p>1차분류</p>'+
				'		<ul>'+
				'			<li>'+
				'				<label for="select1">'+
				'					<img src="{{URL::asset('images/quota/round.png')}}" alt="">'+
				'					<p>특장차</p>'+
				'				</label>'+
				'				<input id="select1" value="special" type="radio" name="main">'+
				'			</li>'+
				'			<li>'+
				'				<label for="select2">'+
				'					<img src="{{URL::asset('images/quota/round.png')}}" alt="">'+
				'					<p>상용트럭</p>'+
				'				</label>'+
				'				<input id="select2" value="common" type="radio" name="main">'+
				'			</li>'+
				'			<li>'+
				'				<label for="select3">'+
				'					<img src="{{URL::asset('images/quota/round.png')}}" alt="">'+
				'					<p>건자재</p>'+
				'				</label>'+
				'				<input id="select3" value="construction" type="radio" name="main">'+
				'			</li>'+
				'		</ul>'+
				'	</div>'+
				'	<div class="select_second">'+
				'		<p>2차분류</p>'+
				'		<ul>'+
				'			<li class="ss_1">'+
				'				<span class="ss_text text_1">• 차종</span>'+
				'				<span class="under_arrow"></span>'+
				'				<select name="onedepth"></select>'+
				'			</li>'+
				'			<li class="ss_2">'+
				'				<span class="ss_text text_2">• 상세차종</span>'+
				'				<span class="under_arrow"></span>'+
				'				<select name="twodepth"></select>'+
				'			</li>'+
				'			<li class="ss_3">'+
				'				<span class="ss_text text_3">• 보수부위</span>'+
				'				<span class="under_arrow"></span>'+
				'				<select name="threedepth"></select>'+
				'			</li>'+
				'			<li class="except">'+
				'				<span class="ss_text">• 규격</span>'+
				'				<span class="under_arrow"></span>'+
				'				<select name="fourdepth"></select>'+
				'			</li>'+
				'		</ul>'+
				'	</div>'+
				'</div>';


		start_id+= 1;
		clone = clone.replace(/select1/g, "select"+start_id);
		start_id+= 1;
		clone = clone.replace(/select2/g, "select"+start_id);
		start_id+= 1;
		clone = clone.replace(/select3/g, "select"+start_id);
		start_id+= 1;

		$('form').append(clone);
	}

	_cc = addField;

function reset(el){
	el.find('option').remove();
	// sel1.find("option").remove();
	// sel2.find("option").remove();
	// sel3.find("option").remove();
	// sel4.find("option").remove();
}
	

// 1뎁스결정하기
	$('.select_wrap').delegate('input[name=main]','change',function(){
		var _this = $(this),
		     val = _this.val(),
		     div = _this.closest('.select_box'),
		     sel = div.find('select[name=onedepth]');

		//alert(val);
		console.log( div );
		console.log( val );

		reset(div);
		switch(val){
			case "special":
			set1depth(_A_1Depth,sel);
			//$(".except").hide();
			div.find(".except").hide();
			break;
			case "common":
			set1depth(_B_1Depth,sel);
			// $(".text_1").text("• 제조사");
			// $(".text_2").text("• 차종");
			// $(".text_3").text("• 보수부위");
			// $(".except").hide();
			div.find(".text_1").text("• 제조사");
			div.find(".text_2").text("• 차종");
			div.find(".text_3").text("• 보수부위");
			div.find(".except").hide();
			break;
			case "construction":
			set1depth(_C_1Depth,sel);
			// $(".text_1").text("• 용도");
			// $(".text_2").text("• 수종");
			// $(".text_3").text("• 제품타입");
			// $(".except").show();
			div.find(".text_1").text("• 용도");
			div.find(".text_2").text("• 수종");
			div.find(".text_3").text("• 제품타입");
			div.find(".except").show();
			break;
		}
	});
	function set1depth(arr,sel){
		op1.push("<option>"+"선택해주세요"+"</option>");
		for (var i = 0, len = arr.length; i < len; i++) {
			op1.push("<option value=\""+arr[i]+"\">"+arr[i]+"</option>");
		}
		if (op1.length > 0 ) {
			sel.find('option').remove();
			sel.append(op1.join(''));
			op1 = [];
		}
	}


// 1뎁스결정하기 끝



	
// 2차뎁스결정하기
	$('.select_wrap').delegate('select[name=onedepth]','change',function(){
		var _this = $(this),
		     val = _this.val(),
		     div = _this.closest('.select_box'),
		     sel = div.find('select[name=twodepth]'),
		     sel3 = div.find('select[name=threedepth]');

		switch(val) {
			case "트레일러" :
				setSelectBox(_A_2Depth_T1,sel);
			break;
			case "윙바디(WING-CAR)" :
				setSelectBox(_A_2Depth_T2,sel);
			break;
			case "탑차(TOP_CAR)" :
				setSelectBox(_A_2Depth_T3,sel);
			break;
			case "덤프/특장차 용 라이너" :
				setSelectBox(_A_2Depth_T4,sel);
			break;
			case "현대" :
				sel3.parent().show();
				setSelectBox(_B_2Depth_T1,sel);
			break;
			case "대우" :
				sel3.parent().show();
				setSelectBox(_B_2Depth_T2,sel);
			break;
			case "기타(해외제조사)" :
				sel3.parent().hide();
				setSelectBox(_D_Text2,sel);
			break;
			case "야외 데크재" :
				$(".hi").remove();
				setSelectBox(_C_2Depth_T1,sel);
			break;
			case "후로링(건축&체육관 外)" :
				$(".hi").remove();
				setSelectBox(_C_2Depth_T2,sel);
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
	$('.select_wrap').delegate('select[name=twodepth]','change',function(){
		var _this = $(this),
		    val = _this.val(),
		    div = _this.closest('.select_box'),
		    sel = div.find('select[name=threedepth]');
		    sel1 = div.find('select[name=onedepth]');
			//sel_option_none = _this.find('option').attr('value','');


		switch(val) {
			case "평판 트레일러" :
				sel.parent().show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "장폭 트레일러" :
				sel.parent().show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "로베드 트레일러" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "기타 특수" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "2.5톤~3.5톤" :
				sel.parent().show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "4.5톤~5톤" :
				sel.parent().show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "8톤~25톤" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "1톤~1.5톤" :
				//sel.show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "2.5톤~3.5톤" :
				sel.parent().show();
				setSelectBox(_A_3Depth_T1,sel);
			break;
			case "4.5톤~5톤" :
				sel.parent().show();
				//sel_option_none;
			break;
			case "8톤~25톤" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "탑차용" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "덤프용" :
				sel.parent().hide();
				//sel_option_none;
			break;
			case "(중형)4.5톤" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(중형)5톤" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)8톤 장축" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)8톤 초장축" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)9.5톤 장축" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)9.5톤 초장축" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)9.5톤 극장축" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(대형)11톤 - 25톤" :
				setSelectBox(_B_3Depth_T2,sel);
			break;
			case "(남양재)APITONG(아피통)" :
				$(".ss_3").show();
				$(".except").show();
				setSelectBox(_C_3Depth_T1,sel);
			break;
			case "(남양재)MLH(하드우드)" :
				if(sel1.val() == "야외 데크재"){
					setSelectBox(_D_Text,sel);
					//sel4.parent().remove();
				}
				if(sel1.val() == "후로링(건축&체육관 外)"){
					setSelectBox(_C_3Depth_T2,sel);	
				}
				
			break;
			case "(남양재)TALI(탈리)" :
				$(".ss_3").hide();
				$(".except").hide();
				//setSelectBox(_D_Text,sel);
			break;
			case "(남양재)IPE(이페)" :
				//setSelectBox(_D_Text,sel);
			break;
			case "(북양재)탄화목(참나무外)" :
				//setSelectBox(_D_Text,sel);
			break;
			case "(남양재)MERPAU(멀파우)" :
				setSelectBox(_C_3Depth_T1,sel);
			break;
			case "(남양재)ACACIA(아카시아)" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			case "(남양재)MERBAU(멀바우)" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			case "(북양재)MAPLE(단풍나무)" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			case "(북양재)OAK(참나무)" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			case "(북양재)BEECH(너도밤나무)" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			case "(북양재)ASH" :
				setSelectBox(_C_3Depth_T2,sel);
			break;
			default :
				setSelectBox(_B_3Depth_T1,sel);
			break;
		}
	});
	
// 3차뎁스 결정하기 끝


//4차뎁스 결정하기

	$('.select_wrap').delegate('select[name=threedepth]','change',function(){
		var _this = $(this),
		    val = _this.val(),
		    div = _this.closest('.select_box'),
		    sel = div.find('select[name=fourdepth]');
		    sel1 = div.find('select[name=onedepth]');
		    sel2 = div.find('select[name=twodepth]');
		    

		// alert(val);	
		switch(val) {
			case "SOLID(솔리드)" :
				if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)APITONG(아피통)"){
					setSelectBox(_C_4Depth_T1,sel);
				}
				if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)APITONG(아피통)"){
					setSelectBox(_C_4Depth_T2,sel);
				}
				if(sel2.val() == "(남양재)MERPAU(멀파우)"){
					setSelectBox(_C_4Depth_T3,sel);
				}
				
			break;
			case "SOLID(솔리드 코팅사양)" :
				if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)MLH(하드우드)"){
					setSelectBox(_C_4Depth_T4,sel);
				}else{
					setSelectBox(_C_4Depth_T5,sel);
				}
			break;
		}
	});


//4차뎁스 결정하기 끝

// textarea 노출
$('.select_wrap').delegate('select[name=fourdepth]','change',function(){
	var _this = $(this),
			val = _this.val();
	switch(val){
		case "기타(별도기재부탁드립니다)" :
		_this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")
	}
	
	
	
});
// textarea 노출 끝


});

// function validation(){
// 	var i = 1;
// 	$(".select_box").each(function(){
// 		var _this = $(this);
// 		//_this.find("input[name='main[]']:selected").val();
// 		_this.find("input").each(function(){
// 			if($(this).is(":checked")){
// 				$("form").append("<input name='main_" + i + "' value='" + $(this).val() + "'>");
// 			}
// 		});
// 		i++;
// 	});
// 	return false;

// }

//console.log( _A_1Depth );=
</script>
		<div class="quota_step">
			<h2><span class="blind">요청/제품선택</span></h2>
		</div>
		<div class="select_wrap">
		<form action="{{url('step2')}}" method="post" onsubmit="">	
		{{csrf_field()}}
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
							<select name="onedepth"></select>
						</li>
						<li class="ss_2">
							<span class="ss_text text_2">• 상세차종</span>
							<span class="under_arrow"></span>
							<select name="twodepth"></select>
						</li>
						<li class="ss_3">
							<span class="ss_text text_3">• 보수부위</span>
							<span class="under_arrow"></span>
							<select name="threedepth"></select>
						</li>
						<li class="except">
							<span class="ss_text">• 규격</span>
							<span class="under_arrow"></span>
							<select name="fourdepth"></select>
						</li>
					</ul>
				</div>
			</div> <!-- select_box -->

			<button type="submit">저장하기</button>
			</form>
			
		</div> <!-- select_wrap -->





		
		
		

		
		
		
		
	
@endsection