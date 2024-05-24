@props([
    'action' => '',
    'categories' => [],
    'postEdit' => [],
    'method' => 'POST',
])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @method($method)
    @csrf
    <div class="grid grid-cols-4 gap-5 p-5">
        <div class="col-span-4 p-2 xl:col-span-1 space-y-7">

            <x-Elements.Input label="Title" name="title" cLabel="font-normal" icon="icon-pen"
                placeholder="Title posting... (100)" :value="!empty($postEdit) ? old('title', $postEdit->title) : old('title')" maxlength="100" />

            <x-Elements.Select label="Category" cLabel="font-normal" name="category_id">
                <x-Elements.Select.option value="">Select Category</x-Elements.Select.option>
                {{-- Jika form dari edit --}}
                @if (!empty($postEdit))
                    @foreach ($categories as $category)
                        @if (old('category_id', $postEdit->category_id) == $category->id)
                            <x-Elements.Select.option value="{{ old('category_id', $category->id) }}"
                                selected>{{ $category->name }}</x-Elements.Select.option>
                        @else
                            <x-Elements.Select.option
                                value="{{ $category->id }}">{{ $category->name }}</x-Elements.Select.option>
                        @endif
                    @endforeach
                @else
                    {{-- Jika form dari create --}}
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <x-Elements.Select.option value="{{ $category->id }}"
                                selected>{{ $category->name }}</x-Elements.Select.option>
                        @else
                            <x-Elements.Select.option
                                value="{{ $category->id }}">{{ $category->name }}</x-Elements.Select.option>
                        @endif
                    @endforeach
                @endif
            </x-Elements.Select>

            <x-Elements.Input label="Excerpt" name="excerpt" cLabel="font-normal" icon="icon-pen"
                placeholder="Excerpt posting...(255)" :value="!empty($postEdit) ? old('excerpt', $postEdit->excerpt) : old('excerpt')" maxlength="255" />

            <x-Elements.Input label="Slug" name="slug" cLabel="font-normal" icon="icon-pen"
                placeholder="Slug posting..." :value="!empty($postEdit) ? old('slug', $postEdit->slug) : old('slug')" readonly />

            <x-Elements.Input.file label="Gambar" name="file" cLabel="font-normal" :postEditFile="!empty($postEdit) ? old('file', $postEdit->file) : old('file')" />

        </div>
        <div class="col-span-4 p-2 xl:col-span-3 rounded-xl">
            <x-Elements.Textarea name="body" class="ckeditor">
                @if (!empty($postEdit))
                    {{ old('body', $postEdit->body) }}
                @endif
            </x-Elements.Textarea>
        </div>
    </div>
    <div class="flex justify-end px-4 mt-5">
        <x-Elements.Button type="submit"
            class="justify-center py-2 font-semibold text-white bg-blue-600 w-28 hover:bg-blue-700">
            Posting
        </x-Elements.Button>
    </div>
</form>
