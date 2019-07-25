{{--header site--}}
@section('header')
    @include('layouts.header')
@show
{{--end header site--}}

{{--body site--}}
<div id="app" style="border:1px solid red; padding:10px">
    @section('menu')
        @include('layouts.menu')
    @show

    <main class="py-4">
        @yield('content')
    </main>
</div>
{{--end body site--}}

{{--footer site--}}
@section('footer')
    @include('layouts.footer')
@show
{{--end footer site--}}
