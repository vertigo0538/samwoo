@extends('mobile.layouts.page')
@section('page_content')
			<div class="bread_crumbs">
				<h2>
				@if($title == "sangall")
					{{$title1[0]}}
				@elseif($title == "sangbosu")
					{{$title1[1]}}
				@endif	
				</h2>
				<ul>
					<li><a class="{{$title == 'sangall'? $active = 'active' : $active = ''}}" href="{{url($title2.'/sangall/sangall_0')}}">{{$title1[0]}}</a></li>
					<li><a class="{{$title == 'sangbosu'? $active = 'active' : $active = ''}}" href="{{url($title2.'/sangbosu/sangbosu_0')}}">{{$title1[1]}}</a></li>
				</ul>
			</div>
			
			<div>
				
				@if($title == 'sangall')
				<div class="tab">
					<table>
						<tr>				
							@for ($i=0; $i < count($title3[$title]); $i++ ) 
								<td class="{{$title4 == 'sangall_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
								</td>
							@endfor
						</tr>
					</table>	
					</div>
						
						@elseif($title == 'sangbosu')
						<div class="tab">
							<table>
								<tr>				
							@for ($i=0; $i < count($title3[$title]); $i++) 
								<td class="{{$title4 == 'sangbosu_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3['sangbosutap'][$i]}}</a>
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
                                                                                                 