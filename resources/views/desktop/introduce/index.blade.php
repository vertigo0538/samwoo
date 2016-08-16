@extends('desktop.layouts.page')
@section('page_content')
		<aside id="sidebar">
			<h2>회사소개</h2>
			<div class="sidebar_border">
				<div class="menu">
					<a class="{{$title =='hello' ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/hello')}}">{{$title1[0]}}</a>
				</div>
				<div class="menu">
					<a class="{{$title =='cometo' ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/cometo')}}">{{$title1[1]}}</a>
				</div>
				<div class="empty"></div>
				<div class="menu go_quota"><a href="/step1"><span class="blind">견적요청</span></a></div>
			</div>
		</aside>
		

		<section id="content_wrap">
			<div class="content">
				<h2>
					@if($title == "hello")
						{{$title1[0]}}
					@elseif($title == "cometo")
						{{$title1[1]}}
					@endif	
				</h2>
			<article class="sub_content">
				@yield('sub_content')
			</article>
			</div> <!-- content -->			
		
		</section> <!-- content_wrap -->
	
@endsection

			

			
