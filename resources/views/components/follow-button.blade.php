@unless (current_user()->is($user))
    <form action="/profiles/{{ $user->username }}/follow" method="POST">
        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            @csrf
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif
