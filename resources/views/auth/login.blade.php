<x-master>
    <div class="container mx-auto d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card card-body bg-secondary text-white">
                <div class="h3 font-weight-bold text-uppercase mb-4">Login</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="text-uppercase text-white">Email</label>

                        <input type="email" name="email" id="email" class="form-control" autocomplete="email" value="{{ old('email') }}" required>

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-uppercase text-white">Password</label>

                        <input type="password" name="password" id="password" class="form-control" autocomplete="current-password" required>

                        @error('password')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="mr-1">

                        <label for="remember" class="small text-white">Remember Me</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary shadow mr-4">Login</button>

                        <a href="{{ route('password.request') }}" class="small text-white">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
