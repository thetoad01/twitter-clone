@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="https://via.placeholder.com/778x200.jpg" class="rounded-lg mb-2" alt="profile banner">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="font-bold text-2xl mb-0">{{ $user->name }}</h3>
                <p class="text-sm">{{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="#" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="#" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, temporibus perspiciatis molestiae voluptates laudantium ipsa
            asperiores suscipit quis! Repudiandae ipsam hic praesentium incidunt eligendi velit. Omnis qui laudantium suscipit quas.
        </p>

        <img src="{{ $user->avitar }}" alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 37%;">
    </header>

    @include('_timeline')
@endsection
