<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head', ['pageTitle' =>'Homepage', 'metaTitle'=> 'homepage del sito laravel'])
<body>
    @include('partials.menu')
    <h1> {{'documento' . (2+2) }}</h1>
</body>
</html>