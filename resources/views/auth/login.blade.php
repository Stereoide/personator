@extends('layouts.app')

@section('content')
<div class="container">
    <article class="message">
        <div class="message-header">
            Anmelden
        </div>

        <div class="message-body">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field">
                    <input
                            id="email"
                            type="email"
                            class="input{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            placeholder="E-Mail Address"
                    >

                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="field">
                    <input
                            id="password"
                            type="password"
                            class="input{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password"
                            required
                            placeholder="Password"
                    >

                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="field">
                    <label class="checkbox">
                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <div class="buttons">
                    <button type="submit is-link" class="button is-primary">
                        Anmelden
                    </button>

                    <a class="button" href="{{ route('password.request') }}">
                        Kennwort vergessen?
                    </a>

                    <a class="button" href="{{ route('index') }}">
                        Abbrechen
                    </a>
                </div>
            </form>
        </div>
    </article>
</div>
@endsection
