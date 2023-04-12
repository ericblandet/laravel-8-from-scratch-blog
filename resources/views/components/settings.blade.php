@props(['heading'])
<section class="mx-auto max-w-4xl py-8">
    <h1 class="mb-8 border-b pb-2 text-lg font-bold">{{ $heading }}</h1>

    <div class=flex>
        <aside class="w-48 flex-shrink-0">
            <h4 class="mb-4 font-semibold">Links</h4>
            <ul>
                <li>
                    <a class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}"
                        href="/admin/posts">Manage posts</a>
                </li>
                <li>
                    <a class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}"
                        href="/admin/posts/create">Publish new post</a>
                </li>
            </ul>
        </aside>


        <main class="flex-1">
            <x-panel class="bg-gray-100">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
