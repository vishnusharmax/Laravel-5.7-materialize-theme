@section('javascript')
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('website/js/materialize.js')}}"></script>
    <script src="{{ asset('website/js/init.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.tabs').tabs();
        });
    </script>
@endsection
@yield('javascript')
