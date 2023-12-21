<!DOCTYPE html>
<html lang="en">

<head>
    {{-- head was here --}}
    @include('front.partials._head')
    {{-- style links passed from here --}}
    @include('front.partials._style')

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    

    <!--header-wrap-->
    @include('front.partials._header')
    <main>
        @yield('mainContent')
    </main>
    
    {{-- footer --}}
    @include('front.partials._footer')
    {{-- script --}}
    @include('front.partials._script')
</body>

</html>
