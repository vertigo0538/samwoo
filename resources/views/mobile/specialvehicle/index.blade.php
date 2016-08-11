@extends('mobile.layouts.page')
@section('page_content')
			<div class="bread_crumbs">
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
				<ul>
					<li><a class="{{$title == 'peong'? $active = 'active' : $active = ''}}" href="{{url($title2.'/peong')}}">{{$title1[0]}}</a></li>
					<li><a class="{{$title == 'wing'? $active = 'active' : $active = ''}}" href="{{url($title2.'/wing/wing_0')}}">{{$title1[1]}}</a></li>
					<li><a class="{{$title == 'topcar'? $active = 'active' : $active = ''}}" href="{{url($title2.'/topcar/topcar_0')}}">{{$title1[2]}}</a></li>
					<li><a class="{{$title == 'dump'? $active = 'active' : $active = ''}}" href="{{url($title2.'/dump')}}">{{$title1[3]}}</a></li>
					<li><a class="{{$title == 'swing'? $active = 'active' : $active = ''}}" href="{{url($title2.'/swing')}}">{{$title1[4]}}</a></li>
				</ul>
			</div>
				@if($title == 'wing')
					<div class="tab">
					<table>
						<tr>	
							@for ($i=0; $i < count($title3[$title]); $i++ ) 
								<td class="{{$title4 == 'wing_'.$i ? $active = 'on' : $active = ''}}">
									<a href="{{$title.'_'.$i}}">{{$title3[$title][$i]}}</a>
								</td>
							@endfor
						</tr>
					</table>	
					</div>
	
				@elseif($title == 'topcar')
					<div class="tab">
					<table>
						<tr>	
							@for ($i=0; $i < count($title3[$title]); $i++) 
								<td class="{{$title4 == 'topcar_'.$i ? $active = 'on' : $active = ''}}" >
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
                                                                                                 