@extends('layouts.main')

@section('add-head')
    <link rel="stylesheet" href="/css/signInForm.css">
@endsection

@section('title')Реєстрація@endsection

@section('body')
<body class="text-center">
    <div class="form-signin">

        @if($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('submit_new_user') }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Сторінка реєстрації</h1>

            <div class="form-floating">
                <input type="text" name = "name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name = "surname" class="form-control" value="{{ old('surname') }}" placeholder="SurName">
                <label for="floatingInput">Surname</label>
            </div>
            <div class="form-floating">
                <input type="email" name = "email" class="form-control" value="{{ old('email') }}" placeholder="EmailName">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name = "password" class="form-control" placeholder="Password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name = "password_confirmation" class="form-control" placeholder="Password Confirmation">
                <label for="floatingInput">Password Confirmation</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© Yarysh Vlad 2022</p>
        </form>

        <h1>test</h1>
    </div>
    </body>
@endsection
