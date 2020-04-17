<x-app>
    <header class="mb-4 position-relative">
        <div class="position-relative mb-4">
            <img src="https://via.placeholder.com/555x200.jpg" class="rounded-lg mb-2" alt="profile banner">

            <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
                class="rounded position-absolute"
                style="left: 35%; top: 60%"
                width="150">
        </div>

        <div class="d-flex justify-content-between align-center mb-3">
            <div style="max-width: 210px">
                <h3 class="font-bold mb-0">{{ $user->name }}</h3>
                <p class="small">{{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="btn btn-sm btn-outline-primary">Edit User</a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, temporibus perspiciatis molestiae voluptates laudantium ipsa
            asperiores suscipit quis! Repudiandae ipsam hic praesentium incidunt eligendi velit. Omnis qui laudantium suscipit quas.
        </p>

        @can ('edit', $user)
            <div class="col-12 text-right">
                <button class="btn btn-sm btn-link" title="edit description">
                    <i class="fas fa-pencil-alt"></i>
                    Edit
                </button>
            </div>
        @endcan
    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
