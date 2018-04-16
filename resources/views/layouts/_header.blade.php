<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li class="{{ active_class(if_route('topics.index')) }}">
                <a class="blog-nav-item " href="/posts">首页</a>
            </li>
            <li class="{{ active_class(if_route('topics.index')) }}">
                <a class="blog-nav-item" href="/posts/create">写文章</a>
            </li>
            <li class="{{ active_class(if_route('topics.index')) }}">
                <a class="blog-nav-item" href="/notices">通知</a>
            </li>
            <li>
                <input name="query" type="text" value="" class="form-control" style="margin-top:10px" placeholder="搜索词">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                @guest
                    <div>
                        <a href="{{ route('login') }}" class="blog-nav-item "  role="button" aria-haspopup="true" aria-expanded="false">登录 </a>
                        <a href="{{ route('register') }}" class="blog-nav-item"  role="button" aria-haspopup="true" aria-expanded="false">注册 </a>                        
                    </div>
                @else
                    <div>
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kassandra Ankunding2  <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('users.show', Auth::id()) }}">我的主页</a></li>
                            <li><a href="{{ route('users.edit', Auth::id()) }}">个人设置</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">退出
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </div>
                @endguest
                
            </li>
        </ul>
    </div>
</div>