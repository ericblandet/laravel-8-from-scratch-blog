<x-layout>
    <section class="mx-auto max-w-sm px-6 py-8">
        <x-panel class="bg-gray-100">
            <h1 class="text-center text-xl font-bold">Login!</h1>
            <form class="mt-10"
                action="/login"
                method="post">
                @csrf

                <x-form.input name="email"
                    type="email"
                    autocomplete="username"></x-form.input>
                <x-form.input name="password"
                    type="password"
                    autocomplete="current-password"></x-form.input>

                <x-form.button>Login</x-form.button>
            </form>
            </main>
        </x-panel>

    </section>


</x-layout>
