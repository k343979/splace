<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- google font --}}
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  {{-- style css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>splace</title>
</head>
<body>
  @component('components.header')
  @endcomponent
  @yield('main')
  @component('components.footer')
  @endcomponent
</body>
</html>