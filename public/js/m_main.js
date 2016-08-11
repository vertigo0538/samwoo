$(function(){
	
	//사이드바 열기
	$("#nav_icon").on('click',SidebarClick);
	
	//사이드바 서브메뉴 열기
	var target = $(".nav > ul > li.aru_sub");
	target.on("click",this,SubmenuToggle);	
	
	//bxslider
	var slider = $('.bxslider').bxSlider({
		captions: true,
		auto:true,
		infiniteLoop: true
	});
	

	//사이드바 h3 백그라운드 적용
	$(".sub_menu h3").each(function(){
		if($(this).next("ul").length > 0){
			$(this).addClass("arusub");
		}
	});

	//브레드크럼
	$(".bread_crumbs h2").click(function(){
		$(this).next().slideToggle();
	});
	$(".sub_content").click(function(){
		if($(".bread_crumbs ul").is(":visible")){
			$(".bread_crumbs ul").slideUp();
		}
	});


	// 견적 라벨 클릭
	$('.select_wrap').on('click','.select_first label',function(){
		var _this = $(this);
		
		_this.closest('.select_first').find('label').removeClass("select");
		$(this).addClass("select");
	});



	//사이드바 열기
	function SidebarClick(){	
		$(this).toggleClass("open");
		if ($(this).hasClass("open")) {
			
			$(".nav").fadeIn();
			$(".header").addClass("color");
			$(".layer").show();
			// $("body").bind('touchmove', function(e){e.preventDefault()});
			// var myScroll = new IScroll('sub_menu', {click:true});
			//myScroll.refresh(); //사이드바 메뉴클릭시 사이드바 높이 다시잡기
		}else{
			$(".nav").fadeOut();			
			$(".header").removeClass("color");
			$(".layer").hide();
		}
	}
	//사이드바 서브메뉴 열기
	function SubmenuToggle(){
		target.removeClass("on");
		$(this).addClass("on");
	}
	
	
	






	
	
}); //jquery 끝
	












	
	

	




	

