<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Route::current()->getName() === 'home' ? 'active' : '' }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('owner.index') }}" class="nav-link {{ strpos(Route::current()->getName(), 'owner') === 0 ? 'active' : ''}}">
                    <span data-feather="user"></span>
                    Owners
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('patient.index') }}" class="nav-link {{ strpos(Route::current()->getName(), 'patient') === 0 ? 'active' : ''}}">
                    <span data-feather="github"></span>
                    Patients
                </a>
            </li>
        </ul>
    </div>
</nav>
