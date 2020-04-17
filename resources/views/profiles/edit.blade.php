<x-app>
    <div class="card card-body">
        <h1>Edit User Info</h1>

        <form action="{{ $user->path() }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name" class="text-uppercase text-secondary">Name</label>

                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>

                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="username" class="text-uppercase text-secondary">Username</label>

                <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}" required>

                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="avatar" class="text-uppercase text-secondary">Avatar</label>

                <div class="d-flex">
                    <input type="file" name="avatar" id="avatar" class="form-control" value="{{ $user->avatar }}">

                    <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
                        class="rounded-lg mr-2"
                        width="40">
                </div>

                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="text-uppercase text-secondary">Email</label>

                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>

                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="text-uppercase text-secondary">Password</label>

                <input type="password" name="password" id="password" class="form-control" required>

                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="text-uppercase text-secondary">Confirm Password</label>

                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm mr-3">Submit</button>

                <a href="{{ $user->path() }}" class="btn btn-link btn-sm">Cancel</a>
            </div>
        </form>
    </div>
</x-app>
