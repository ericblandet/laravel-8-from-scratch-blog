<x-dropdown>
    <x-slot name="trigger">
        <button class="flex w-full py-2 pl-3 pr-9 text-left text-sm font-semibold lg:inline-flex lg:w-32">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon class="absolute -rotate-90"
                name='down-arrow'
                style="right: 12px;"></x-icon>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="!request()->has('category')">All</x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request('category') === $category->slug">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach

</x-dropdown>
