{{--header site--}}
@section('header')
    @include('layouts.header')
@show
{{--end header site--}}
{{--body site--}}
<div id="app" style="border:0px solid red; padding:0px">
    @section('menu')
        @include('layouts.menu')
    @show

    <main class="py-4">
        @yield('content')
    </main>

{{--end body site--}}

{{--footer site--}}
@section('footer')
    @include('layouts.footer')
@show
{{--end footer site--}}
</div>
