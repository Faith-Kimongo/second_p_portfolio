<x-app-layout>
    <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-2 lg:pt-6 lg:pb-28 rounded-2xl">

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
                            <p>Job Updated successfully.</p>
                        </div>
                        <div class="mt-4">
                            <div class="-mx-2 -my-1.5 flex">
                                <a href="{{ route('job.index') }}" type="button"
                                    class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View
                                    Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <x-common.page-header backurl="{{ route('myjobs') }}" currenturl="{{ request()->url() }}"
            title="{{ 'Edit Job '.'-'. $job->title }}" backtitle="{{ 'My Jobs' }}" />

        <form action="{{ route('job.update', $job->id) }}" method="POST" class="mt-2">
            @method('PATCH')
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit - {{ $job->title }}</h3>
                        <p class="mt-1 text-sm text-gray-500">Please post a legitimate job.</p>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Job Title</label>
                            <input value=" {{$job->title}} " type="text" name="job_title" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Job Location</label>
                            <input type="text" name="job_location" value="{{$job->location}}" id="last-name" autocomplete="family-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">

                                @error('job_location')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category_id"  name="category_id" autocomplete="category-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $job->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                       

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Description</label>
                            <div class="mt-1">
                                <textarea id="job_desc" name="job_desc" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Job Description">{{$job->description}}</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your job. URLs are hyperlinked.
                            </p>

                            @error('job_desc')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Responsibilities</label>
                            <div class="mt-1">
                                <textarea id="about" name="job_resp" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Job responsibilities">{{$job->responsibilities}}</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your job responsibilities. URLs
                                are hyperlinked.</p>

                                @error('job_resp')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Requirements</label>
                            <div class="mt-1">
                                <textarea id="about" name="job_req" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Your requirements">{{$job->requirements}}</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your job requirements.</p>

                            @error('job_req')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Remuneration <small>(Default Currency is KES)</small></label>
                            <input type="number" name="job_remuneration" value="{{$job->remuneration}}" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                                @error('job_remuneration')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="job_deadline" class="block text-sm font-medium text-gray-700">Job
                                Deadline</label>
                                <input required type="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" name="job_deadline" id="job_deadline" autocomplete="job_deadline" class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">

                            @error('job_deadline')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">

                            <div class="relative flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="status" aria-describedby="comments-description" name="cover_letter"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-pink-600 focus:ring-pink-500"
                                        value="1">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Publish <small> (<i>Upon
                                                Approval</i>)</small> </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-pink-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-600 focus:ring-offset-2">Update</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.tiny.cloud/1/wrotbx1oa71lpqurike67hyxssrq31yyoypu4anunuui4c3b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
          selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
          plugins: 'lists ',
          menubar: '',
          toolbar: 'bold italic underline  | bullist numlist',
          

        });
     </script>
</x-app-layout>
