@include('layouts.head')

<body>

    <div id="app">

        @include('layouts.nav')

        @yield('content')

    </div>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

@include('layouts.footer')
