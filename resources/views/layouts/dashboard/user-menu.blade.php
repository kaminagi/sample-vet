<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
        {{ config('app.name', 'Paw-Some Town') }}
    </a>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm">
                    Signout
                </button>
            </form>
        </li>
    </ul>
</nav>
