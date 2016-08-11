@extends('mobile.layouts.page')
@section('page_content')
			<div class="bread_crumbs">
				<h2>
				@if($title == "dec")
					{{$title1[0]}}
				@elseif($title == "huroring")
					{{$title1[1]}}
				@elseif($title == "etc")
					{{$title1[2]}}
				@endif	
				</h2>
				<ul>
					<li><a class="{{$title == 'dec'? $active = 'active' : $active = ''}}" href="{{url($title2.'/dec')}}">{{$title1[0]}}</a></li>
					<li><a class="{{$title == 'huroring'? $active = 'active' : $active = ''}}" href="{{url($title2.'/huroring/huroring_0')}}">{{$title1[1]}}</a></li>
					<li><a class="{{$title == 'etc'? $active = 'active' : $active = ''}}" href="{{url($title2.'/etc')}}">{{$title1[2]}}</a></li>
				</ul>
			</div>
			
			@if($title == 'huroring')
					<div class="tab">
					<table>
						<tr>	
							@for ($i=0; $i < count($title3[$title]); $i++ ) 
								<td class="{{$title4 == 'huroring_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
								</td>
							@endfor
						</tr>
					</table>	
					</div>
			@endif

			<article class="sub_content">
				@yield('sub_content')
			</article>
			
		
@endsection
                                                                                                 