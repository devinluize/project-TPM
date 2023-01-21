<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (Request::is('/'))
        <title>HACKTHON</title>
    @else
        @yield('metatag')
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('css')
</head>

<body>
    @include('partials.header')
    @yield('content')
