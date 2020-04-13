<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-16 py-4 bg-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

                        <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" autocomplete="email" value="{{ old('email') }}" required>

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>

                        <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" autocomplete="current-password" required>

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="mr-1">

                        <label for="remember" class="text-xs text-gray-700 font-bold uppercase">Remember Me</label>
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Login</button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
