$(function(){
	$(window).resize(function(){
		var $width = $(window).width();
		$(".dropdown_wrap").css({
			'min-width' : $width
		});
		//console.log($width);
	});

	$(".dropdown").mouseenter(function(){
		$(this).find($(".sub_header")).stop().fadeIn(800);
		$("#header_wrapm,.main_header_wrap").addClass("down");
	});
	$(".dropdown").mouseleave(function(){
		$(this).find($(".sub_header")).hide();

	});
	
	// $(".nav").mouseenter(function(){
	// 	$("#header_wrapm,.main_header_wrap").addClass("down");
	// });
	 $(".nav").mouseleave(function(){
		$("#header_wrap,.main_header_wrap").removeClass("down");
	 });
	 $(".nav > ul > li:last-child").mouseenter(function(){
		$("#header_wrap,.main_header_wrap").removeClass("down");
	});
	// $(".dropdown2").mouseenter(function(){
	// 	$(".dropdown_wrap").stop().slideUp();

	// });
	$(".dropdown").mouseenter(function(){
		$("#wrap_main2 .page_content").addClass("zindex");
		$(".layer").show();
		$(".dropdown_wrap").stop().slideDown(300);
		//$("#header_wrapm,.main_header_wrap").addClass("down");
		
		// if ($(".dropdown_wrap").is(":visible")) {
		// alert("hi");
	//}
	});
	$(".dropdown").mouseleave(function(){
		$("#wrap_main2 .page_content").removeClass("zindex");
		$(".layer").hide();
		$(".dropdown_wrap").stop().slideUp(300);
		//$("#header_wrap,.main_header_wrap").removeClass("down");
	});
	
	
	
	//견적요청 

	$('.select_wrap').on('click','.select_first label',function(){
		var _this = $(this);
		_this.closest('.select_first').find('label').removeClass("select");
		$(this).addClass("select");
	});


	//스크롤 

	$(window).scroll(function(){
		var gotop = $(".go_top");
		var position = $(window).scrollTop();
		if (position > 700) {
			gotop.fadeIn();
		} else{
			gotop.fadeOut();
		}
	});

	//스크롤 탑으로 가기
	$(".go_top").click(function(){
  		$("html,body").animate({scrollTop:0},400);
  	});
	$(".go_top").hover(function(){
		$(this).addClass("add_top");	
	},function(){
		$(this).removeClass("add_top");	
	});

	//개인정보보호정책 팝업

	$(".policy label").click(function(){
		$(this).toggleClass("view");
		if($(this).hasClass("view")){
			$(".policy_popup").bPopup();	
		}
		
	});

	// $(".map1").click(function(){
	// 	alert("hi");
	// });
}); //jquery end
	











	
	

	




	

