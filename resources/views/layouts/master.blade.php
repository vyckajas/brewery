@include('layouts.head')

<body>

    <div id="app">

        @include('layouts.nav')

        @yield('content')

    </div>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('fullcalendar/lib') }}/moment.min.js"></script>
@yield('scripts')
@yield('js')


@include('layouts.footer')
