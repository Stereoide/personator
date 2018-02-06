@extends('layouts.app')

@section('content')
<div class="container">
    <article class="message">
        <div class="message-header">
            Registrieren
        </div>

        <div class="message-body">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <input
                            type="text"
                            class="input{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            placeholder="Name"
                    >

                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="field">
                    <input
                            type="email"
                            class="input{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email"
                            value="{{ old('email') }}"
                            required
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
                    <input
                            type="password"
                            class="input{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                            name="password_confirmation"
                            required
                            placeholder="Confirm Password"
                    >

                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="buttons">
                    <button type="submit" class="button is-link">
                        Registrieren
                    </button>

                    <a class="button" href="{{ route('index') }}">
                        Abbrechen
                    </a>
                </div>
            </form>
        </div>
    </article>
</div>
@endsection
