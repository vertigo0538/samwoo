@extends('desktop.layouts.page')
@section('page_content')
		<aside id="sidebar">
			<h2>특장차</h2>
			<div class="sidebar_border">
				<div class="menu {{$title == 'peong'? $active = 'active2' : $active = ''}}"><a class="{{$title == 'peong'? $active = 'active' : $active = ''}}" href="{{url($title2.'/peong')}}">{{$title1[0]}}</a></div>	
				<div class="down_hover">
					<div class="menu down_arrow {{$title == 'wing'? $active = 'active' : $active = ''}}">
						<a class="" href="{{url($title2.'/wing/wing_0')}}">{{$title1[1]}}</a>
					</div>
					<div class="aru_sub">
						<ul>
							@for ($i=0; $i < count($title3['wing']); $i++ ) 					
								<li><a class="{{$title4 == 'wing_'.$i ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/wing/wing_'.$i)}}">- {{$title3['wing'][$i]}}</a></li>
							@endfor						
						</ul>
					</div>	
				</div>
				<div class="down_hover">
				<div class="menu down_arrow {{$title == 'topcar'? $active = 'active' : $active = ''}}">
					<a href="{{url($title2.'/topcar/topcar_0')}}">{{$title1[2]}}</a>
				</div>
				<div class="aru_sub">
					<ul>
						@for ($i=0; $i < count($title3['topcar']); $i++ ) 					
							<li><a class="{{$title4 == 'topcar_'.$i ? $active = 'active2' : $active = ''}}" href="{{url($title2.'/topcar/topcar_'.$i)}}">-{{$title3['topcar'][$i]}}</a></li>
						@endfor						
					</ul>	
				</div>
				</div>	
				<div class="menu {{$title == 'dump'? $active = 'active2' : $active = ''}}"><a class="" href="{{url($title2.'/dump')}}">{{$title1[3]}}</a></div>	
				<div class="menu {{$title == 'swing'? $active = 'active2' : $active = ''}}"><a class="" href="{{url($title2.'/swing')}}">{{$title1[4]}}</a></div>	
				<div class="empty"></div>
				<div class="menu go_quota"><a href="/step1"><span class="blind">견적요청</span></a></div>
			</div>
		</aside>
		
		

		<section id="content_wrap">
			<div class="content">
				<h2>
					@if($title == "peong")
						{{$title1[0]}}
					@elseif($title == "wing")
						{{$title1[1]}}
					@elseif($title == "topcar")
						{{$title1[2]}}
					@elseif($title == "dump")
						{{$title1[3]}}
					@elseif($title == "swing")
						{{$title1[4]}}
					@endif	
				</h2>
				<aside id="tab">
						@if($title == 'wing')
							<table class="wing_tab">
								<tr>
									@for ($i=0; $i < count($title3[$title]); $i++ ) 
									<td class="{{$title4 == 'wing_'.$i ? $active = 'on' : $active = ''}}">
										<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
									</td>
									@endfor
								</tr>
							</table>
						@elseif($title == 'topcar')
							
						@for ($i=0; $i < count($title3[$title]); $i++) 
							<table class="wing_tab">
								<tr>
									@for ($i=0; $i < count($title3[$title]); $i++ ) 
									<td class="{{$title4 == 'topcar_'.$i ? $active = 'on' : $active = ''}}">
										<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
									</td>
									@endfor
								</tr>
							</table>
						@endfor
					
						@endif
						
				</aside>
				<article class="sub_content">
					@yield('sub_content')
				</article>
			</div> <!-- content -->
		</section> <!-- content_wrap -->
@endsection
                                                                                                 