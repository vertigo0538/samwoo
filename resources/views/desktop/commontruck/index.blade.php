@extends('desktop.layouts.page')
@section('page_content')
		<aside id="sidebar">
			<h2>상용트럭</h2>
			<div class="sidebar_border">
				<div class="down_hover">
					<div class="menu down_arrow {{$title == 'sangall'? $active = 'active' : $active = ''}}">
						<a class="{{$title == 'sangall'? $active = 'active' : $active = ''}}" href="{{url($title2.'/sangall/sangall_0')}}">{{$title1[0]}}</a>
					</div>
					<div class="aru_sub">
						<ul>
							@for ($i=0; $i < count($title3['sangall']); $i++ ) 					
							<li><a class="{{$title4 == 'sangall_'.$i ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/sangall/sangall_'.$i)}}">- {{$title3['sangall'][$i]}}</a></li>
						@endfor							
						</ul>
					</div>
				</div>
				<div class="down_hover">
					<div class="menu down_arrow {{$title == 'sangbosu'? $active = 'active' : $active = ''}}">
						<a class="{{$title == 'sangbosu'? $active = 'active' : $active = ''}}" href="{{url($title2.'/sangbosu/sangbosu_0')}}">{{$title1[1]}}</a>
					</div>
					<div class="aru_sub">
						<ul>
							@for ($i=0; $i < count($title3['sangbosu']); $i++ ) 					
							<li><a class="{{$title4 == 'sangbosu_'.$i ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/sangbosu/sangbosu_'.$i)}}">- {{$title3['sangbosu'][$i]}}</a></li>
						@endfor							
						</ul>
					</div>
				</div>
				<div class="empty"></div>
				<div class="menu go_quota"><a href="/step1"><span class="blind">견적요청</span></a></div>
			</div>
		</aside>
		

		<section id="content_wrap">
			<div class="content">
				<h2>
					@if($title == "sangall")
						{{$title1[0]}}
					@elseif($title == "sangbosu")
						{{$title1[1]}}
					@endif	
				</h2>
			<aside id="tab">
					@if($title == 'sangall')
						<table class="wing_tab">
							<tr>
								@for ($i=0; $i < count($title3[$title]); $i++ ) 
								<td class="{{$title4 == 'sangall_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
								</td>
								@endfor
							</tr>
						</table>
						@elseif($title == 'sangbosu')
						<table class="wing_tab wing_tab2">
							<tr>
								@for ($i=0; $i < count($title3[$title]); $i++ ) 
								<td class="{{$title4 == 'sangbosu_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3['sangbosutap'][$i]}}</a>
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

			

			
