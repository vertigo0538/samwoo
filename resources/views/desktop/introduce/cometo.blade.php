@extends('desktop.introduce.index')
@section('sub_content')
	<section>
		<h3>본사</h3>
	<div id="map" style="width:680px; height:380px;"></div>
	<div class="info">
		<ul class="cf">
			<li>
				<span class="info_type">주소</span>
				<span class="info_value">인천광역시 중구 영종대로 327번길 12-2, 3층(운서동)</span>
			</li>
		</ul>
		<ul class="cf">
			<li>
				<span class="info_type">전화</span>
				<span class="info_value">032-577-2584</span>
			</li>
			<li>
				<span class="info_type">팩스</span>
				<span class="info_value">032-577-2584</span>
			</li>
		</ul>
	</div>
	</section>
	<section>
		<h3>공장</h3>
	<div id="map2" style="width:680px; height:380px;"></div>
	<div class="info">
		<ul class="cf">
			<li>
				<span class="info_type">주소</span>
				<span class="info_value">인천광역시 중구 영종대로 327번길 12-2, 3층(운서동)</span>
			</li>
		</ul>
		<ul class="cf">
			<li>
				<span class="info_type">전화</span>
				<span class="info_value">032-577-2584</span>
			</li>
			<li>
				<span class="info_type">팩스</span>
				<span class="info_value">032-577-2584</span>
			</li>
		</ul>
	</div>
	</section>
<script>
	$(document).ready(function(){
		function map1(){
			var oPoint = new nhn.api.map.LatLng(37.4826187, 126.5080421);
         	var oMap = new nhn.api.map.Map(document.getElementById('map'), {
                point : oPoint,
                zoom : 12,
                enableWheelZoom : true,
                enableDragPan : true,
                enableDblClickZoom : true,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                activateRealtyMap : true,
                minMaxLevel : [ 1, 14 ]
                //size : new nhn.api.map.Size(866, 800)         

	});
        		//줌 컨트롤러
        		var oSlider = new nhn.api.map.ZoomControl();
                oMap.addControl(oSlider);
                oSlider.setPosition({ top:15, left:15 });
                


                //마커 표시
                var oSize = new nhn.api.map.Size(28, 37);
                var oOffset = new nhn.api.map.Size(14, 37);
                var oIcon = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize, oOffset);
                

                var oMarker = new nhn.api.map.Marker(oIcon, { title : '삼우' });
                oMarker.setPoint(oPoint);
                oMap.addOverlay(oMarker);
                
                //마커 라벨 표시
                var oLabel1 = new nhn.api.map.MarkerLabel(); // 마커 라벨 선언
                oMap.addOverlay(oLabel1);// 마커 라벨 지도에 추가. 기본은 라벨이 보이지 않는 상태로 추가됨
                //oLabel1.setVisible(true, oMarker);// 마커 라벨 보이기 
		}
		function map2(){
			var oPoint2 = new nhn.api.map.LatLng(37.4826187, 126.5080421);
         	var oMap2 = new nhn.api.map.Map(document.getElementById('map2'), {
                point : oPoint2,
                zoom : 12,
                enableWheelZoom : true,
                enableDragPan : true,
                enableDblClickZoom : true,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                activateRealtyMap : true,
                minMaxLevel : [ 1, 14 ]
                //size : new nhn.api.map.Size(866, 800)         

	});
        		//줌 컨트롤러
        		var oSlider2 = new nhn.api.map.ZoomControl();
                oMap2.addControl(oSlider2);
                oSlider2.setPosition({ top:15, left:15 });
                


                //마커 표시
                var oSize2 = new nhn.api.map.Size(28, 37);
                var oOffset2 = new nhn.api.map.Size(14, 37);
                var oIcon2 = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize2, oOffset2);
                

                var oMarker2 = new nhn.api.map.Marker(oIcon2, { title : '삼우' });
                oMarker2.setPoint(oPoint2);
                oMap2.addOverlay(oMarker2);
                
                //마커 라벨 표시
                var oLabel2 = new nhn.api.map.MarkerLabel(); // 마커 라벨 선언
                oMap2.addOverlay(oLabel2);// 마커 라벨 지도에 추가. 기본은 라벨이 보이지 않는 상태로 추가됨
                //oLabel1.setVisible(true, oMarker);// 마커 라벨 보이기 
		}	
		
		
map1();
map2();
});//jQuery-end
</script>

@endsection