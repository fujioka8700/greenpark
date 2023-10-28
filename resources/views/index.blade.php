<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('google')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="「GreenPark」では、植物の生えている場所から、お目当ての植物を探すことができます。">

    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js'])
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>
