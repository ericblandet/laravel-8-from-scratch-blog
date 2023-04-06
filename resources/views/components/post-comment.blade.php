@props(['comment'])

<x-panel class="bg-gray-100">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img class="rounded-xl"
                src="https://i.pravatar.cc/60?u={{ $comment->author->id + 5 }}"
                alt=""
                width="60"
                height="60">
        </div>
        <div class="flex-schrink-1">
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">
                    Posted
                    <time>
                        {{ $comment->created_at->format('l jS \o\f F Y \@ h:i A') }}
                    </time>
                </p>
            </header>

            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
