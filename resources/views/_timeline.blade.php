<div class="card card-body">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-3">No tweets yet!</p>
    @endforelse

    {{ $tweets->links() }}
</div>
