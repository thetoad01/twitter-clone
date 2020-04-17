<div class="d-flex py-2 {{ $loop->last ? '' : 'border-bottom' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-lg mr-2" width="50" height="50">
        </a>
    </div>

    <div class="py-2">
        <a href="{{ $tweet->user->path() }}" title="view profile">
            <div class="pt-1 font-weight-bold mb-4">{{ $tweet->user->name }}</div>
        </a>

        <p class="mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet"></x-like-buttons>

    </div>
</div>
