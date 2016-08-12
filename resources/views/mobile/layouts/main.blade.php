    @include('mobile.layouts.head')
    	<div class="main_bg">
    @include('mobile.layouts.header')
        <div id="wrap_main">
            @yield('content')
        </div>
    @include('mobile.layouts.footer')

    <script type="text/javascript">
    	$(".nav > ul > li:first-child").addClass("on");
    </script>