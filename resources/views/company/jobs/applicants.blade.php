<x-app-layout>
    <!-- body -->
<div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-14 lg:pt-6 lg:pb-28 rounded-2xl">
  <div class="relative mx-auto max-w-7xl">
      <div class="flex items-stretch">

        <div class="ml-12 space-x-2 hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
            <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
              <p class="font-semibold text-center mt-10">{{$job->applicants->count()}}</p>
              <p class="font-semibold text-center mt-4">Applied</p>
            </div>
          </div>

          <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
            <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
              <p class="font-semibold text-center mt-10">{{$job->applicants->where('short_listed','<>',NULL)->count()}}</p>
                  <p class="font-semibold text-center mt-4">Shortlisted</p>
              </div>
          </div>

          <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
              <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                  <p class="font-semibold text-center mt-10">2</p>
                  <p class="font-semibold text-center mt-4">Rejected</p>
              </div>
          </div>

          <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
            <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
                <p class="font-semibold text-center mt-10">2</p>
                <p class="font-semibold text-center mt-12">Interviewed</p>
            </div>
        </div>

        <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
          <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
              <p class="font-semibold text-center mt-10">2</p>
              <p class="font-semibold text-center mt-12">Offered</p>
          </div>
      </div>

      <div class="ml-10 space-x-10 flex justify-center lg:w-0 lg:flex-1">
          <div class="shadow-inner shadow-xl text-gray-900 w-40 h-40 rounded-2xl">
              <p class="font-semibold text-center mt-10">2</p>
              <p class="font-semibold text-center mt-12">Hired</p>
          </div>
      </div>

          
        </div>




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
            {{-- <h3 class="text-sm font-medium text-green-800"> {{ session('success')}} </h3> --}}
            <div class="mt-2 text-sm text-green-700">
              <p>{{ session('success')}} </p>
            </div>

          </div>
        </div>
      </div>
      
      @endif 
      <div>

        <fieldset class="space-x-5 flex flex-row mb-8 mt-16 justify-end mr-8">
          <legend></legend>
          <a href="#" id="modal-all" class="trigger"><div class="relative flex items-start">
            <div class="flex h-5 items-center">
              <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-900 text-indigo-600 focus:ring-indigo-500">
            </div>
            <div class="ml-3 text-sm">
              <label for="comments" class="font-semibold text-gray-900">Select All</label>
            </div>
          </div></a>
          <div class="relative flex items-start">
            <div class="flex h-5 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>                
            </div>
            <div class="ml-3 text-sm">
              <label for="candidates" class="font-semibold text-gray-900">Shortlist</label>
            </div>
          </div>
          <div class="relative flex items-start">
            <div class="flex h-5 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>                
            </div>
            <div class="ml-3 text-sm">
              <label for="offers" class="font-semibold text-gray-900">Reject</label>
            </div>
          </div>
          <div class="relative flex items-start">
            <div class="flex h-5 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>                                
            </div>
            <div class="ml-3 text-sm">
              <label for="offers" class="font-semibold text-gray-900">Message</label>
            </div>
          </div>
          <div class="relative flex items-start">
            <div class="flex h-5 items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
              </svg>                                                
            </div>
            <div class="ml-3 text-sm">
              <label for="offers" class="font-semibold text-gray-900">Export to CSV</label>
            </div>
          </div>
        </fieldset>


      </div>
      
      <div class="mt-8 grid grid-row-1 gap-4 sm:grid-cols-2 space-x-2">
          <div class="shadow-2xl m-4 rounded-2xl p-6">
              <div>
                <div class="space-x-5 flex flex-row mt-8 mr-8 flex-wrap items-center justify-between sm:flex-wrap">
                  <p class="font-semibold text-center text-lg">Filter Applicants</p>
                  <a href="#"><p class="font-semibold text-lg ">Expand All</p></a>
                </div>
                

                <div class="flex flex-wrap justify-between bg-white p-6">
                  <div class="flex-1">
                      <a href="#" class="block">
                          <button class="flex flex-wrap min-w-0 w-full px-4 py-2 mt-4 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Years of Experience 
                            <div class="relative ml-auto mr-4 ">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                              </svg>
                            </div>
                            
                          </button>
                          
                      </a>
                          
                  </div>
                  
                    </div>

                  <div class="flex flex-wrap justify-between bg-white p-6">
                <div class="flex-1">
                    <a href="#" class="block">
                        <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Job Categories 
                          <div class="relative ml-auto mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                            </svg>
                          </div>
                          
                        </button>
                        
                    </a>
                        
                </div>
                
                  </div>

                  <div class="flex flex-wrap justify-between bg-white p-6">
                    <div class="flex-1">
                        <a href="#" class="block">
                            <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Industries 
                              <div class="relative ml-auto mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                </svg>
                              </div>
                              
                            </button>
                            
                        </a>
                            
                    </div>
                    
                  </div>

              
                    <div class="flex flex-wrap justify-between bg-white p-6">
                        <div class="flex-1">
                            <a href="#" class="block">
                                <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Skills 
                                  <div class="relative ml-auto mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                  </div>
                                  
                                </button>
                                
                            </a>
                                
                        </div>
                        
                    </div>


                    <div class="flex flex-wrap justify-between bg-white p-6">
                      <div class="flex-1">
                          <a href="#" class="block">
                              <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Location 
                                <div class="relative ml-auto mr-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                  </svg>
                                </div>
                                
                              </button>
                              
                          </a>
                              
                      </div>
                      
                    </div>


                    <div class="flex flex-wrap justify-between bg-white p-6">
                      <div class="flex-1">
                          <a href="#" class="block">
                              <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Education 
                                <div class="relative ml-auto mr-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                  </svg>
                                </div>
                                
                              </button>
                              
                          </a>
                              
                      </div>
                      
                    </div>

                    <div class="flex flex-wrap justify-between bg-white p-6">
                      <div class="flex-1">
                          <a href="#" class="block">
                              <button class="flex flex-wrap min-w-0 w-full px-4 py-2 text-sm font-medium text-start text-black border-black border-b rounded-lg " href="#"> Age 
                                <div class="relative ml-auto mr-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-x-0 right-0 w-6 h-6 animate-bounce">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                  </svg>
                                </div>
                                
                              </button>
                              
                          </a>
                              
                      </div>
                      
                    </div>

              </div>
              
          </div>

          <div class="shadow-2xl m-2 rounded-2xl p-6 ">
              <ul>


                @foreach($job->applicants as $applicant)
                <li class="mt-8 shadow-md rounded-2xl p-3 bg-gray-200">
                  <div class="flex h-5 items-center flex flex-row space-x-36">
                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-900 text-indigo-600 focus:ring-indigo-500">
                    <div class="justify-end space-x-1">
                      <a href="#" id="modal-applicant" class="trigger"><button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Message<button></a>

                        <form method="POST" action="/company/jobs">
                          @csrf
                          <input hidden name="application_id" value="{{$applicant->id}}">
                      <button type="submit" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Shortlist</button>
                        </form>

                        <form method="POST" action={{route('reject')}}>
                          @csrf
                          <input hidden name="application_id" value="{{$applicant->id}}">
                      <button  class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reject</button>

                      {{-- <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">View</button> --}}
                    </div>
                  </div>
                
                  <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div>
                      <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                        <!-- Heroicon name: mini/user -->
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </span>
                    </div>

                    <div class="flex min-w-0 flex-1 justify-between space-x-8 text-sm w-auto">
                      <div>
                          <p><a href="#" class="font-medium text-gray-900">{{$applicant->user->last_name. ' '. $applicant->user->first_name}}</a></p>
                          <p class="mt-2 text-gray-600">{{$job->location}}</p>
                          <p class="mt-2 text-gray-600">{{$applicant->created_at->diffForHumans()}}</p>
                      </div>

                      <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden mt-8">
                        <div>
                            <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                              <p class="font-semibold text-center ">90%</p>
                              <p class="font-semibold text-center">Match</p>
                            </div>
                        </div>
  
                        <div>
                          <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                            <p class="font-semibold text-center">3 years</p>
                            <p class="font-semibold text-center">Valid</p>
                            <p class="font-semibold text-center">Experience</p>
                          </div>
                      </div>
  
                      <div>
                        <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                          <p class="font-semibold text-center">23</p>
                          <p class="font-semibold text-center">Complete</p>
                          <p class="font-semibold text-center">Aplications</p>
                        </div>
                    </div>
                      </div>
                      
                    </div>
                </div>
                  
                </li>
@endforeach
                {{-- <li class="mt-8 shadow-md rounded-2xl p-3 bg-gray-200">
                  <div class="flex h-5 items-center flex flex-row space-x-36">
                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-900 text-indigo-600 focus:ring-indigo-500">
                    <div class="justify-end space-x-1">
                      <a href="#" id="modal-applicant" class="trigger"><button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Message</button></a>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Shortlist</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reject</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">View</button>
                   
                   
                   
                    </div>
                  </div>
                
                  <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div>
                      <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                        <!-- Heroicon name: mini/user -->
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </span>
                    </div>

                    <div class="flex min-w-0 flex-1 justify-between space-x-8 text-sm w-auto">
                      <div>
                          <p><a href="#" class="font-medium text-gray-900">Jane Doe</a></p>
                          <p class="mt-2 text-gray-600">Nairobi,KE</p>
                          <p class="mt-2 text-gray-600">Applied 2 days ago</p>
                      </div>

                      <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden mt-8">
                        <div>
                            <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                              <p class="font-semibold text-center ">90%</p>
                              <p class="font-semibold text-center">Match</p>
                            </div>
                        </div>
  
                        <div>
                          <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                            <p class="font-semibold text-center">3 years</p>
                            <p class="font-semibold text-center">Valid</p>
                            <p class="font-semibold text-center">Experience</p>
                          </div>
                      </div>
  
                      <div>
                        <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                          <p class="font-semibold text-center">23</p>
                          <p class="font-semibold text-center">Complete</p>
                          <p class="font-semibold text-center">Aplications</p>
                        </div>
                    </div>
                      </div>
                      
                    </div>
                </div>
                  
                </li>

                <li class="mt-8 shadow-md rounded-2xl p-3 bg-gray-200">
                  <div class="flex h-5 items-center flex flex-row space-x-36">
                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-900 text-indigo-600 focus:ring-indigo-500">
                    <div class="justify-end space-x-1">
                      <a href="#" id="modal-applicant" class="trigger"><button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Message</button></a>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Shortlist</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reject</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">View</button>
                    </div>
                  </div>
                
                  <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div>
                      <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                        <!-- Heroicon name: mini/user -->
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </span>
                    </div>

                    <div class="flex min-w-0 flex-1 justify-between space-x-8 text-sm w-auto">
                      <div>
                          <p><a href="#" class="font-medium text-gray-900">Jane Doe</a></p>
                          <p class="mt-2 text-gray-600">Nairobi,KE</p>
                          <p class="mt-2 text-gray-600">Applied 2 days ago</p>
                      </div>

                      <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden mt-8">
                        <div>
                            <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                              <p class="font-semibold text-center ">90%</p>
                              <p class="font-semibold text-center">Match</p>
                            </div>
                        </div>
  
                        <div>
                          <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                            <p class="font-semibold text-center">3 years</p>
                            <p class="font-semibold text-center">Valid</p>
                            <p class="font-semibold text-center">Experience</p>
                          </div>
                      </div>
  
                      <div>
                        <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                          <p class="font-semibold text-center">23</p>
                          <p class="font-semibold text-center">Complete</p>
                          <p class="font-semibold text-center">Aplications</p>
                        </div>
                    </div>
                      </div>
                      
                    </div>
                </div>
                  
                </li>

                <li class="mt-8 shadow-md rounded-2xl p-3 bg-gray-200">
                  <div class="flex h-5 items-center flex flex-row space-x-36">
                    <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-900 text-indigo-600 focus:ring-indigo-500">
                    <div class="justify-end space-x-1">
                      <a href="#" id="modal-applicant" class="trigger"><button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Message</button></a>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Shortlist</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reject</button>

                      <button type="button" class="w-20 items-center rounded border border-transparent bg-gray-600 px-2.5 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">View</button>
                    </div>
                  </div>
                
                  <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div>
                      <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                        <!-- Heroicon name: mini/user -->
                        <img class="h-10 w-auto sm:h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                      </span>
                    </div>

                    <div class="flex min-w-0 flex-1 justify-between space-x-8 text-sm w-auto">
                      <div>
                          <p><a href="#" class="font-medium text-gray-900">Jane Doe</a></p>
                          <p class="mt-2 text-gray-600">Nairobi,KE</p>
                          <p class="mt-2 text-gray-600">Applied 2 days ago</p>
                      </div>

                      <div class="flex min-w-0 flex-1 justify-end space-x-4 text-sm overflow-hidden mt-8">
                        <div>
                            <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                              <p class="font-semibold text-center ">90%</p>
                              <p class="font-semibold text-center">Match</p>
                            </div>
                        </div>
  
                        <div>
                          <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                            <p class="font-semibold text-center">3 years</p>
                            <p class="font-semibold text-center">Valid</p>
                            <p class="font-semibold text-center">Experience</p>
                          </div>
                      </div>
  
                      <div>
                        <div class="shadow-inner shadow-xl text-gray-800 w-20 h-16 rounded-2xl bg-gradient-to-r from-teal-400 to-teal-600">
                          <p class="font-semibold text-center">23</p>
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
<!-- body -->
</x-app-layout>