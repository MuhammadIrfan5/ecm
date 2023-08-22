<!DOCTYPE html>
<html>

@include('layouts.backend.head')

{{--@yield('page-css')--}}
<body class="fixed-navbar sidebar-scroll">
    @include('layouts.backend.header')
    @include('layouts.backend.navbar')

    <div id="wrapper">

        @yield('section')

        @include('layouts.backend.additional-sidebar')
        @include('layouts.backend.footer')
    </div>

    @include('layouts.backend.script')
    <script> @if(Session::has('message')) var type = "{{ Session::get('alert-type','info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
            case 'success':
                {{--swal({--}}
                {{--    title: "Good job!",--}}
                {{--    text: "{{Session::get("message")}}",--}}
                {{--    type: "success"--}}
                {{--});--}}
                toastr.success("{{Session::get("message")}}");
                break;
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error':
                toastr.error("{{Session::get("message")}}");
                break;
        } @endif
    </script>
    @yield('page-script')

<!-- ./wrapper -->
</body>
</html>
