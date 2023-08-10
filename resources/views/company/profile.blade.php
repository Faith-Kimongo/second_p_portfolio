<x-app-layout>
    <!-- body -->
    <div class="bg-white relative">
      <div class="mx-auto max-w-2xl sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        
    
        <!-- Products -->
        <div class="pt-1">
          <!-- <h2 class="sr-only">Products purchased</h2> -->
    
          <div class="space-y-6">
            <div class="bg-white sm:rounded-lg ">
              <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
                <div class="sm:flex lg:col-span-7">
                  <div class="aspect-w-1 aspect-h-1 w-full flex-shrink-0 overflow-hidden rounded-lg sm:aspect-none sm:h-40 sm:w-40">
                    <img src="images/image 22.png" alt="" class="h-full w-full object-cover object-cover sm:h-full sm:w-full rounded-full">
                  </div>

              

                  <div class="mt-6 sm:mt-0 sm:ml-6 px-6">
                    <h3 class="text-base font-medium text-gray-900 space-x-24">
                      <a href="#">{{ucfirst(Auth::user()->first_name)}} Profile</a>
                      <a href="/job/create"><button type="button" class="ml-54 w-auto px-4 py-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">Post a Job</button></a>
                    </h3>
                    <div class="flex flex-wrap items-center justify-between sm:flex-nowrap min-w-0 flex-1 justify-between text:align-right">
                      <p class="mt-2 text-sm font-medium text-gray-900">{{Auth::user()->company->company_website}}
                      </p> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="absolute ml-36 mt-3 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                      </svg>

                      {{-- <!-- <img src="images/Vector.png"> --> --}}
                    </div>
                    
                    <div class="flex flex-row gap-4 text-gray-800 my-auto text-2xl mx-auto md:mx-0 mt-6">
                        <div class="">
                          <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">25</p></dt>
                          <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                            Applicants
                          </dd>
                        </div>

                        <div class="px-8">
                          <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">{{Auth::user()->jobs->count()}}</p></dt>
                          <a href="/company_jobs">
                          <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                            Jobs Posted
                          </dd>
                          </a>
                        </div>

                        <div class="px-2">
                          <dt><p class="hover:cursor-pointer hover:text-pink-800 text-sm font-bold space-x-6">14</p></dt>
                          <dd class="mt-3 space-y-3 text-gray-500 text-sm">
                            Interview Scheduled
                          </dd>
                        </div>
                    </div>
                  </div>
                </div> 
        </div>
      </div>
    </div>
    </div>


    <div class="mt-4 grid grid-row-1 gap-4 sm:grid-cols-2">
      <ul><li class="shadow-xl rounded-2xl p-4">
        <div >
          <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
            <div class="ml-4 mt-2">
              <h3 class="text-sm font-medium leading-6 text-black font-bold">About Company</h3>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
              <a href="/company/register" id="modal-co" class="trigger"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">EDIT</button></a>
            </div>
        </div>
        <p class="text-gray-500 pb-8 text-sm">{{Auth::user()->company->company_bio}}</p>
          
      </li>



      <li class="shadow-xl mt-6 rounded-2xl p-4">
        <div>
            <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
              <div class="ml-4 mt-2">
                <h3 class="text-sm font-medium leading-6 text-black font-bold">Company Representative</h3>
              </div>
          </div>
          
          <dl class="pb-6 space-x-24 mt-4 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
            <div class="relative">
              <dt>
                <!-- Heroicon name: outline/check -->
                <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <p class="ml-10 text-sm text-black whitespace-nowrap">Name: {{Auth::user()->company->representative->first_name.' '.Auth::user()->company->representative->last_name;}}</p>
              </dt>
  
              <dt>
                <!-- Heroicon name: outline/check -->
                <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
               <p class="ml-10 text-sm text-black whitespace-nowrap">Email:  <a href="mailto:{{Auth::user()->company->representative->rep_email}}" class="text-sm text-blue-700" > {{Auth::user()->company->representative->rep_email}} </a></p> 
              </dt>
  
              <dt>
                <!-- Heroicon name: outline/check -->
                <svg class="absolute mt-1 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <p class="ml-10 text-sm text-black whitespace-nowrap">Position: {{Auth::user()->company->representative->position}}</p>
              </dt>
  

            </div>
  
            
            </dl>


            
        
          
      </li>

      <li class="shadow-xl mt-6 rounded-2xl p-4">
        <div>
          <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
            <div class="ml-4 mt-2">
              <h3 class="text-sm font-medium leading-6 text-black font-bold">Company Documents</h3>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
              <a href="/company/documents"><button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-800 border border-transparent rounded-lg active:bg-pink-700 hover:bg-pink-900 focus:outline-none focus:shadow-outline-blue">Upload Company Documents</button></a>
            </div>
        </div>
        
        <dl class="pb-6 space-x-24 mt-4 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
          <div class="relative">
            <dt class="mt-4">
              <!-- Heroicon name: outline/check -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-6 h-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
              </svg>              
              <p class="ml-10 text-sm text-blue whitespace-nowrap">KRA Pin Certificate</p>
            </dt>

            <dt class="mt-4">
              <!-- Heroicon name: outline/check -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-6 h-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
              </svg>
              <p class="ml-10 text-sm text-blue whitespace-nowrap">Cert of Incorporation</p>
            </dt>

            <dt class="mt-4">
              <!-- Heroicon name: outline/check -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-6 h-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
              </svg>
              <p class="ml-10 text-sm text-blue whitespace-nowrap">Business Certificate</p>
            </dt>

            <dt class="mt-4">
              <!-- Heroicon name: outline/check -->
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-6 h-6">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
              </svg>
              <p class="ml-10 text-sm text-blue whitespace-nowrap"> More Certificates</p>
            </dt>
          </div>

          
          </dl>
          
      </li>
    </ul>

    <div class="shadow-2xl m-4 rounded-2xl p-6">
 
      <div class="mt-10">
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-2">
            <h3 class="text-lg font-medium leading-6 text-black font-bold">Current Job Posting</h3>
          </div>
          <div class="ml-4 mt-2 flex-shrink-0">
            <a href="/company_jobs"><p class="text-sm text-blue-700">View All</p></a>
          </div>
      </div>
      <div class="mt-4 grid grid-cols-1 gap-4 flex items-center">
        <div class="mb-4">
          <ul role="list" class="-mb-8 mt-6">
            @foreach(Auth::user()->jobs as $job)
            <li>
                <div class="relative pb-8">
                    <span class="block inline-flex items-center justify-center rounded-md p-3" aria-hidden="true"></span>
                    <div class="relative flex space-x-3">
                      <div>
                        <span class="h-8 w-8 rounded-full flex items-center justify-center ">
                          <!-- Heroicon name: mini/user -->
                          <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                            />
                            </svg>
                        </span>
                      </div>



                    </div>
                      <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                        <div>
                            <p><a href="#" class="font-medium text-gray-900">{{$job->title}}</a></p>
                            <p class="text-gray-600">{{$job->category->name}}</p>
                        </div>
                        
                      </div>

                      <div class="flex min-w-0 flex-1 justify-end space-x-4 pt-1.5">
                        <div>
                            <p><a href="#" class="mt-8 text-gray-600">{{$job->created_at->diffForHumans()}}</a></p>
                        </div>
                      </div>

                    </div>
            
            </li>
            @endforeach


        </ul>
          
        </div>
      </div>
      </div>

    </div>

    
    
    </div>
      
</x-app-layout>