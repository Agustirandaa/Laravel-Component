<div x-data="{ loading: true }" x-show="loading" x-init="window.addEventListener('beforeunload', function() {
    document.querySelector('.loader').classList.remove('hidden');
    document.querySelector('.loader').classList.add('flex');
});

window.addEventListener('load', function() {
    document.querySelector('.loader').classList.remove('flex');
    document.querySelector('.loader').classList.add('hidden');
});"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black loader bg-opacity-30">
    <div class="custom-loader"></div>
</div>
