<x-app-layout>
  <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-2 lg:pt-6 lg:pb-28 rounded-2xl">
      <div class="relative mx-auto max-w-7xl">
      
        <x-common.page-header backurl="{{ url()->previous() }}" currenturl="{{ request()->url() }}" title="{{ 'Job Application - '.$application->job->title }}" backtitle="{{ 'Applications' }}" />

          <div class="grid grid-row-1 gap-4 sm:grid-cols-2">
             
          </div>
      </div>

      <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-base font-semibold leading-6 text-gray-900">Applicant Information</h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
          <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">Full name</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$application->user->name}} </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">Application for</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$application->job->title}} </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">Email address</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$application->user->email}} </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500"> Phone Number </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$application->user->mobile_number ?? "No Phone Number"}} </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">About</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"> {{$application->user->bio ?? "No Bio Updated"}} </dd>
            </div>
            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">Curriculum Vitae</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                  <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                    <div class="flex w-0 flex-1 items-center">
                      <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 w-0 flex-1 truncate">{{$application->user->cv ?? "No CV Uploaded"}}</span>
                    </div>

                    @if ($application->user->cv)
                    <div class="ml-4 flex-shrink-0">
                      <a href="#" class="font-medium text-pink-700 hover:text-pink-500">Download</a>
                    </div>
                    @endif
                  
                  </li>
                 
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>
          
      
  </div>

  
  </div>

  

  
</x-app-layout>
