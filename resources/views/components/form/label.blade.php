@props(['name'])

<label class="mb-2 block text-xs font-bold text-gray-700"
    for="{{ $name }}">{{ ucwords($name) }}</label>
