@extends('desktop.layouts.page')
@section('page_content')
		<aside id="sidebar">
			<h2>건자재</h2>
			<div class="sidebar_border">
				<div class="menu"><a class="menu_block {{$title == 'dec' ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/dec')}}">{{$title1[0]}}</a></div>	
				<div class="down_hover">
					<div class="menu down_arrow {{$title == 'huroring'? $active = 'active' : $active = ''}}">
						<a class="menu_block {{$title == 'huroring' ? $active = 'active' : $active = ''}}" href="{{url($title2.'/huroring/huroring_0')}}">{{$title1[1]}}</a>
					</div>
					<div class="aru_sub">
						<ul>
							@for ($i=0; $i < count($title3['huroring']); $i++ ) 					
								<li><a class="{{$title4 == 'huroring_'.$i ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/huroring/huroring_'.$i)}}">- {{$title3['huroring'][$i]}}</a></li>
							@endfor						
						</ul>
					</div>	
				</div>
				<div class="menu {{$title == 'etc'? $active = 'active' : $active = ''}}"><a class="menu_block {{$title == 'etc'? $active = 'active' : $active = ''}}" href="{{url($title2.'/etc')}}">{{$title1[2]}}</a></div>	
				<div class="empty"></div>
				<div class="menu go_quota"><a href="/step1"><span class="blind">견적요청</span></a></div>
			</div>
		</aside>
		
			

		<section id="content_wrap">
			<div class="content">
			<h2>
				@if($title == "dec")
					{{$title1[0]}}
				@elseif($title == "huroring")
					{{$title1[1]}}
				@elseif($title == "etc")
					{{$title1[2]}}
				@endif	
			</h2>
			<aside id="tab">
					@if($title == 'huroring')
						<table class="wing_tab">
							<tr>
								@for ($i=0; $i < count($title3[$title]); $i++ ) 
							<td class="{{$title4 == 'huroring_'.$i ? $active = 'on' : $active = ''}}">
								<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
							</td>
						@endfor
							</tr>
						</table>
					@endif
			</aside>
			<article class="sub_content">
				@yield('sub_content')
			</article>
			</div> <!-- content -->			
		</section> <!-- content_wrap -->
	
@endsection

			

			
