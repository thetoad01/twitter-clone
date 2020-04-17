<div class="card card-body">
    <h3 class="lead mb-3">Following</h3>
    <ul class="list-group">
        @forelse (current_user()->follows as $user)
            <a href="{{ $user->path() }}" class="list-group-item list-group-item-action border-0 px-0 py-2 small">
                <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2" width="40" height="40">

                {{ $user->name }}
            </a>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
</div>
