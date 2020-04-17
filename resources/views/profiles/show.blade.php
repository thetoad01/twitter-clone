@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <div class="relative mb-4">
            <img src="https://via.placeholder.com/778x200.jpg" class="rounded-lg mb-2" alt="profile banner">

            <img src="{{ $user->avatar }}" alt="{{ $user->name }} avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150">
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 275px">
                <h3 class="font-bold text-2xl mb-0">{{ $user->name }}</h3>
                <p class="text-sm">{{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, temporibus perspiciatis molestiae voluptates laudantium ipsa
            asperiores suscipit quis! Repudiandae ipsam hic praesentium incidunt eligendi velit. Omnis qui laudantium suscipit quas.
        </p>

        @can ('edit', $user)
            <div class="flex flex-row-reverse text-blue-500 mt-2">
                <button class="flex" title="edit description">
                    <svg viewBox="0 0 20 20" class="mr-1 w-3 mt-1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M12.2928932,3.70710678 L0,16 L0,20 L4,20 L16.2928932,7.70710678 L12.2928932,3.70710678 Z M13.7071068,2.29289322 L16,0 L20,4 L17.7071068,6.29289322 L13.7071068,2.29289322 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>

                    <div class="text-xs mr-2">
                        Edit
                    </div>

                </button>
            </div>
        @endcan
    </header>

    @include('_timeline', [
        'tweets' => $tweets
    ])
@endsection
