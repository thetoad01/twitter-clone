<div class="border border-blue-400 rounded-lg py-6 px-6 mb-8">
    <form action="{{ route('tweets.store') }}" method="POST">
        @csrf

        <textarea name="body" id="body" class="w-full" placeholder="What's the directive?"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">

            <button type="submit" class="bg-blue-500 rounded-lg shadow p-2 text-white">Make it so!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
