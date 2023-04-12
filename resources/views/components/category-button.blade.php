@props(['category'])
<a class="rounded-full border border-blue-300 px-3 py-1 text-xs font-semibold uppercase text-blue-300"
    href="/?category={{ $category->slug }}"
    style="font-size: 10px">{{ $category->name }}</a>
