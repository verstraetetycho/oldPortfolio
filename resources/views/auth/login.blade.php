@extends('layouts.login')

@section('content')
<div class="panel v-flexer justify-content-center">
    <div class="loginContainer">
        <h2>Login<span>.</span></h2>
                <form class="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="" placeholder="Email / Name" required autofocus>
                            @error('login')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-secondary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="v-flexer">
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </form>

    </div>
</div>
@endsection
