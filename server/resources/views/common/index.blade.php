<html lang="ja">
<head>
  <link rel="stylesheet" href="/css/app.css"></link>
  <title>
    @yield('title')
  </title>
</head>
<body>
  @include('common.header')
  @yield('header')
  <div class="main">
      @yield('content')
  </div>
  @include('common.footer')
  @yield('footer')
  <script src="/js/app.js"></script>
</body>
</html>
