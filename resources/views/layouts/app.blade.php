@extends('layouts.main')

@section('body')

<body class="d-flex flex-column h-100">
    @include('inc.header')
    <div class="container">
        @yield('body-content')
    </div>
</body>
    @include('inc.footer')

@endsection
