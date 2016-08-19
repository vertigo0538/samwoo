@extends('mobile.layouts.page')
@section('page_content')
<style>
    .go_top{
        display: none;
    }
</style>
<script>

function validation(){
   $common1 = $(".select_box_wrap").find(".common1").val();
   $common2 = $(".select_box_wrap").find(".common2").val();
   $common3 = $(".select_box_wrap").find(".common3").val();
   $common4 = $(".select_box_wrap").find(".common4").val();
   $common5 = $(".select_box_wrap2").find(".common5").val();
   $common6 = $(".select_box_wrap2").find(".common6").val();
   $common7 = $(".select_box_wrap2").find(".common7").val();
   $common8 = $(".select_box_wrap2").find(".common8").val();
   $common9 = $(".select_box_wrap3").find(".common9").val();
   $common10 = $(".select_box_wrap3").find(".common10").val();
   $common11 = $(".select_box_wrap3").find(".common11").val();
   $common12 = $(".select_box_wrap3").find(".common12").val();
   $input = $(".select_box_wrap").find("input").is(":checked");
    if( $common1 == "차종을 선택해주세요" || $common1 == "제조사를 선택해주세요" || $common1 == "용도를 선택해주세요" || 
        $common5 == "차종을 선택해주세요" || $common5 == "제조사를 선택해주세요" || $common5 == "용도를 선택해주세요" || 
        $common9 == "차종을 선택해주세요" || $common9 == "제조사를 선택해주세요" || $common9 == "용도를 선택해주세요" || 
        $common2 == "차종을 선택해주세요" || $common2 == "수종을 선택해주세요" || 
        $common6 == "차종을 선택해주세요" || $common6 == "차종을 선택해주세요" || 
        $common10 == "차종을 선택해주세요" || $common10 == "차종을 선택해주세요" || 
        $common3 == "보수부위를 선택해주세요" || $common3 == "제품타입을 선택해주세요" ||
        $common7 == "보수부위를 선택해주세요" || $common7 == "규격을 선택해주세요" ||
        $common11 == "보수부위를 선택해주세요" || $common11 == "규격을 선택해주세요" ||
        $common4 == "규격을 선택해주세요" || $common8 == "규격을 선택해주세요" || $common12 == "규격을 선택해주세요"
        ){
    alert("2차분류를 빈칸없이 선택해주세요");
    return false;     
   } else if(!$input){
    alert("1차분류를 선택해주세요");
    return false;     
   }
    return true;
   //alert($(".select_box_wrap .common1").length);
}
 

var _A_1Depth = ["차종을 선택해주세요","트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너"];
var _A_2Depth_T1 = ["차종을 선택해주세요","평판 트레일러","장폭 트레일러","로베드 트레일러","기타 특수"];
var _A_2Depth_T2 = ["차종을 선택해주세요","2.5톤~3.5톤","4.5톤~5톤","8톤~25톤"];
var _A_2Depth_T3 = ["차종을 선택해주세요","1톤~1.5톤","2.5톤~3.5톤","4.5톤~5톤","8톤~25톤"];
var _A_2Depth_T4 = ["차종을 선택해주세요","탑차용","덤프용"];
var _A_3Depth_T1 = ["보수부위를 선택해주세요","바닥 보수","기타 보수"];



var _B_1Depth = ["제조사를 선택해주세요","현대","대우","기타(해외제조사)"];
var _B_2Depth_T1 = ["차종을 선택해주세요",
                    "(소형)2.5톤","(소형)3.5톤",
                    "(중형)4.5톤 단축","(중형)4.5톤 장축","(중형)4.5톤 초장축","(중형)5톤 단축","(중형)5톤 장축","(중형)5톤 초장축",
                    "(중형)5톤 초장축 플러스","(중형)5톤 와이드 7.6","(중형)5톤 와이드 8.3",
                    "(대형)8톤 장축","(대형)8톤 초장축","(대형)9.5톤 장축","(대형)9.5톤 초장축","(대형)9.5톤 극장축","(대형)11톤 - 25톤"
                    ];
var _B_2Depth_T2 = ["차종을 선택해주세요",
                    "(중형)4.5톤","(중형)5톤",
                    "(대형)8톤 장축","(대형)8톤 초장축","(대형)9.5톤 장축","(대형)9.5톤 초장축","(대형)9.5톤 극장축","(대형)11톤 - 25톤",
                    ];
var _B_3Depth_T1 = ["보수부위를 선택해주세요","C/B(갈비대)","F/B(바닥재)","G/B(문짝)","L/N(라이너)"];
var _B_3Depth_T2 = ["보수부위를 선택해주세요","C/B(갈비대)","L/N(라이너)"];



var _C_1Depth = ["용도를 선택해주세요","야외 데크재","후로링(건축&체육관 外)"];
var _C_2Depth_T1 = ["수종을 선택해주세요","(남양재)APITONG(아피통)","(남양재)MLH(하드우드)","(남양재)TALI(탈리)","(남양재)IPE(이페)","(북양재)탄화목(참나무外)"];
var _C_2Depth_T2 = ["수종을 선택해주세요","(남양재)APITONG(아피통)","(남양재)MERPAU(멀파우)","(남양재)MLH(하드우드)","(남양재)ACACIA(아카시아)","(남양재)MERBAU(멀바우)",
                    "(북양재)MAPLE(단풍나무)","(북양재)OAK(참나무)","(북양재)BEECH(너도밤나무)","(북양재)ASH"
                    ];

var _C_3Depth_T1 = ["제품타입을 선택해주세요","SOLID(솔리드)","기타(별도기재부탁드립니다)"];
var _C_3Depth_T2 = ["제품타입을 선택해주세요","SOLID(솔리드 코팅사양)"];
var _C_3Depth_T3 = ["제품타입을 선택해주세요","SOLID(솔리드)"];

var _C_4Depth_T1 = ["규격을 선택해주세요","두께*폭(19*80)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T2 = ["규격을 선택해주세요","두께*폭(15*75)","두께*폭(18*75)","두께*폭(24*60)"];
var _C_4Depth_T3 = ["규격을 선택해주세요","두께*폭(17*90)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T4 = ["규격을 선택해주세요","두께*폭(15*150)","기타(별도기재부탁드립니다)"];
var _C_4Depth_T5 = ["규격을 선택해주세요","두께*폭(15*60)","두께*폭(15*75)","두께*폭(15*120)","두께*폭(15*150)","기타(별도기재부탁드립니다)"];


var _D_Text= ["제품타입을 선택해주세요","기타(별도기재부탁드립니다)"];
var _D_Text1= ["규격을 선택해주세요","기타(별도기재부탁드립니다)"];
var _D_Text2= ["차종을 선택해주세요","견적요청 바로가기"];
var _D_Text3= [""];



// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");
// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");
// $_A_1Depth = array("트레일러","윙바디(WING-CAR)","탑차(TOP_CAR)","덤프/특장차 용 라이너");

$(function(){
    

     $(".click").click(function(){
    $common1 = $(".select_box_wrap").find(".common1").val();
    $common11 = $common1.split(' ');
    var $c2 = $(".select_box_wrap").find(".common2").val();
    var $cs2 = $c2.split(' ');
     alert($cs2[1]);
 });

    $(".add_button1").on("click",function(){
    	_cc();
    	$(this).hide();
    });
    $(".select_wrap").delegate(".add_button2","click",function(){
    	_cc2();
    	$(this).hide();
    });
    $(".select_wrap").delegate(".delete1","click",function(){
    	var div = $(".select_box_wrap2");
    	$(this).parent().remove();
    	//reset(div);
    	$(".add_button").show();
    });
    $(".select_wrap").delegate(".delete2","click",function(){
    	$(this).parent().remove();
    	$(".add_button2").show();
    });



    var op1 = [],
        start_id = 4;

    function addField() {
        var clone = ""
        clone = '<div class="select_box_wrap select_box_wrap2">'+
        		'<h3>상세 제품 선택</h3>'+
        		'<span class="delete delete1">항목 삭제</span>'+
        		'<div class="select_box cf">'+
                '   <div class="select_first">'+
                '       <p>1차분류</p>'+
                '       <ul class="cf">'+
                '           <li>'+
                '               <label for="select4">'+
                '                   <img src="{{URL::asset('images/quota/special.png')}}" alt="" width="70">'+
                '                   <p>특장차</p>'+
                '               </label>'+
                '               <input id="select4" value="특장차" type="radio" name="main2">'+
                '           </li>'+
                '           <li>'+
                '               <label for="select5">'+
                '                   <img src="{{URL::asset('images/quota/common.png')}}" alt="" width="70">'+
                '                   <p>상용트럭</p>'+
                '               </label>'+
                '               <input id="select5" value="상용트럭" type="radio" name="main2">'+
                '           </li>'+
                '           <li>'+
                '               <label for="select6">'+
                '                   <img src="{{URL::asset('images/quota/construction.png')}}" alt="" width="70">'+
                '                   <p>건자재</p>'+
                '               </label>'+
                '               <input id="select6" value="건자재" type="radio" name="main2">'+
                '           </li>'+
                '       </ul>'+
                '   </div>'+
                '   <div class="select_second">'+
                '       <p>2차분류</p>'+
                '       <ul>'+
                '           <li class="ss_1">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common5" name="onedepth2"></select>'+
                '           </li>'+
                '           <li class="ss_2">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common6" name="twodepth2"></select>'+
                '           </li>'+
                '           <li class="ss_3">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common7" name="threedepth2"></select>'+
                '           </li>'+
                '           <li class="except">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common8" name="fourdepth2"></select>'+
                '           </li>'+
                '       </ul>'+
                '   </div>'+
                '   </div>'+
                '	<div class="add_button add_button2">'+
		        '		<p>다른 항목의 제품을 추가하시려면 아래 버튼을 눌러주세요</p>'+
		        '			<a href="#none"></a>'+
		        '	</div>'+
                '</div>';


        // start_id+= 1;
        // clone = clone.replace(/select1/g, "select"+start_id);
        // start_id+= 1;
        // clone = clone.replace(/select2/g, "select"+start_id);
        // start_id+= 1;
        // clone = clone.replace(/select3/g, "select"+start_id);
        // start_id+= 1;

        $('form').append(clone);
    }
    function addField2() {
        var clone = ""
        clone = '<div class="select_box_wrap select_box_wrap3">'+
        		'<h3>상세 제품 선택</h3>'+
        		'<span class="delete delete2">항목 삭제</span>'+
        		'<div class="select_box cf">'+
                '   <div class="select_first">'+
                '       <p>1차분류</p>'+
                '       <ul class="cf">'+
                '           <li>'+
                '               <label for="select7">'+
                '                   <img src="{{URL::asset('images/quota/special.png')}}" alt="" width="70">'+
                '                   <p>특장차</p>'+
                '               </label>'+
                '               <input id="select7" value="특장차" type="radio" name="main3">'+
                '           </li>'+
                '           <li>'+
                '               <label for="select8">'+
                '                   <img src="{{URL::asset('images/quota/common.png')}}" alt="" width="70">'+
                '                   <p>상용트럭</p>'+
                '               </label>'+
                '               <input id="select8" value="상용트럭" type="radio" name="main3">'+
                '           </li>'+
                '           <li>'+
                '               <label for="select9">'+
                '                   <img src="{{URL::asset('images/quota/construction.png')}}" alt="" width="70">'+
                '                   <p>건자재</p>'+
                '               </label>'+
                '               <input id="select9" value="건자재" type="radio" name="main3">'+
                '           </li>'+
                '       </ul>'+
                '   </div>'+
                '   <div class="select_second">'+
                '       <p>2차분류</p>'+
                '       <ul>'+
                '           <li class="ss_1">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common9" name="onedepth3"></select>'+
                '           </li>'+
                '           <li class="ss_2">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common10" name="twodepth3"></select>'+
                '           </li>'+
                '           <li class="ss_3">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common11" name="threedepth3"></select>'+
                '           </li>'+
                '           <li class="except">'+
                '               <span class="under_arrow"></span>'+
                '               <select class="common12" name="fourdepth3"></select>'+
                '           </li>'+
                '       </ul>'+
                '   </div>'+
                '   </div>'+
                '</div>';



        // start_id+= 1;
        // clone = clone.replace(/select1/g, "select"+start_id);
        // start_id+= 1;
        // clone = clone.replace(/select2/g, "select"+start_id);
        // start_id+= 1;
        // clone = clone.replace(/select3/g, "select"+start_id);
        // start_id+= 1;

        $('form').append(clone);
    }

    _cc = addField;
    _cc2 = addField2;



function reset(el){
    el.find('option').remove();
    //$(".hi").remove();
}
    

// 1뎁스결정하기
	// $('.select_box_wrap1').delegate('input[name=main]','change',function(){
	// 	var _this = $(this),
 //             div = _this.closest('.select_box');
 //             reset(div);
	// });    
	// $('.select_box_wrap2').delegate('input[name=main2]','change',function(){
	// 	var _this = $(this),
 //             div = _this.closest('.select_box');
 //             reset(div);
	// });    
	// $('.select_box_wrap3').delegate('input[name=main3]','change',function(){
	// 	var _this = $(this),
 //             div = _this.closest('.select_box');
 //             reset(div);
	// });    


    $('.select_wrap').delegate('input[name=main],input[name=main2],input[name=main3]','change',function(){
        var _this = $(this),
             val = _this.val(),
             div = _this.closest('.select_box'),
             sel = div.find('select[name=onedepth],select[name=onedepth2],select[name=onedepth3]');
             sel3 = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
             reset(div);
        //alert(val);
        // console.log( div );
         //console.log( val );

        reset(div);
        switch(val){
            case "특장차":
            set1depth(_A_1Depth,sel);
            sel3.parent().show();
            div.find(".except").hide();
            div.find(".text_1").text("• 차종");
            div.find(".text_2").text("• 상세차종");
            div.find(".text_3").text("• 보수부위");
            div.find(".hi").remove();
            break;
            case "상용트럭":
            set1depth(_B_1Depth,sel);
            sel3.parent().show();
            div.find(".text_1").text("• 제조사");
            div.find(".text_2").text("• 차종");
            div.find(".text_3").text("• 보수부위");
            div.find(".except").hide();
            div.find(".hi").remove();
            break;
            case "건자재":
            set1depth(_C_1Depth,sel);
            sel3.parent().show();
            div.find(".except").show();
            div.find(".text_1").text("• 용도");
            div.find(".text_2").text("• 수종");
            div.find(".text_3").text("• 제품타입");
            div.find(".hi").remove();
            
            break;
        }
    });
    function set1depth(arr,sel){
        //op1.push("<option>"+"선택해주세요"+"</option>");
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
    $('.select_wrap').delegate('select[name=onedepth],select[name=onedepth2],select[name=onedepth3]','change',function(){
        var _this = $(this),
             val = _this.val(),
             div = _this.closest('.select_box'),
             sel = div.find('select[name=twodepth],select[name=twodepth2],select[name=twodepth3]'),
             sel3 = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
             sel4 = div.find('select[name=fourdepth],select[name=fourdepth2],select[name=fourdepth3]');

        switch(val) {
            case "트레일러" :
                //reset(sel3);
                sel3.parent().show();
                setSelectBox(_A_2Depth_T1,sel);
            break;
            case "윙바디(WING-CAR)" :
                //reset(sel3);
                sel3.parent().show();
                setSelectBox(_A_2Depth_T2,sel);
            break;
            case "탑차(TOP_CAR)" :
                //reset(sel3);
                sel3.parent().show();
                setSelectBox(_A_2Depth_T3,sel);
            break;
            case "덤프/특장차 용 라이너" :
                //reset(sel3);
                sel3.parent().hide();
                setSelectBox(_A_2Depth_T4,sel);
            break;
            case "현대" :
                //reset(sel3);
                sel3.parent().show();
                setSelectBox(_B_2Depth_T1,sel);
            break;
            case "대우" :
                //reset(sel3);
                sel3.parent().show();
                setSelectBox(_B_2Depth_T2,sel);
            break;
            case "기타(해외제조사)" :
                //reset(sel3);
                sel3.parent().hide();
                setSelectBox(_D_Text2,sel);
                //reset(sel3);
            break;
            case "야외 데크재" :
                //reset(sel3);
                //reset(sel4);
                div.find(".hi").remove();
                setSelectBox(_C_2Depth_T1,sel);
            break;
            case "후로링(건축&체육관 外)" :
                //reset(sel3);
                //reset(sel4);
                sel3.parents().show();
                sel4.parents().show();
                div.find(".hi").remove();
                setSelectBox(_C_2Depth_T2,sel);
            break;
        }
    });
    
    function setSelectBox(arr,sel){
        //op1.push("<option>"+"선택해주세요"+"</option>");
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
    $('.select_wrap').delegate('select[name=twodepth],select[name=twodepth2],select[name=twodepth3]','change',function(){
        var _this = $(this),
            val = _this.val(),
            div = _this.closest('.select_box'),
            sel = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
            sel1 = div.find('select[name=onedepth],select[name=onedepth2],select[name=onedepth3]');
            sel2 = div.find('select[name=fourdepth],select[name=fourdepth2],select[name=fourdepth3]');
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
                setSelectBox(_A_3Depth_T1,sel);
                //sel_option_none;
            break;
            case "기타 특수" :
                setSelectBox(_A_3Depth_T1,sel);
                //sel_option_none;
            break;
            case "2.5톤~3.5톤" :
                sel.parent().show();
                setSelectBox(_A_3Depth_T1,sel);
            break;
            case "4.5톤~5톤" :
                if(sel1.val() == "윙바디(WING-CAR)"){
                    //sel.parent().show();
                    setSelectBox(_A_3Depth_T1,sel);
                }
                if(sel1.val() == "탑차(TOP_CAR)"){
                    setSelectBox(_A_3Depth_T1,sel);
                }
			break;
            case "8톤~25톤" :
                setSelectBox(_A_3Depth_T1,sel);
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
            // case "4.5톤~5톤" :
            //     sel.parent().show();
            //     //sel_option_none;
            // break;
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
                if(sel1.val() == "야외 데크재"){
                   div.find(".hi").remove();
                // sel.parent().show();
                // sel2.parent().show();
                //_this.find($(".except")).show();
                setSelectBox(_C_3Depth_T1,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)"){
                    div.find(".hi").remove();
                    setSelectBox(_C_3Depth_T3,sel); 
                }

                
            break;
            case "(남양재)MLH(하드우드)" :
                if(sel1.val() == "야외 데크재"){
                    div.find(".hi").remove();
                 //    sel.parent().show();
                	// sel2.parent().show();
                    //_this.find($(".except")).hide();
                    setSelectBox(_C_3Depth_T1,sel);
                    //sel4.parent().remove();
                }
                if(sel1.val() == "후로링(건축&체육관 外)"){
                    div.find(".hi").remove();
                    setSelectBox(_C_3Depth_T2,sel); 
                }
            break;
            case "(남양재)TALI(탈리)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T1,sel);
                // sel.parent().hide();
                // sel2.parent().hide();
                //setSelectBox(_D_Text,sel);
            break;
            case "(남양재)IPE(이페)" :
                //reset(sel2);
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T1,sel);
                // sel.parent().hide();
                // sel2.parent().hide();
            break;
            case "(북양재)탄화목(참나무外)" :
                //reset(sel2);
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T1,sel);
                // sel.parent().hide();
                // sel2.parent().hide();
            break;
            case "(남양재)MERPAU(멀파우)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T3,sel);
            break;
            case "(남양재)ACACIA(아카시아)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "(남양재)MERBAU(멀바우)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "(북양재)MAPLE(단풍나무)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "(북양재)OAK(참나무)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "(북양재)BEECH(너도밤나무)" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "(북양재)ASH" :
                div.find(".hi").remove();
                setSelectBox(_C_3Depth_T2,sel);
            break;
            case "견적요청 바로가기" :
                //setSelectBox(_D_Text3,sel);
            break;
            default :
                setSelectBox(_B_3Depth_T1,sel);
            break;
        }
    });
    
// 3차뎁스 결정하기 끝


//4차뎁스 결정하기

    $('.select_wrap').delegate('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]','change',function(){
        var _this = $(this),
            val = _this.val(),
            div = _this.closest('.select_box'),
            sel = div.find('select[name=fourdepth],select[name=fourdepth2],select[name=fourdepth3]');
            sel1 = div.find('select[name=onedepth],select[name=onedepth2],select[name=onedepth3]');
            sel2 = div.find('select[name=twodepth],select[name=twodepth2],select[name=twodepth3]');
            

        // alert(val);  
        switch(val) {
            case "기타(별도기재부탁드립니다)" :
                setSelectBox(_C_4Depth_T1,sel);
            break;
            case "SOLID(솔리드)" :
                if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)APITONG(아피통)"){
                    
                    setSelectBox(_C_4Depth_T1,sel);
                }
                if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)MLH(하드우드)"){
                    
                    setSelectBox(_C_4Depth_T1,sel);
                }
                if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)TALI(탈리)"){

                    setSelectBox(_C_4Depth_T1,sel);
                }
                if(sel1.val() == "야외 데크재" && sel2.val() == "(남양재)IPE(이페)"){
                    
                    setSelectBox(_C_4Depth_T1,sel);
                }
                if(sel1.val() == "야외 데크재" && sel2.val() == "(북양재)탄화목(참나무外)"){
                    
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
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)ACACIA(아카시아)"){
                    setSelectBox(_C_4Depth_T4,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(남양재)MERBAU(멀바우)"){
                    setSelectBox(_C_4Depth_T4,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(북양재)MAPLE(단풍나무)"){
                    setSelectBox(_C_4Depth_T5,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(북양재)OAK(참나무)"){
                    setSelectBox(_C_4Depth_T5,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(북양재)BEECH(너도밤나무)"){
                    setSelectBox(_C_4Depth_T5,sel);
                }
                if(sel1.val() == "후로링(건축&체육관 外)" && sel2.val() == "(북양재)ASH"){
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
    var parents = _this.parent().parent().parent().parent().parent();
    var div = _this.closest('.select_box');
    var sel = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
    switch(val){
        case "기타(별도기재부탁드립니다)" :
            _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")        
        break;
        case "두께*폭(19*80)" :
            // if(sel.val() == "SOLID(솔리드)"){
            //     _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")            
            // }
            if(sel.val() == "기타(별도기재부탁드립니다)"){
                _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")            
            }
            
        break;
    }
});
$('.select_wrap').delegate('select[name=fourdepth2]','change',function(){
    var _this = $(this),
            val = _this.val();
    var parents = _this.parent().parent().parent().parent().parent();
    var div = _this.closest('.select_box');
    var sel = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
    switch(val){
     case "기타(별도기재부탁드립니다)" :
            _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth2\"></textarea></li>")        
        break;
        case "두께*폭(19*80)" :
            // if(sel.val() == "SOLID(솔리드)"){
            //     _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")            
            // }
            if(sel.val() == "기타(별도기재부탁드립니다)"){
                _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth2\"></textarea></li>")            
            }
            
        break;
    }
});
$('.select_wrap').delegate('select[name=fourdepth3]','change',function(){
    var _this = $(this),
            val = _this.val();
    var parents = _this.parent().parent().parent().parent().parent();
    var div = _this.closest('.select_box');
    var sel = div.find('select[name=threedepth],select[name=threedepth2],select[name=threedepth3]');
    switch(val){
        case "기타(별도기재부탁드립니다)" :
            _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth3\"></textarea></li>")        
        break;
        case "두께*폭(19*80)" :
            // if(sel.val() == "SOLID(솔리드)"){
            //     _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth\"></textarea></li>")            
            // }
            if(sel.val() == "기타(별도기재부탁드립니다)"){
                _this.parent().parent().append("<li class=\"hi\"><textarea name=\"fivedepth3\"></textarea></li>")            
            }
            
        break;
    }
});
// textarea 노출 끝


});
</script>
		<div class="quota">
			<div class="bread_crumbs">
				<h2 style="background-image:none;">견적요청</h2>
			</div>
			<div class="quota_step">
				<h3><img src="{{URL::asset('/m_images/quota/step1.png')}}" alt="" width="100%"></h3>
			</div>
			<div class="select_wrap">
				<form action="{{url('step2')}}" method="post" onsubmit="return validation()">  
				{{csrf_field()}}
				<div class="select_box_wrap select_box_wrap1">
				<h3>상세 제품 선택</h3>
				<div class="select_box cf">
					<div class="select_first">
						<p>1차분류</p>
						<ul class="cf">
							<li>
								<label for="select1">
									<img src="{{URL::asset('images/quota/special.png')}}" alt="" width="70">
									<p>특장차</p>
								</label>
								<input id="select1" value="특장차" type="radio" name="main">
							</li>
							<li>
								<label for="select2">
									<img src="{{URL::asset('images/quota/common.png')}}" alt="" width="70">
									<p>상용트럭</p>
								</label>
								<input id="select2" value="상용트럭" type="radio" name="main">
							</li>
							<li>
								<label for="select3">
									<img src="{{URL::asset('images/quota/construction.png')}}" alt="" width="70">
									<p>건자재</p>
								</label>
								<input id="select3" value="건자재" type="radio" name="main">
							</li>
						</ul>
					</div> <!-- select_first -->
					<div class="select_second">
						<p>2차분류</p>
						<ul>
							<li class="ss_1">
								<!-- <span class="ss_text text_1">• 차종</span> -->
								<span class="under_arrow"></span>
								<select class="common1" name="onedepth"></select>
							</li>
							<li class="ss_2">
								<!-- <span class="ss_text text_2">• 상세차종</span> -->
								<span class="under_arrow"></span>
								<select class="common2" name="twodepth"></select>
							</li>
							<li class="ss_3">
								<!-- <span class="ss_text text_3">• 보수부위</span> -->
								<span class="under_arrow"></span>
								<select class="common3" name="threedepth"></select>
							</li>
							<li class="except">
								<!-- <span class="ss_text">• 규격</span> -->
								<span class="under_arrow"></span>
								<select class="common4" name="fourdepth"></select>
							</li>
						</ul>
					</div> <!-- select_second -->
				</div> <!-- select_box -->
					<div class="add_button add_button1">
		        		<p>다른 항목의 제품을 추가하시려면 아래 버튼을 눌러주세요</p>
		        		<a href="#none"></a>
		        	</div>
				</div> <!-- select_box_wrap1 -->
			</div> <!-- select_wrap -->
		<div class="next">
	   		<button type="submit">다음</button>	
    	</div>				
		</form>
		</div> <!-- quota -->
@endsection