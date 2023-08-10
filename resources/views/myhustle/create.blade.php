<x-app-layout>
    <div class="mt-4 relative mx-auto max-w-7xl px-4">

        @if (session('success'))
            <div class="rounded-md bg-green-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800"> {{ session('success') }} </h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>My hustle added successfully.</p>
                        </div>
                        <div class="mt-4">
                            <div class="-mx-2 -my-1.5 flex">
                                <a href="{{ route('myhustle.index') }}" type="button"
                                    class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View
                                    Myhustles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <x-common.page-header backurl="{{ route('myhustle.index') }}" currenturl="{{ request()->url() }}"
            title="{{ 'Post a Hustle' }}" backtitle="{{ 'My Hustles' }}" />
        <form action="{{ route('myhustle.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Post a Hustle</h3>
                        <p class="mt-1 text-sm text-gray-500">Please post a legitimate hustle.</p>
                    </div>


                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Hustle Title</label>
                            <input required type="text" name="title" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Hustle
                                Location</label>
                            <input required type="text" name="location" id="last-name" autocomplete="family-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Hustle Description
                            </label>
                            <div class="mt-1">
                                <textarea type="text" id="about" name="desc" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Hustle Description"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your hustle..
                            </p>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="country" name="category_id" autocomplete="country-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Price (for your
                                products)</label>
                            <input type="number" name="price" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-700 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>


                 


                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <div class="sm:col-span-3">
                            <label for="hustleImage" class="block text-sm font-medium text-gray-700 text-left">Upload a cover photo</label>
                        </div>
                        <div class="mt-1 sm:col-span-2 sm:mt-0">
                            <div class="flex max-w-lg rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                <div class="space-y-1">
                                    <svg class="h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="image"
                                            class="relative cursor-pointer rounded-md bg-white font-medium text-pink-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-pink-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span id="file-name-label">Upload a picture</span>
                                            <input id="image" name="image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-pink-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Create</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const fileInput = document.querySelector('#image');
        const fileNameLabel = document.querySelector('#file-name-label');
        
        fileInput.addEventListener('change', () => {
            fileNameLabel.textContent = fileInput.files[0].name;
        });
    </script>
</x-app-layout>
