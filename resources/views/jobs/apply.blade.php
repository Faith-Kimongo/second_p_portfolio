<x-app-layout>
        <div class="mt-4 relative mx-auto max-w-7xl px-4">
        <x-common.page-header backurl="{{ route('job.show',$job->slug) }}" currenturl="{{ request()->url() }}"
                title="{{ 'Application for '.$job->title }}" backtitle="{{ 'Job '.$job->title }}" />
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
                            <p>Job applied successfully.</p>
                        </div>
                        <div class="mt-4">
                            <div class="-mx-2 -my-1.5 flex">
                                <a href="{{ route('job.applications') }}" type="button"
                                    class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View
                                    Applications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="bg-white p-4 ">
            <div class="px-4 sm:px-0">
              <h3 class="text-base font-semibold leading-7 text-gray-900">Job Application for {{$job->title}}</h3>
            </div>
            <div class="mt-6">
              <dl class="grid grid-cols-1 sm:grid-cols-2">
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Job Title</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2"> {{$job->title}} </dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Location</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2"> {{$job->location}} </dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Deadline</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2"> {{$job->deadline->format('m-d-Y')}} </dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-2 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Job Description</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2"> {!!$job->description!!} </dd>
                </div>
              </dl>


              {{-- if the job is external --}}
              @if ($job->external)

        
              <form action="{{ route('job.apply.store',$job->slug) }}" method="POST">
                @csrf
              <input type="hidden" name="external" value="external" />
              <div class="rounded-md bg-blue-50 p-4">
                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700">This is an external job advert </p>
                    <p class="mt-3 text-sm md:ml-6 md:mt-0">
                      <button type="submit" class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">
                        Click here for application Details
                        <span aria-hidden="true"> &rarr;</span>
                      </button>
                    </p>
                  </div>
                </div>
              </div>
              
              </form>
              @else
              <form action="{{ route('job.apply.store',$job->slug) }}" method="POST">
                @csrf
                        <div>
                           
                            <hr class="mt-2">
                        </div>
                        
    
                    @if ($job->isAppliedBy(Auth::user()))
                    <div class="rounded-1 bg-blue-50 p-4">
                        <div class="flex">
                          <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                            </svg>
                          </div>
                          <div class="ml-3 flex-1 md:flex md:justify-between">
                            <p class="text-sm text-blue-700">Already Applied for this job</p>
                            <p class="mt-3 text-sm md:ml-6 md:mt-0">
                              <a href=" {{route('job.index')}} " class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">
                                Check out other jobs
                                <span aria-hidden="true"> &rarr;</span>
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                    @else
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-pink-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Apply</button>
                    </div>
                    @endif
                    
            </form>
              @endif
             
            </div>
          </div>
          
</x-app-layout>
