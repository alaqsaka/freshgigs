@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"  class="fixed top-0 transform -translate-x-1/2 bg-gray-500 text-white px-20 py-3 left-1/2">
        <p>{{ session('message') }}</p>
    </div>
@endif