<x-Fragments.Modal :$name x-show="{{ $name }}">
    <div class="w-full max-w-3xl p-3 bg-white border rounded-lg shadow">
        <x-Fragments.Modal.header name="Tambah Posting" x-on:click="{{ $close }}" />
        <div class="p-2 mb-5 text-justify">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum officiis optio voluptas totam ab quod amet
            saepe est eos! Quidem, officiis sint rem quia exercitationem praesentium nostrum excepturi ex nesciunt?Lorem
            ipsum dolor sit amet, consectetur adipisicing elit. Esse architecto repudiandae, nam ut necessitatibus qui
            repellat? Natus iste eius debitis quia excepturi, eveniet incidunt earum. Eaque dignissimos minus magnam
            autem!
        </div>
        <x-Fragments.Modal.footer name="Posting" />
    </div>
</x-Fragments.Modal>
