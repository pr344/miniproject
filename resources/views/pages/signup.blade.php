@extends('layouts.default')

@section('content')
<br>
    <div class="container mt-auto">
        <br>

        <body class="text-center">
        <form class="form-signin mt-auto">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

            <label for="inputEmail">Enter your email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" >Enter your password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <br>
            <label for="inputPassword2" >Re-enter your password</label>
            <input type="password" id="inputPassword2" class="form-control" placeholder="Password" required>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="Agreed"> Agree with Terms and Conditions
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up!</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        </body>
    </div>

@endsection
