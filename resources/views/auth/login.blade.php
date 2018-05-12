@extends('layouts.app')

@section('title')
    Muger-Login
@endsection

@section('content')
<body class="login">
    <div class="form-signin">
        <div class="text-center">
            <img src="assets/img/muger.png" alt="Muger Logo" height="100" width="150">
        </div>
        <hr>

        <div class="tab-content">
            <div id="login" class="tab-pane active">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="text-muted text-center">
                        Enter your email and password
                    </p>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    <div class="checkbox">
                        
                        <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
                </form>
            </div>
            
            <div class="text-center">
                <ul class="list-inline">
                    <li><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a></li>
                    <li><a class="btn btn-link" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
      </div>
    </body>
@endsection