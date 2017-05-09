@include('layouts.head')

<body>

    <div id="app">

        @include('layouts.nav')

        @yield('content')

    </div>

</body>

@include('layouts.footer')
