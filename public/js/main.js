$(function(){
	$(window).resize(function(){
		var $width = $(window).width();
		$(".dropdown_wrap").css({
			'min-width' : $width
		});
		//console.log($width);
	});

	 $(".nav").mouseleave(function(){
		$("#header_wrap,.main_header_wrap").removeClass("down");
		$(".dropdown_wrap").slideUp(300);
	 });
	 $(".nav > ul > li:last-child").mouseenter(function(){
		$("#header_wrap,.main_header_wrap").removeClass("down");
	});
	
	$(".dropdown").mouseenter(function(){
		$(this).find($(".sub_header")).stop().fadeIn(500);
		
		$(this).find($(".second_depth")).addClass("border");
		
		$(".dropdown_wrap").slideDown(300);
		$(".page_content").addClass("zindex");
		$("#header_wrapm,.main_header_wrap").addClass("down");
		$(".layer").show();
	});
	$(".dropdown").mouseleave(function(){
		$(".page_content").removeClass("zindex");

		$(this).find($(".second_depth")).removeClass("border");
		
		$(this).find($(".sub_header")).stop().fadeOut(100);
		$(".layer").hide();
	});
	$(".nav > ul > li:last-child").mouseenter(function(){
		$(".dropdown_wrap").slideUp(300);
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
	











	
	

	




	

