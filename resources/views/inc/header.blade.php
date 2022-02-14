@section('header')
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Головна</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Про мене</a></li>
        </ul>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="btn btn-outline-primary me-2">Login</a></li>
            <li><a href="{{ route('registration')  }}" class="btn btn-primary">Sign-up</a></li>
        </ul>
    </header>
</div>
@show

