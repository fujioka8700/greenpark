<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('google')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js'])
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>
