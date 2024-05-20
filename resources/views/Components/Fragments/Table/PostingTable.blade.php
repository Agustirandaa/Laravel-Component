<table class="min-w-full divide-y divide-blue-200">
    <thead>
        <tr>
            <th scope="col" class="px-2 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
            </th>
            <th scope="col" class="px-6 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
                Posting Date</th>
            <th scope="col" class="px-6 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
                Title</th>
            <th scope="col" class="px-6 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
                Category</th>
            <th scope="col" class="px-6 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
                Excerpt</th>

            <th scope="col" class="px-6 py-3 text-sm font-semibold uppercase text-neutral-600 font-inter text-start">
                Action</th>
        </tr>
    </thead>
    <tbody class="overflow-auto divide-y divide-neutral-100">

        @foreach ($posts as $post)
            <tr class="hover:bg-gray-50">
                <td class="py-3.5 text-sm ps-3 whitespace-nowrap">
                    <input type="checkbox" class="text-blue-600 border-gray-200 rounded focus:ring-blue-500 ">
                </td>
                <td class="px-6 py-3.5 text-sm lg:text-[14.3px] text-neutral-800 whitespace-nowrap">
                    {{ $post->created_at }}
                </td>
                <td class="px-6 py-3.5 text-sm lg:text-[14.3px] text-neutral-800 whitespace-nowrap">
                    {{ $post->title }}
                </td>
                <td class="px-6 py-3.5 text-sm lg:text-[14.3px] font-semibold text-indigo-600 whitespace-nowrap">
                    {{ $post->category->name }}
                </td>
                <td class="px-6 py-3.5 text-sm lg:text-[14.3px] text-neutral-800 whitespace-nowrap lg:text-wrap">
                    {{ $post->excerpt }}
                </td>
                <td class="px-6 py-3.5 text-sm font-medium whitespace-nowrap text-start">

                    <x-Elements.Link href="{{ route('posting.edit', $post->slug) }}"
                        class="font-semibold text-blue-600 ">
                        Edit
                    </x-Elements.Link>

                    <span class="text-neutral-400">|</span>
                    <button type="button"
                        class="inline-flex items-center font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none text-sm lg:text-[14.3px]">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
