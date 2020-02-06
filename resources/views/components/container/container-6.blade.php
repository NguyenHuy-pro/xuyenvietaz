@extends('components.container.container-wrap')
@section('xv_container_wrap')
    <div id="xv_container_content"
         class="xv-container-content col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 xv-zindex-2 ">
        {{--contain action form--}}
        @yield('xv_container_content')
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var windowHeight = window.innerHeight;//screen.height;
            if ($('#xv_container_content').find('.xv_container_height_fix').length > 0) {
                $('#xv_container_content').css('height', windowHeight - 80);
            } else {
                $('#xv_container_content').css('max-height', windowHeight - 80);
            }
        });
    </script>
@endsection