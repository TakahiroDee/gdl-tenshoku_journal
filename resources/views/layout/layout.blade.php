<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>転職ジャーナル @yield('title')</title>
    <link rel="stylesheet" href="/dist/semantic/semantic.css">
    <link rel="stylesheet" href="/dist/css/style.css">
    <script type="text/javascript" src="/dist/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="/dist/semantic/semantic.js"></script>
    <script type="text/javascript" src="/dist/js/app.js"></script>
  </head>
  <body>
    {{-- header template--}}
    @include('inc.header')

    {{-- main template--}}
    @yield('content')

    {{-- footer template--}}
    @include('inc.footer')
  </body>
</html>
