<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <form action="/logout" method="post">
                @csrf
                @method('POST')
                <button type="submit" class="btn-outline-primary btn-sm">
                    LogOut
                </button>
            </form>
        </ul>
    </nav>