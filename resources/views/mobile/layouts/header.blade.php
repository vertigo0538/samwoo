<?php 
	$url = $_SERVER['REQUEST_URI'];
	$ex =explode('/' , $url);
	echo $ex[1];
 ?>



<header class="header cf">
	<div class="nav_icon_wrap">
		<div id="nav_icon">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="center">
		<a href="{{URL('/')}}"><img src="{{URL::asset('m_images/main/logo.png')}}" alt="" width="93"></a>
	</div>

	<nav class="nav cf" style="display:none">
		<ul class="cf">
			<li class="aru_sub {{$ex[1] == 'specialvehicle'? $active = 'on' : $active = ''}}">
				<h2>특장차</h2>
				<span>(트레일러&윙바디/탑차)</span>
				<div class="sub_menu">
					<h3><a href="/specialvehicle/peong">평판/장폭 및 로베드 트레일러</h3></a>
					<h3>윙바디용 바닥재</h3>
					<ul>
						<li><a href="/specialvehicle/wing/wing_0">목재타입</a></li>
						<li><a href="/specialvehicle/wing/wing_1">합판타입</a></li>
						<li><a href="/specialvehicle/wing/wing_2">무늬합판</a></li>
					</ul>
					<h3>탑차용 바닥재</h3>
					<ul>
						<li><a href="/specialvehicle/topcar/topcar_0">목재타입</a></li>
						<li><a href="/specialvehicle/topcar/topcar_1">합판타입</a></li>
					</ul>
					<h3><a href="/specialvehicle/dump">덤프/특장차 라이너</a></h3>
					<h3><a href="/specialvehicle/swing">탑차용 swing door</a></h3>
				</div>

			</li>
			<li class="aru_sub {{$ex[1] == 'commontruck'? $active = 'on' : $active = ''}}">
				<h2>상용트럭적재함</h2>
				<span>(보강목&보수용목재)</span>
				<div class="sub_menu">
					<h3>보강목</h3>
					<ul>
						<li><a href="/commontruck/sangall/sangall_0">아피통</a></li>
						<li><a href="/commontruck/sangall/sangall_1">국내원목</a></li>
						<li><a href="/commontruck/sangall/sangall_2">신제품</a></li>
					</ul>
					<h3>A/S부품</h3>	
					<ul>
						<li><a href="/commontruck/sangbosu/sangbosu_0">C/B(갈비대/보강목)</a></li>
						<li><a href="/commontruck/sangbosu/sangbosu_1">F/B(바닥재)</a></li>
						<li><a href="/commontruck/sangbosu/sangbosu_2">G/B(문짝)</a></li>
						<li><a href="/commontruck/sangbosu/sangbosu_3">L/N(라이너)</a></li>
						<li><a href="/commontruck/sangbosu/sangbosu_4">아대</a></li>
					</ul>
				</div>
			</li>
			<li class="aru_sub {{$ex[1] == 'construction'? $active = 'on' : $active = ''}}">
				<h2>건자재</h2>
				<div class="sub_menu">
					<h3><a href="/construction/dec">데크재</a></h3>
					<h3>후로링</h3>
					<ul>
						<li><a href="/construction/huroring/huroring_0">후로링</a></li>
						<li><a href="/construction/huroring/huroring_1">코팅 후로링</a></li>
					</ul>
					<h3><a href="/construction/etc">기타</a></h3>
				</div>
			</li>
			<li class="{{$ex[1] == 'step1'? $active = 'on' : $active = ''}} {{$ex[1] == 'step2'? $active = 'on' : $active = ''}} {{$ex[1] == 'step3'? $active = 'on' : $active = ''}}">
				<a href="/step1">
					<h2>견적요청</h2>
				</a>
			</li>
			<li class="aru_sub {{$ex[1] == 'introduce'? $active = 'on' : $active = ''}}">
				<h2>회사소개</h2>
				<div class="sub_menu">
					<h3><a href="/introduce/hello">인사말</a></h3>
					<h3><a href="/introduce/cometo">오시는길</a></h3>
				</div>
			</li>
		</ul>
	</nav>	
</header>





