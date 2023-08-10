<x-app-layout>
    <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-14 lg:pt-6 lg:pb-28 rounded-2xl">
        <div class="relative mx-auto max-w-5xl">
          <div class="flex items-stretch">
            <div class="aspect-w-1 aspect-h-1 w-full flex-shrink-0 overflow-hidden rounded-lg sm:aspect-none sm:h-40 sm:w-40">
                <a href="/companies">
              <img src="images/image 22.png" alt="company_logo"
                class="h-full w-full object-cover object-cover sm:h-full sm:w-full rounded-full"></a>
            </div>
      
            <div class="ml-12 space-x-2 hidden items-center justify-end md:flex md:flex-1 lg:w-0">
              <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
                <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                  <p class="font-semibold text-center mt-10">{{Auth::user()->jobs->count()}}</p>
                  <p class="font-semibold text-center mt-4">Live Jobs</p>
                </div>
              </div>
      
              <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
                <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                  <p class="font-semibold text-center mt-10">{{Auth::user()->jobs->count()}}</p>
                  <p class="font-semibold text-center mt-4">Drafted Jobs</p>
                </div>
              </div>
      
              <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
                <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                  <p class="font-semibold text-center mt-10">{{Auth::user()->jobs->count()}}</p>
                  <p class="font-semibold text-center mt-4">Archived Jobs</p>
                </div>
              </div>
      
              <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
                <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                  <p class="font-semibold text-center mt-10">{{Auth::user()->jobs->count()}}</p> 
                  <p class="font-semibold text-center mt-4">All Jobs</p>
                </div>
              </div>
      
      
            </div>
          </div>
      
      
        </div>
      
        <div class="ml-20 mt-10 grid grid-cols-4 gap-4 font-medium space-x-2">
          <div><button type="button"
              class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Search
              by Job Title <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="ml-4 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>
            </button></div>
      
          <div><button type="button"
              class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Closed
              Jobs<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="ml-4 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg></button></div>
      
          <div><button type="button"
              class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Open
              Jobs <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="ml-4 w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg></button></div>
      
          <div><a href="{{route('job.index')}}"><button type="button"
                class="inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Find
                Jobs </button></a></div>
        </div>
      
        <div class="mt-6 grid grid-row-1 gap-4 sm:grid-cols-1 ml-14 mr-14 pl-6 pr-6">
          <ul role="list mb-2">

@foreach(Auth::user()->jobs as $job)

            <li class="shadow-xl bg-gray-200 rounded-2xl p-3 mt-8">
              <div class="relative">
                <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 26 26">
                        <path
                          d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                      <p><a href="#" class="font-medium text-gray-900">{{$job->title}}</a></p>
                      <p class="text-gray-600">{{$job->category->name}}</p>
                      <p class="text-gray-600">{{$job->location}}</p>
                      <p class="text-gray-600">{{$job->created_at->diffForHumans()}}</p>
                    </div>
      
                  </div>
      
                  <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden">
                    <div>
                      <a href="/company/jobs/{{$job->id}}">
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center ">{{optional($job->applicants)->count()}}</p>
                        <p class="font-semibold text-center">Applicants</p>
                      </div>
                    </a>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">{{optional($job->applicants)->count()}}</p>
                        <p class="font-semibold text-center">Shortlisted</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">{{optional($job->applicants)->count()}}</p>
                        <p class="font-semibold text-center">Complete</p>
                        <p class="font-semibold text-center">Aplications</p>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
            </li>
      @endforeach
            {{-- <li class="shadow-xl bg-gray-200 rounded-2xl p-3 mt-8">
              <div class="relative">
                <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <svg class="h-10 w-10" fill="red" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                      <p><a href="#" class="font-medium text-gray-900">Data Analyst</a></p>
                      <p class="text-gray-600">Instagram</p>
                      <p class="text-gray-600">Mombasa, KE</p>
                      <p class="text-gray-600">3 days to closing</p>
                    </div>
      
                  </div>
      
                  <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden">
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center ">323</p>
                        <p class="font-semibold text-center">Applicants</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">120</p>
                        <p class="font-semibold text-center">Shortlisted</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">200</p>
                        <p class="font-semibold text-center">Complete</p>
                        <p class="font-semibold text-center">Aplications</p>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
            </li>
      
            <li class="shadow-xl bg-gray-200 rounded-2xl p-3 mt-8">
              <div class="relative">
                <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 26 26">
                        <path
                          d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                      <p><a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                      <p class="text-gray-600">Facebook</p>
                      <p class="text-gray-600">Nairobi, KE</p>
                      <p class="text-gray-600">3 days to closing</p>
                    </div>
      
                  </div>
      
                  <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden">
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center ">323</p>
                        <p class="font-semibold text-center">Applicants</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">120</p>
                        <p class="font-semibold text-center">Shortlisted</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">200</p>
                        <p class="font-semibold text-center">Complete</p>
                        <p class="font-semibold text-center">Aplications</p>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
            </li>
      
            <li class="shadow-xl bg-gray-200 rounded-2xl p-3 mt-8">
              <div class="relative">
                <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                <div class="relative flex space-x-3">
                  <div>
                    <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                      <!-- Heroicon name: mini/user -->
                      <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 26 26">
                        <path
                          d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                      </svg>
                    </span>
                  </div>
                  <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                    <div>
                      <p><a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                      <p class="text-gray-600">Facebook</p>
                      <p class="text-gray-600">Nairobi, KE</p>
                      <p class="text-gray-600">3 days to closing</p>
                    </div>
      
                  </div>
      
                  <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden">
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center ">323</p>
                        <p class="font-semibold text-center">Applicants</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">120</p>
                        <p class="font-semibold text-center">Shortlisted</p>
                      </div>
                    </div>
      
                    <div>
                      <div
                        class="shadow-inner shadow-xl text-gray-800 w-20 h-20 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                        <p class="font-semibold text-center">200</p>
                        <p class="font-semibold text-center">Complete</p>
                        <p class="font-semibold text-center">Aplications</p>
                      </div>
                    </div>
                  </div>
      
                </div>
              </div>
            </li> --}}
          </ul>
        </div>
      
      </div>
      </div>
      </div>
      <div class="justify-start -mt-16 flex justify-end mr-24 mb-4 space-x-3">
        <a href="#"
          class="shadow-md inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-teal-900 rounded-lg hover:bg-gray-100 hover:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          1
        </a>
      
        <a href="#"
          class="shadow-md inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-teal-900 rounded-lg hover:bg-gray-100 hover:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          2
        </a>
      
        <a href="#"
          class="shadow-md inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-teal-300 rounded-lg hover:bg-gray-100 hover:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          3
        </a>
      
        <a href="#"
          class="shadow-md inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-teal-900 rounded-lg hover:bg-gray-100 hover:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          4
        </a>
      
        <!-- Next Button -->
        <a href="#"
          class="shadow-md animate-bounce inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-600 bg-white border border-teal-900 rounded-lg hover:bg-gray-100 hover:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          Next
        </a>
      </div>
      
      
</x-app-layout>