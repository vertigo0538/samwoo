@extends('mobile.layouts.page')
@section('page_content')
			<div class="bread_crumbs">
				<h2>
				@if($title == "hello")
						{{$title1[0]}}
				@elseif($title == "cometo")
						{{$title1[1]}}
				@endif	
				</h2>
				<ul>
					<li><a href="{{url($title2.'/hello')}}">{{$title1[0]}}</a></li>
					<li><a href="{{url($title2.'/cometo')}}">{{$title1[1]}}</li>
				</ul>
			</div>
			
			<article class="sub_content">
				@yield('sub_content')
			</article>
			
		
@endsection
                                                                                                 