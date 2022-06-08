<x-layout>
    <div class="mx-4">
        <x-card class="max-w-lg mx-auto mt-12 p-10">
            <header class="text-center">
                <h2 class="text2xl font-bold uppercase mb-1">
                    Edit Gig
                </h2>
                <p class="mb-4">
                    Edit: {{ $listing->title }}
                </p>
            </header>

            <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                {{-- prevent crossite scripting --}}
                @method('PUT')
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">
                        Company Name
                    </label>
                    <input type="text" name="company" class="border border-gray-200 rounded p-2 w-full" value="{{ $listing->company }}">

                    @error('company')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">
                        Job Title
                    </label>
                    <input type="text" name="title" class="border border-gray-200 rounded p-2 w-full"
                    placeholder="Example: Senior React Frontend Developer"
                    value="{{ $listing->title }}">
                    @error('title')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">
                        Job Location
                    </label>
                    <input type="text" name="location" class="border border-gray-200 rounded p-2 w-full" value="{{$listing->location}}">
                    
                    @error('location')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">
                        Contact Email
                    </label>
                    <input type="text" name="email" class="border border-gray-200 rounded p-2 w-full" value="{{ $listing->email }}">

                    @error('email')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" name="website" class="border border-gray-200 rounded p-2 w-full" 
                    value="{{ $listing->website }}">

                    @error('website')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" name="tags" class="border border-gray-200 rounded p-2 w-full" 
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{ $listing->tags }}">

                    @error('tags')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Company Logo
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                    />
                    <img  src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image2.png') }}" alt="" class="w-48 mr-6 mb-6"/>

                    @error('logo')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="description"
                        class="inline-block text-lg mb-2"
                    >
                        Job Description
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Include tasks, requirements, salary, etc"
                       
                    >{{ $listing->description }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-sky-500 text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Update Gig
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
            </form>
        </x-card>
    </div>
</x-layout>
