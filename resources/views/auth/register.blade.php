@extends('layouts.app2')

@section('title')
    Muger-Register
@endsection

@section('content')
<body class="register">
    <div class="form-reg">
        <div class="text-center">
            <img src="assets/img/muger.png" alt="Muger Logo" height="100" width="150">
        
        <hr>

        <div class="tab-content">
            <div id="register" class="tab-pane active">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <p class="text-muted text-center">
                        Please FILL all the blank!
                    </p>
                    <div class="row">   
                    <label class="text-center">Name
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </label>
                    </div> 

                    <div class="row">
                    <label class="text-center">Email   
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </label> 
                    </div>

                    <div class="row">
                    <label class="text-center">Password
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </label>
                    </div>

                    <div class="row">
                    <label class="text-center">Confrim Password
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </label>                   
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-primary">Register</button> 
                    </div>      
                 </form>   
            </div>
            <div class="text-center">
                <ul class="list-inline">
                    <li><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a></li>
                    <li><a class="btn btn-link" href="{{ route('login') }}">Log In</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</main>    
@endsection