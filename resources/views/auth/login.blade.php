@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <x-label for="email" class="col-4 text-md-end">{{ __('Email Address') }}</x-label>
                            
                            <div class="col-6">
                                <x-input type="email" name="email" id="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"/>
                                <x-error for="email" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <x-label for="password" class="col-md-4 text-md-end">{{ __('Password') }}</x-label>
                        
                            <div class="col-md-6">
                                <x-input id="password" name="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" required autocomplete="current-password"/>
                                <x-error for="password"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
