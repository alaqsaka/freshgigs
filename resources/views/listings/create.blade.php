<x-layout>
    <div class="mx-4">
        <x-card class="max-w-lg mx-auto mt-12 p-10">
            <header class="text-center">
                <h2 class="text2xl font-bold uppercase mb-1">
                    Create a Job or Gigs
                </h2>
                <p class="mb-4">
                    Post a job and gig to find a freshgraduates
                </p>
            </header>

            <form method="POST" action="/listings" enctype="multipart/form-data">
                @csrf
                {{-- prevent crossite scripting --}}
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">
                        Company Name
                    </label>
                    <input type="text" name="company" class="border border-gray-200 rounded p-2 w-full" value="{{ old('company') }}">

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
                    value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">
                        Job Location
                    </label>
                    <input type="text" name="location" class="border border-gray-200 rounded p-2 w-full" value="{{ old('location') }}">
                    
                    @error('location')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">
                        Contact Email
                    </label>
                    <input type="text" name="email" class="border border-gray-200 rounded p-2 w-full" value="{{ old('email') }}">

                    @error('email')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website/Application URL
                    </label>
                    <input type="text" name="website" class="border border-gray-200 rounded p-2 w-full" value="{{ old('website') }}">

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
                    value="{{ old('tags') }}">

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
                       
                    ></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-sky-500 text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Create Gig
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
            </form>
        </x-card>
    </div>
</x-layout>

