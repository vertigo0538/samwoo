$(function(){
	$(window).resize(function(){
		var $width = $(window).width();
		$(".dropdown_wrap").css({
			'min-width' : $width
		});
		//console.log($width);
	});

	$(".dropdown").mouseenter(function(){
		$(this).find($(".sub_header")).stop().fadeIn(600);
		
	});
	$(".dropdown").mouseleave(function(){
		$(this).find($(".sub_header")).hide();
	});
	// $(".dropdown2").mouseenter(function(){
	// 	$(".dropdown_wrap").stop().slideUp();

	// });
	$(".dropdown").mouseenter(function(){
		$(".dropdown_wrap").stop().slideDown(300);
	});
	$(".dropdown").mouseleave(function(){
		$(".dropdown_wrap").stop().slideUp();
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



}); //jquery end
	











	
	

	




	

