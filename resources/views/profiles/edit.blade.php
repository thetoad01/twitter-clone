<x-app>
    <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-sx text-gray-700">Name</label>

            <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{ $user->name }}" required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-sx text-gray-700">Username</label>

            <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" value="{{ $user->username }}" required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-sx text-gray-700">Avatar</label>

            <div class="flex">
                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full" value="{{ $user->avatar }}" required>

                <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
                    class="rounded-full mr-2"
                    width="40">
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-sx text-gray-700">Email</label>

            <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" value="{{ $user->email }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-sx text-gray-700">Password</label>

            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-sx text-gray-700">Confirm Password</label>

            <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-400 p-2 w-full">

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>
    </form>
</x-app>
