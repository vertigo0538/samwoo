@extends('desktop.specialvehicle.index')
@section('sub_content')
	<section class="description">
		<h3>{{$title1[4]}}</h3>
		<p>10여년간의 트럭 및 특장차량 합판 관련 제조경험과 노하우를 바탕으로 탑차 SWING DOOR를 제작 공급하고 있습니다. <br>
			SWING DOOR에서 가장중요한 단품인 합판 직수입을 통해 소요단가를 낮출수 있었으며 경쟁력 있는 가격과 환경으로 <br>
			업계를 선도하고자 합니다. 
</p>	
		<img src="{{URL::asset('images/special/swing_1.jpg')}}" alt="탑차용swingdoor" class="mb10">
	</section>
	<section>
		<h3>탑차용 SWING DOOR 완제품 (합판만 별도 구매 가능)</h3>
		<img src="{{URL::asset('images/special/swing_2.jpg')}}" alt="탑차용swingdoor완제품">
	</section>
@endsection