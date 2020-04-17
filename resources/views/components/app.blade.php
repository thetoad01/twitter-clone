<x-master>
    <section>
        <main class="container mx-auto mb-4">
            <div class="d-flex justify-content-between">
                <div class="w-25 pr-3">
                    @include('_sidebar-links')
                </div>

                <div class="w-50">
                    {{ $slot }}
                </div>

                <div class="w-25 pl-3">
                    @include('_friends-list')
                </div>
            </div>
        </main>
    </section>
</x-master>
