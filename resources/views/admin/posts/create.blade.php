<x-layout>
    <x-settings heading="Publish a new Post!">
        <form action="/admin/posts"
            method="post"
            enctype="multipart/form-data">
            @csrf
            <x-form.input name='title'></x-form.input>
            <x-form.input name='slug'></x-form.input>
            <x-form.input name='thumbnail'
                type='file'></x-form.input>
            <x-form.textarea name='excerpt'
                rows='2'></x-form.textarea>
            <x-form.textarea name='body'
                rows='5'></x-form.textarea>

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
                            {{ old('category_id' == $category->id ? 'selected' : '') }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category"></x-form.error>
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-settings>
</x-layout>
