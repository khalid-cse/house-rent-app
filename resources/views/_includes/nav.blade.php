<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto nav-tab">
        <li class="nav_item"></li>
        <a class="nav-link {{ $active == 'flats' ? 'active' : '' }}" href="{{ route('flats.index') }}">Flats</a>
        </li>
        <li class="nav_item"></li>
        <a class="nav-link {{ $active == 'tenant' ? 'active' : '' }}" href="{{route('tenant.index')}}">Tenants</a>
        </li>
        <li class="nav_item"></li>
    <a class="nav-link {{ $active == 'expense' ? 'active' : '' }}" href="{{route('expense.index')}}">Expense</a>
        </li>
        <li class="nav_item"></li>
        <a class="nav-link {{ $active == 'electricity' ? 'active' : '' }}" href="{{ route('electricity') }}">Electricity</a>
        </li>
        <li class="nav_item"></li>
        <a class="nav-link {{ $active == 'payment' ? 'active' : '' }}" href="/payment">Payments</a>
        </li>
        <li class="nav_item"></li>
        <a class="nav-link {{ $active == 'docs' ? 'active' : '' }}" href="{{ route('docs') }}">Documents</a>
        </li>
    </ul>
    </div>
</nav>