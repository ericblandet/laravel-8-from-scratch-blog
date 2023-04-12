@props(['name', 'rows' => '5'])

<x-form.field>
    <x-form.label name="{{ $name }}"></x-form.label>

    <textarea class="w-full rounded border border-gray-200 p-2"
        id="{{ $name }}"
        name="{{ $name }}"
        cols="30"
        rows="{{ $rows }}"
        required>{{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>
