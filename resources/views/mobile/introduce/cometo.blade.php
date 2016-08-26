@extends('mobile.introduce.index')
@section('sub_content')
	<style>
        .go_top{display: none;}   
    </style>
    <section>
		<h3>본사</h3>
	    <div style="width:100%;">
            <div id="map" style="width:100%;height:380px;"></div>
        </div>
	<div class="info">
		<ul class="cf">
			<li>
				<span class="info_type">주소</span>
				<span class="info_value">인천광역시 중구 영종대로 327번길 12-2, <br>3층(운서동)</span>
			</li>
			<li>
				<span class="info_type">전화</span>
				<span class="info_value">032-577-2584</span>
			</li>
			<li class="mgb">
				<span class="info_type">팩스</span>
				<span class="info_value">032-577-2584</span>
			</li>
		</ul>
	</div>
	</section>
	<section style="margin-bottom:40px;">
		<h3>공장</h3>
	<div id="map2" style="width:100%; height:380px;"></div>
	<div class="info">
		<ul class="cf">
			<li>
				<span class="info_type">주소</span>
				<span class="info_value">전북 군산시 서수면 마룡리 93-10</span>
			</li>
			<li>
				<span class="info_type">전화</span>
				<span class="info_value">063-451-1271~3</span>
			</li>
			<li class="mgb">
				<span class="info_type">팩스</span>
				<span class="info_value">063-451-1274</span>
			</li>
		</ul>
	</div>
	</section>
<script>
	$(document).ready(function(){
	   function map1(){
			//핸드폰 세로,가로 높이 정렬
            $(window).resize(function() {
                 w = $(window).width() -40;
                 h = $("#map").height();
                oMap.setSize(new nhn.api.map.Size(w, h));
            });
            

            var oPoint = new nhn.api.map.LatLng(37.4826187, 126.5080421);
         	var oMap = new nhn.api.map.Map(document.getElementById('map'), {
                point : oPoint,
                zoom : 12,
                enableWheelZoom : false,
                enableDragPan : false,
                enableDblClickZoom : false,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                activateRealtyMap : true,
                minMaxLevel : [ 1, 14 ]
                // size : new nhn.api.map.Size(600, 380)         

	       });
        		//줌 컨트롤러
        		// var oSlider = new nhn.api.map.ZoomControl();
          //       oMap.addControl(oSlider);
          //       oSlider.setPosition({ top:15, left:15 });
                


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
		
                //클릭시 네이버지도로 이동
                oMap.attach('click', function(){
                    //alert(evt.point.getY() + ', ' + evt.point.getX());
                    var url ="http://map.naver.com/?menu=location&mapMode=0&lat=37.4826196&lng=126.508041&dlevel=12&searchCoord=126.9351759%3B37.5739086&query=7J247LKc6rSR7Jet7IucIOykkeq1rCDsmIHsooXrjIDroZwgMzI367KI6ri4IDEyLTIsIDPsuLUo7Jq07ISc64%2BZKQ%3D%3D&mpx=09410117%3A37.5739086%2C126.9351759%3AZ11%3A0.0212703%2C0.0213682&tab=1&enc=b64"
                    window.open(url);
                });
        }
		function map2(){
			//핸드폰 세로,가로 높이 정렬
            $(window).resize(function() {
                 w = $(window).width() -40;
                 h = $("#map").height();
                oMap2.setSize(new nhn.api.map.Size(w, h));
            });


            var oPoint2 = new nhn.api.map.LatLng(36.0139814, 126.8816175);
         	var oMap2 = new nhn.api.map.Map(document.getElementById('map2'), {
                point : oPoint2,
                zoom : 12,
                enableWheelZoom : false,
                enableDragPan : false,
                enableDblClickZoom : false,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                activateRealtyMap : true,
                minMaxLevel : [ 1, 14 ]
                //size : new nhn.api.map.Size(866, 800)         

	       });
        		//줌 컨트롤러
        		// var oSlider2 = new nhn.api.map.ZoomControl();
          //       oMap2.addControl(oSlider2);
          //       oSlider2.setPosition({ top:15, left:15 });
                


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
		
                oMap2.attach('click', function(){
                    //alert(evt.point.getY() + ', ' + evt.point.getX());
                    var url ="http://map.naver.com/?menu=location&mapMode=0&lat=37.4826196&lng=126.508041&dlevel=12&searchCoord=126.9351759%3B37.5739086&query=7J247LKc6rSR7Jet7IucIOykkeq1rCDsmIHsooXrjIDroZwgMzI367KI6ri4IDEyLTIsIDPsuLUo7Jq07ISc64%2BZKQ%3D%3D&mpx=09410117%3A37.5739086%2C126.9351759%3AZ11%3A0.0212703%2C0.0213682&tab=1&enc=b64"
                    window.open(url);
                });

        }	
		
		
map1();
map2();
});//jQuery-end
</script>

@endsection