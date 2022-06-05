@if (session()->has('message'))
    <div class="fixed top-0 transform rounded-lg
    -translate-x-1/2 bg-sky-500 text-white px-20 py-3 left-1/2">
        <p>{{ session('message') }}</p>
    </div>
@endif