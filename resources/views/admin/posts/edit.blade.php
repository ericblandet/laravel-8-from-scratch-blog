<x-layout>
    <x-settings :heading="'Edit the post: ' . $post->title">
        <form action="/admin/posts/{{ $post->id }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            {{-- not all browsers understand patch requests. To be sure, use post, and add the directive --}}
            @method('PATCH')

            <x-form.input name='title'
                :value="old('title', $post->title)">
            </x-form.input>

            <x-form.input name='slug'
                :value="old('slug', $post->slug)">
            </x-form.input>

            <div class="mt-6 flex">
                <div class="flex-1">
                    <x-form.input name='thumbnail'
                        type='file'
                        :value="old('thumbnail', $post->thumbnail)">
                    </x-form.input>
                </div>
                <img class="rounded-xl"
                    src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/illustration-1.png' }}"
                    alt=""
                    width="100" />
            </div>

            <x-form.textarea name='excerpt'
                rows='2'>
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>

            <x-form.textarea name='body'
                rows='5'>
                {{ old('body', $post->body) }}
            </x-form.textarea>

            <x-form.field>
                <x-form.label name="category"></x-form.label>
                <select class="w-full capitalize"
                    id="category_id"
                    name="category_id">
                    @php
                        $categories = App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category"></x-form.error>
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
