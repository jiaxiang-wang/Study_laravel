<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>@yield('title','Weibo App')</title>
</head>
<body>
    <!-- 导航 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
      </div>
    </nav>
    <!-- 该站位区域将用于显示content区块的内容 -->
    <div class="container">
      @yield('content')
    </div>
</body>
</html>