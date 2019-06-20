<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">ClorieManagement</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                <li class="nav-item"><a href="logout" class="nav-link">Logout</a></li>
                <li class="nav-item"><a href="/" class="nav-link">退会</a></li>
                @else
                <li class="nav-item"><a href="signup" class="nav-link">Signup</a></li>
                <li class="nav-item"><a href="login" class="nav-link">Login</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>