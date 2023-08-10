<x-layout>
<div class="bg-white relative relative px-4 pt-1 pb-20 sm:px-6 lg:px-8 lg:pt-1 lg:pb-2 flex justify-center">
    <div class="mx-auto max-w-4xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
      <div class="rounded-2xl bg-white shadow-2xl">
  
        <div class="grid grid-cols-1 lg:grid-cols-2">
          <!-- Contact information -->
            
  
          <!-- Contact form -->
          <div class="py-4 px-6 sm:px-10 lg:col-span-4 xl:pt-1">
            <h3 class="pb-4 text-2xl font-medium text-indigo-900 text-center font-bold">Add Work Experience</h3>
            <form action="{{route('workexperience.store')}}" method="POST" class="mt-5 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
            @csrf
              <div>
                <label for="name" class="block text-sm font-medium text-gray-900">Employer Name</label>
                <div class="mt-1">
                  <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-gray-900">Job Title</label>
                <div class="mt-1">
                  <input type="text" name="title" id="title" autocomplete="family-name" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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

              </form>

              <div class="relative flex items-start">
                <div class="flex h-5 items-center">
                  <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                </div>
              <div class="ml-3 text-sm">
                <label for="comments" class="font-medium text-gray-700">I currently work here</label>
                </div>
              </div>

              <div class="sm:col-span-2 mt-6">
                <div class="flex justify-between">
                  <label for="message" class="block text-sm font-medium text-gray-900">Job Responsibility</label>
                  <!-- <span id="message-max" class="text-sm text-gray-500">Max. 500 characters</span> -->
                </div>
                <div class="mt-1">
                  <textarea id="message" name="message" rows="4" class="block w-full rounded-md border border-gray-300 py-3 px-4 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" aria-describedby="message-max"></textarea>
                </div>
              </div>

              <div class="justify-between flex flex-row">
                <div class="sm:col-span-2 sm:flex sm:justify-start js">
                    <a href="userprofile.html"><button type="submit" class="mt-2 -ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-teal-800 to-teal-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-teal-700 hover:to-teal-900">Cancel</button></a>
                  </div>
    
                  <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <button type="submit" class="mt-2 ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Save</button>
                  </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>