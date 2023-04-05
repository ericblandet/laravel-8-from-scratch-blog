<x-layout>
    <section class="px-6 py-8">
        <main class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-200 bg-gray-100 p-6">
            <h1 class="text-center text-xl font-bold">Login!</h1>
            <form class="mt-10"
                action="/login"
                method="post">
                @csrf

                <div class="mb-6">
                    <label class="mb-2 block text-xs font-bold uppercase text-gray-700"
                        for="email">
                        Email
                    </label>

                    <input class="w-full border border-gray-400 p-2"
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required>
                    @error('email')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="mb-2 block text-xs font-bold uppercase text-gray-700"
                        for="password">
                        Password
                    </label>

                    <input class="w-full border border-gray-400 p-2"
                        id="password"
                        name="password"
                        type="password"
                        required>
                    @error('password')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="rounded bg-blue-400 py-2 px-4 text-white hover:bg-blue-500"
                        type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </main>

    </section>


</x-layout>
