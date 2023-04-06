<!doctype html>

<title>Laravel From Scratch Blog</title>
<script src="https://cdn.tailwindcss.com"></script>
<script defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>

<link href="https://fonts.gstatic.com"
    rel="preconnect">
<link href="https://fonts.googleapis.com/css2?fakmily=Open+Sans:wght@400;600;700&display=swap"
    rel="stylesheet">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:items-center md:justify-between">
            <div>
                <a href="/">
                    <img src="/images/logo.svg"
                        alt="Laracasts Logo"
                        width="165"
                        height="16">
                </a>
            </div>
            <div class="mt-8 flex items-center md:mt-0">
                @auth
                    <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
                    <form class="ml-6 text-xs font-semibold text-blue-500"
                        action="/logout"
                        method="post">
                        @csrf
                        <button type="submit">Log out</button>
                    </form>
                @else
                    <a class="text-xs font-bold uppercase"
                        href="/register">Register</a>
                    <a class="ml-4 text-xs font-bold uppercase"
                        href="/login">Login</a>
                @endauth
                <a class="ml-3 rounded-full bg-blue-500 py-3 px-5 text-xs font-semibold uppercase text-white"
                    href="#newsletter">
                    Subscribe for updates
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer class="mt-16 rounded-xl border border-black border-opacity-5 bg-gray-100 py-16 px-10 text-center"
            id="newsletter">
            <img class="mx-auto -mb-6"
                src="/images/lary-newsletter-icon.svg"
                alt=""
                style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative mx-auto inline-block rounded-full lg:bg-gray-200">

                    <form class="text-sm lg:flex"
                        method="POST"
                        action="/newsletter">
                        @csrf
                        <div>

                            <div class="flex items-center lg:py-3 lg:px-5">
                                <label class="hidden lg:inline-block"
                                    for="email">
                                    <img src="/images/mailbox-icon.svg"
                                        alt="mailbox letter">
                                </label>

                                <input class="py-2 pl-4 focus-within:outline-none lg:bg-transparent lg:py-0"
                                    id="email"
                                    name="email"
                                    type="text"
                                    placeholder="Your email address">
                            </div>
                            @error('email')
                                <div class="w-60">
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        <button
                            class="mt-4 rounded-full bg-blue-500 py-3 px-8 text-xs font-semibold uppercase text-white transition-colors duration-300 hover:bg-blue-600 lg:mt-0 lg:ml-3"
                            type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <x-flash></x-flash>
</body>
