@include('layouts._header')
<div id="app">
    @include('layouts._navbar')

    <main class="py-4">
        <div class="container">
            @include('layouts._alerts')
            @yield('content')
    </main>
</div>
@include('layouts._footer')
