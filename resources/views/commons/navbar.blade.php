<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">CalorieManagement</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                <li class="nav-item"><a href="logout" class="nav-link">ログアウト</a></li>
                <li class="nav-item"><a href="/" class="nav-link">トップページ</a></li>
                @else
                <li class="nav-item"><a href="signup" class="nav-link">新規登録</a></li>
                <li class="nav-item"><a href="login" class="nav-link">ログイン</a></li>
                <li class="nav-item"><a href="/" class="nav-link">トップページ</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>