@props(['trigger'])

<div class="relative"
    x-data="{ show: false }"
    @click.away="show=false">

    {{-- trigger --}}
    <div @click="show=!show">
        {{ $trigger }}
    </div>

    {{-- links --}}
    <div class="absolute z-50 mt-2 max-h-52 w-full overflow-auto rounded-xl bg-gray-100 py-2"
        style="display:none"
        x-show="show">
        {{ $slot }}
    </div>
</div>
