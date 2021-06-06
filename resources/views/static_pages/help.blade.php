    <!-- 继承layouts文件夹下的default.blade.php的模板 -->
    @extends('layouts.default')
    @section('title','帮助')
    <!-- 所有包含在 @ section 和 @ stop 中的代码都将被插入到父视图的 content 区块。 -->
    @section('content')
    <h1>你需要帮助？百度了？给你链接<a href="http://www.baidu.com">百度</a>不用谢</h1>
    @stop