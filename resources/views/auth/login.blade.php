<div class="modal fade vh-100" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center align-items-center h-100 px-5">
        <div class="modal-content shadow-xl">
            <div class="modal-header">
                <h5 class="modal-title fs-2 fw-bold" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Konten form login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" id="label_login"
                            class="form-label fw-bold">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" id="label_login" class="form-label fw-bold">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label mx-1" for="remember" id="label_login">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="modal-footer">
                        @if (Route::has('password.request'))
                            <a class="text-grey text-start my-1" href="{{ route('password.request') }}"
                                id="label_login">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-success my-1" id="label_login">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
