<h3>이메일입니다.</h3>

<img src="{{URL::asset('/images/main/logo.png')}}" alt="">

<div style="color:red;">
{{$mail_content['name']}}
{{$mail_content['shopname']}}
{{$mail_content['phone']}}
{{$mail_content['email']}}
{{$mail_content['etc']}}
</div>




@foreach($firstfilter as $key => $value)
<div style="border:1px solid blue;">
	{{$key}}
	{{$value}}		
</div>
@endforeach



@if(count($secondfilter) > 0)
	@foreach($secondfilter as $key => $value)
		<div>
		{{$key}}
		{{$value}}		
		</div>
	@endforeach
@endif



@if(count($thirdfilter) > 0)
	@foreach($thirdfilter as $key => $value)
		<div>
		{{$key}}
		{{$value}}		
		</div>
	@endforeach
@endif