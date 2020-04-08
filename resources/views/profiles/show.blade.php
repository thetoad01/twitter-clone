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
            <div>
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
    </header>

    @include('_timeline')
@endsection
