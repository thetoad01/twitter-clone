<div class="d-flex">
    <form action="/tweets/{{ $tweet->id }}/like" method="POST">
        @csrf
        <div class="d-flex align-middle">
            <button type="submit" class="btn btn-link text-decoration-none small" title="like">
                <i class="fa fa-thumbs-up {{ $tweet->isLikedBy(current_user()) ? 'text-success' : 'text-secondary' }}"></i>
                {{ $tweet->likes ?: 0 }}
            </button>
        </div>
    </form>

    <form action="/tweets/{{ $tweet->id }}/like" method="POST">
        @csrf
        @method('delete')
        <div class="d-flex align-middle">
            <button type="submit" class="btn btn-link text-decoration-none small" title="dislike">
                <i class="fa fa-thumbs-down {{ $tweet->isDislikedBy(current_user()) ? 'text-danger' : 'text-secondary' }}"></i>
                {{ $tweet->dislikes ?: 0 }}
            </button>
        </div>
    </form>
</div>
