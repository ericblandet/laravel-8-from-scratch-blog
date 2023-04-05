@if (session()->has('success'))
    <div class="fixed bottom-3 right-3 rounded-xl bg-green-500 py-2 px-4 text-sm text-white"
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 4000)">
        <p>{{ session()->get('success') }}</p>
    </div>
@endif
