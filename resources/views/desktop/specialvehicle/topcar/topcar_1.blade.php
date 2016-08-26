@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>{{$title3[$title][1]}} 시공 이미지</h3>
		<p style="letter-spacing:-0.04em;">Floor Board는 박스 등 적재물의 미끄럼방지에 효과가 탁월하며, 하증에 대한 안정성과 제품의 안정된 수송에 매우 적합합니다.
		<br>*  합판타입 : 부피화물용(Anti-Slip 합판)</p>
		<img class="mb10" src="{{URL::asset('images/special/topcar_2-1.jpg')}}" alt="합판타입 시공 이미지">
		<img src="{{URL::asset('images/special/topcar_2-2.jpg')}}" alt="합판타입 시공 이미지">
	</section>
	<section class="cf">
		<h3>합판타입 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/special/topcar_2-3-1.png')}}" alt="유럽산 Anti-Slip 합판"></p>
			<span>유럽산 Anti-Slip 합판</span>
		</div>
		<div class="mgr">
			<p><img src="{{URL::asset('images/special/topcar_2-3-2.png')}}" alt="유럽산 Anti-Slip 합판"></p>
			<span>유럽산 Anti-Slip 합판</span>
		</div>
	</section>
@endsection