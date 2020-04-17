<ul class="list-group">
    <li class="list-group-item border-bottom-0">
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="#" class="font-bold text-lg mb-4 block">Notifications</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="#" class="font-bold text-lg mb-4 block">Messages</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="#" class="font-bold text-lg mb-4 block">Bookmarks</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="#" class="font-bold text-lg mb-4 block">Lists</a>
    </li>
    <li class="list-group-item border-bottom-0">
        <a href="{{ current_user()->path() }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    @auth
        <li class="list-group-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-primary btn-block">Logout</button>
            </form>
        </li>
    @endauth
</ul>
