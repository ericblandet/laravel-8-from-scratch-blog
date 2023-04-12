@auth
    <x-panel>

        <form action="/posts/{{ $post->slug }}/comments"
            method="post">
            @csrf

            <header class="flex">
                <img class="rounded-full"
                    src="https://i.pravatar.cc/40?u={{ auth()->id() }}"
                    alt=""
                    width="40"
                    height="40">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea class="w-full text-sm focus:outline-none focus:ring"
                    id=""
                    name="body"
                    cols="30"
                    rows="5"
                    placeholder=" > Anything to say?"
                    required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div class="mt-6 flex justify-end border-t border-gray-200 pt-6">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <x-panel>
        <p>
            <a class="text-blue-500 hover:underline"
                href="/register">Register</a> or <a class="text-blue-500 hover:underline"
                href="/login">log in</a> to leave a comment.
        </p>
    </x-panel>
@endauth

@foreach ($post->comments as $comment)
    <x-post-comment :comment="$comment" />
@endforeach
