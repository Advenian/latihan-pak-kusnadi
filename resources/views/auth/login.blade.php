@extends('layouts.user')
@section('content')
    <div id="particles-js">
      <div id="pseudo-bg"></div>
        <div class="centering card-login-outer">
            <h1>Log In</h1>
            <div class="card-login">
                <form action="{{ route('login') }}" id="form-login" method="POST" class="d-flex flex-column mb-3">
                    @csrf
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button class="submit-button" type="submit">Sign In</button>
                </form>


                <div class="mb-2">
                    @if (Route::has('password.request'))
                        <a class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
                <a href="{{ route('register') }}" class="text-center">Don't have an account?</a>

            </div>
        </div>
    </div>
    



    
@endsection
