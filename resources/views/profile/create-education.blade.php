<x-app-layout>
   
  {{-- Session --}}

        <div class="mx-auto max-w-4xl py-16 px-4 sm:py-8 sm:px-6 lg:px-8">
           
          <div class="rounded-2xl bg-white shadow-2xl">
      
            <div class="grid grid-cols-1 lg:grid-cols-2">
              <!-- Contact information -->
            
              <!-- Contact form -->
              <div class="py-4 px-6 sm:px-10 lg:col-span-4 xl:pt-1">
                <div class="flex  justify-center p-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Add Education</h3>
                  </div>

@if (session('success'))
<div class="rounded-md bg-green-50 p-4">
  <div class="flex">
    <div class="flex-shrink-0">
      <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="ml-3">
      <h3 class="text-sm font-medium text-green-800"> {{ session('success')}} </h3>
      <div class="mt-2 text-sm text-green-700">
        <p>Education added successfully.</p>
      </div>
      <div class="mt-4">
        <div class="-mx-2 -my-1.5 flex">
          <a href="{{route('user-profile')}}" type="button" class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endif  
                <form action="{{route('education.store')}}" method="POST" class="mt-5 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    @csrf
                  <div>
                    <label for="first-name" class="block text-sm font-medium text-gray-900">University / College Name</label>
                    <div class="mt-1">
                      <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                  </div>
                  <div>
                    <label for="last-name" class="block text-sm font-medium text-gray-900">Field</label>
                    <div class="mt-1">
                      <input type="text" name="field" id="field" autocomplete="field" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                  </div>
    
                  <div>
                    <div class="flex items-center justify-center">
                        <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                            <label for="floatingInput" class="text-gray-700">Select start date</label>
                          <input type="date" name="start_date"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Select a date" />
                          <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                            <i class="fas fa-calendar datepicker-toggle-icon"></i>
                          </button>
                        </div>
                      </div>
                  </div>
    
                  <div>
                    <div class="flex items-center justify-center">
                        <div class="datepicker relative form-floating mb-3 xl:w-96" data-mdb-toggle-button="false">
                            <label for="floatingInput" class="text-gray-700">Select end date</label>
                          <input type="date" name="end_date"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Select a date" />
                          <button class="datepicker-toggle-button" data-mdb-toggle="datepicker">
                            <i class="fas fa-calendar datepicker-toggle-icon"></i>
                          </button>
                        </div>
                      </div>
                  </div>
    
                  <div class="relative flex items-start">
                    <div class="flex h-5 items-center">
                      <input  id="status" aria-describedby="comments-description" name="status" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" value="1">
                    </div>
                  <div class="ml-3 text-sm">
                    <label for="comments" class="font-medium text-gray-700">I currently study here</label>
                    </div>
                  </div>
    
                  <div class="sm:col-span-2 mt-6">
                    <div class="flex justify-between">
                      <label for="message" class="block text-sm font-medium text-gray-900"> Description</label>
                      <!-- <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span> -->
                    </div>
                    <div class="mt-1">
                      <textarea id="description" name="description" rows="4" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" aria-describedby="message-max"></textarea>
                    </div>
                  </div>
    
                  <div class="flex flex-row">
                    <div class="sm:col-span-2 sm:flex sm:justify-start">
                        <a href="userprofile.html"><button class="mt-2  inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-teal-800 to-teal-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-teal-700 hover:to-teal-900">Cancel</button></a>
                      </div>
        
                      <div class="sm:col-span-2 sm:flex sm:justify-end">
                        <button type="submit" class="mt-2 ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Save</button>
                      </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
    </form>

</x-app-layout>