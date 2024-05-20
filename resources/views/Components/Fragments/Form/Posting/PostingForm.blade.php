<form action="{{ route('posting.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="grid grid-cols-4 gap-5 p-5">
        <div class="col-span-4 p-2 xl:col-span-1 space-y-7">

            <x-Elements.Input label="Title" name="title" cLabel="font-normal" icon="icon-pen"
                placeholder="Title posting..." />

            <x-Elements.Input label="Category" name="category" cLabel="font-normal" icon="icon-pen"
                placeholder="Category posting..." />

            <x-Elements.Input label="Excerpt" name="excerpt" cLabel="font-normal" icon="icon-pen"
                placeholder="Category posting..." />

            <x-Elements.Input label="Slug" name="slug" cLabel="font-normal" icon="icon-pen"
                placeholder="Slug posting..." />

            <x-Elements.Input.file label="Gambar" name="image" cLabel="font-normal" />

        </div>
        <div class="col-span-4 p-2 border border-blue-500 xl:col-span-3 rounded-xl">
            <textarea name="body" id="body" class="ckeditor" rows="10"></textarea>
        </div>
    </div>
    <div class="flex justify-end px-4 mt-5">
        <x-Elements.Button type="submit"
            class="justify-center py-2 font-semibold text-white bg-blue-600 w-28 hover:bg-blue-700">
            Posting
        </x-Elements.Button>
    </div>
</form>
