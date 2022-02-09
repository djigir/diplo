@include('layouts.partials.head')
<body>
    <div id="app">
        @include('layouts.partials.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.partials.footer')
</body>
</html>
