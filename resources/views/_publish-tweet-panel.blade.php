<div class="card card-body mb-3">
    <form action="{{ route('tweets.store') }}" method="POST">
        @csrf

        <textarea name="body" rows="4" id="body" class="form-control" placeholder="What's the directive?" required></textarea>

        <hr class="my-3">

        <footer class="d-flex justify-content-between align-middle">
            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">

            <button type="submit" class="btn btn-sm btn-success float-right">Make it so!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-danger small mt-2">{{ $message }}</p>
    @enderror
</div>
