<x-app>
    <ul class="list-group list-group-flush align-middle">
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" class="img-fluid mr-4" style="max-height: 60px;">
                    </div>

                    <div class="col-10 h4 font-weight-bold pt-3">{{ '@' . $user->username }}</div>
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </ul>
</x-app>
