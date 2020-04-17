@unless (current_user()->is($user))
    <form action="/profiles/{{ $user->username }}/follow" method="POST">
        <button type="submit" class="btn btn-outline-primary btn-sm">
            @csrf
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif
