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
<div class="videocontainer">
  <!-- 导航 -->
  @include('layouts._header')
	<video class="fullscreenvideo"  id="bgvid" playsinline="" autoplay="auto" muted="" loop="">
		<source src="{{URL::asset('/videos/181004_04_Dolphins-Whale_06.mp4')}}" type="video/mp4">
	</video>
  <!-- 该站位区域将用于显示content区块的内容 -->
  <div class="container">
      @yield('content')
    </div>
    @include('layouts._footer')
</div>
   
</body>
</html>