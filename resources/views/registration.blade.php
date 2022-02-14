@extends('layouts.main')

@section('add-head')
    <link rel="stylesheet" href="/css/signInForm.css">
@endsection

@section('title')Реєстрація@endsection

@section('body')
    <body class="text-center">

    <main class="form-signin">
        <form method="post">
            <h1 class="h3 mb-3 fw-normal">Сторінка реєстрації</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="SurName">
                <label for="floatingInput">SurName</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="EmailName">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" placeholder="Password Repeat">
                <label for="floatingInput">Password Repeat</label>
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
    </main>
    </body>
@endsection
