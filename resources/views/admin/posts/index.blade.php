<x-layout>
    <x-settings heading="Manage posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- <td class="whitespace-nowrap px-6 py-4">
                                            <span
                                                class="-rounded inline-flex bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Published
                                            </span>
                                        </td> --}}

                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                            <a class="text-blue-500 hover:text-blue-900"
                                                href="/admin/posts/{{ $post->id }}/edit">edit</a>
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                            {{-- <a class="text-red-500 hover:text-red-900"
                                                href="/admin/posts/{{ $post->id }}/edit">delete</a> --}}
                                            <form action="/admin/posts/{{ $post->id }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-400 hover:text-red-900">delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </x-settings>
</x-layout>
