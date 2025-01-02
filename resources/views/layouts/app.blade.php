<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head', ['pageTitle' => $pageTitle, 'metaTitle'=> $metaTitle])
<body>
    @include('partials.menu')
    <div> 
        @yield('content')
</div>
</body>
</html>