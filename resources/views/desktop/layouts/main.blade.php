    @include('desktop.layouts.head')
    @include('desktop.layouts.main_header')
    	<div id="wrap_main" class="cf">
            @yield('content')
        </div>
    </div> <!-- wrap_main_bg -->
    @include('desktop.layouts.footer')