<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active text-primary' : '' }}"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('companies.index') ? 'active text-primary' : '' }}"
                    href="{{ route('companies.index') }}">Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('employees.index') ? 'active text-primary' : '' }}"
                    href="{{ route('employees.index') }}">Employees</a>
            </li>
        </ul>
    </div>
</div>