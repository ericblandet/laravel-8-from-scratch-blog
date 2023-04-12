<x-layout>
    <section class="px-6 py-8">
        <x-panel class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-200 bg-gray-100 p-6">
            <h1 class="text-center text-xl font-bold">Register!</h1>
            <form class="mt-10"
                action="/register"
                method="post">
                @csrf

                <x-form.input name="name"
                    type="name"></x-form.input>

                <x-form.input name="email"
                    type="email"
                    autocomplete="username"></x-form.input>
                <x-form.input name="username"
                    type="username"></x-form.input>
                <x-form.input name="password"
                    type="password"
                    autocomplete="new-password"></x-form.input>

                <x-form.button>Sumbit</x-form.button>
            </form>
        </x-panel>

    </section>


</x-layout>
