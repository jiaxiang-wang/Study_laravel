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
<div >
  <!-- 导航 -->
  @include('layouts._header')

  <!-- 该站位区域将用于显示content区块的内容 -->
  <div class="container">
      @include('shared._messages')
      @yield('content')
    </div>
    @include('layouts._footer')
</div>
   
</body>
</html>