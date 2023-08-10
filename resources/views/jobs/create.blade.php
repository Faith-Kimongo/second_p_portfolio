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
                            <p>Job added successfully.</p>
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

        <x-common.page-header backurl="{{ route('job.index') }}" currenturl="{{ request()->url() }}"
            title="{{ 'Post a Job' }}" backtitle="{{ 'Jobs' }}" />

        <form action="{{ route('job.store') }}" method="POST" class="mt-2">
            @csrf
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Post A job</h3>
                        <p class="mt-1 text-sm text-gray-500">Please post a legitimate job.</p>
                        <div class="rounded-md bg-yellow-50 p-4 mt-2">
                            <div class="flex">
                              <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                </svg>
                              </div>
                              <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Attention needed</h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                  <p>Do Not Post the application details on the job requirements or any other place. Include the application details on the application details input</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Job Title</label>
                            <input type="text" name="job_title" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                        </div>

                    
                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Job Location</label>
                            <input type="text" name="job_location" id="last-name" autocomplete="family-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Job Category</label>
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
                        @error('category_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Description</label>
                            <div class="mt-1">
                                <textarea type="text" id="myeditorinstance" name="job_desc" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Job Description"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your job. URLs are hyperlinked.
                            </p>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Responsibilities</label>
                            <div class="mt-1">
                                <textarea type="text" id="about" name="job_resp" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Job responsibilities"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Your job responsibilities. URLs
                                are hyperlinked.</p>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">Job
                                Requirements</label>
                            <div class="mt-1">
                                <textarea type="text" id="about" name="job_req" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                    placeholder="Job requirements"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your job requirements.</p>
                        </div>

                       
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Remuneration</label>
                            <input type="number" name="job_remuneration" id="first-name" autocomplete="given-name"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Job
                                Deadline</label>
                            <input required type="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"
                                name="job_deadline" id="job_deadline" autocomplete="job_deadline"
                                class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                        </div>


                        {{-- External --}}
                        <div class="col-span-6 sm:col-span-3">
                            <div class="relative flex items-start">
                                <div class="flex h-5 items-center">
                                    <input id="external" aria-describedby="comments-description" name="external" onclick="handleCheckboxClick()"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-pink-600 focus:ring-pink-500"
                                        value="1">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="external" class="font-medium text-gray-700">Is the job external ?</label>
                                </div>
                            </div>
                        </div>

                    
                    </div>
                     {{-- External Link --}}
<div>

                     <div class="col-span-6 sm:col-span-6 hidden">
                        <label for="about" class="block text-sm font-medium text-gray-700">Job
                            Application process <cite>(Optional)</cite></label>
                        <div id="external_process" class="mt-1">
                            <textarea type="text" id="external_process" name="job_process" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 sm:text-sm"
                                placeholder="Job application process"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Brief description for your job requirements.</p>
                    </div>

                     <div class="col-span-6 sm:col-span-3 hidden">
                        <label for="external_link" class="block text-sm font-medium text-gray-700">External Job URL</label>
                        <input  type="url" 
                            name="external_link" id="external_link" autocomplete="external_link"
                            class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3 hidden">
                        <label for="external_email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input  type="email" 
                            name="external_email" id="external_email" autocomplete="external_email"
                            class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-pink-500 focus:outline-none focus:ring-pink-500 sm:text-sm">
                    </div>
                </div>
                
                <div class="px-4 py-3 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center rounded-md border border-transparent bg-pink-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-600 focus:ring-offset-2">Post Job</button>
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
          toolbar: 'bold italic underline  | bullist',
        });

        // external
       
        function handleCheckboxClick() {
    var externalCheckbox = document.getElementById("external");
    var externalLinkInput = document.getElementById("external_link").parentNode;
    var externalEmailInput = document.getElementById("external_email").parentNode;
    var externalProcessInput = document.getElementById("external_process").parentNode;

    if (externalCheckbox.checked) {
        externalLinkInput.classList.remove("hidden");
        externalEmailInput.classList.remove("hidden");
        externalProcessInput.classList.remove("hidden");

    } else {
        externalLinkInput.classList.add("hidden");
        externalEmailInput.classList.add("hidden");
        externalProcessInput.classList.add("hidden");

    }
}
  
     </script>
    
</x-app-layout>
