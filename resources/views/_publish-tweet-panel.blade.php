<div class="border border-blue-400 rounded-lg py-6 px-6 mb-8">
    <form action="{{ route('tweets.store') }}" method="POST">
        @csrf

        <textarea name="body" id="body" class="w-full" placeholder="What's the directive?" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-6 text-sm text-white h-10">Make it so!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
