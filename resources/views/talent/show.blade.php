<x-app-layout>
    <div class="relative p-4">
        <div class="absolute inset-0 flex items-center" aria-hidden="true">
          <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-start">
          <span class="bg-white pr-2 text-sm text-gray-500">{{$talent->name}}'s Profile</span>
        </div>
      </div>
      

    <article>
        <!-- Profile header -->
        <div>
          <div>
            <img class="h-32 w-full object-cover lg:h-48" src="{{asset('images/banner.png')}}" alt="">
          </div>
          <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
              <div class="flex">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{$talent->profile_photo_url}}" alt="">
              </div>
              <div class="mt-6 sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                <div class="mt-6 min-w-0 flex-1 sm:hidden 2xl:block">
                  <h1 class="truncate text-2xl font-bold text-gray-900"> {{$talent->name}} </h1>
                  <p class="text-sm font-medium text-gray-500">Joined Ajiry  <a href="#" class="text-gray-900"></a> on <time datetime="2020-08-25">{{$talent->created_at->format('F d, Y')}}</time></p>

                </div>
                <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-x-4 sm:space-y-0">
                  <button type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    <svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    Call
                  </button>
                </div>
              </div>
            </div>
            <div class="mt-6 hidden min-w-0 flex-1 sm:block 2xl:hidden">
              <h1 class="truncate text-2xl font-bold text-gray-900">{{$talent->name}}</h1>
            </div>
          </div>
        </div>

        <!-- Tabs -->
        <div class="mt-6 sm:mt-2 2xl:mt-5">
          <div class="border-b border-gray-200">
            <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
              <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                <a href="#" class="border-pink-500 text-gray-900 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium" aria-current="page">Profile</a>

                {{-- <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Calendar</a> --}}

                {{-- <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Recognition</a> --}}
              </nav>
            </div>
          </div>
        </div>

        <!-- Description list -->
        <div class="mx-auto mt-6 max-w-5xl px-4 sm:px-6 lg:px-8">
          <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div class="sm:col-span-1">
              <dt class="text-sm font-medium text-gray-500">Phone</dt>
              <dd class="mt-1 text-sm text-gray-900">{{$talent->mobile_number ?? "No Mobile Number"}}</dd>
            </div>

            <div class="sm:col-span-1">
              <dt class="text-sm font-medium text-gray-500">Email</dt>
              <dd class="mt-1 text-sm text-gray-900">{{$talent->email}}</dd>
            </div>

            <div class="sm:col-span-1">
              <dt class="text-sm font-medium text-gray-500">Skills</dt>
              <dd class="mt-1 text-sm text-gray-900">
                <ul role="list" class="mt-2 leading-8">

                    @forelse ($talent->skills as $skill)
                        <li class="inline">
                            <a href="#"
                                class="relative inline-flex items-center rounded-full px-2.5 py-1 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                <div class="absolute flex flex-shrink-0 items-center justify-center">
                                    <span class="h-1.5 w-1.5 rounded-full bg-rose-500"
                                        aria-hidden="true"></span>
                                </div>
                                <div class="ml-3 text-xs font-semibold text-gray-900">{{ $skill->name }}
                                </div>
                            </a>
                        </li>
                    @empty
No Skills Listed by the user
                    @endforelse
                </ul>
              </dd>
            </div>

          

            {{-- <div class="sm:col-span-1">
              <dt class="text-sm font-medium text-gray-500">Birthday</dt>
              <dd class="mt-1 text-sm text-gray-900">June 8, 1990</dd>
            </div> --}}

            <div class="sm:col-span-2">
              <dt class="text-sm font-medium text-gray-500">About</dt>
              <dd class="mt-1 max-w-prose space-y-5 text-sm text-gray-900">
                <p>
                    {{$talent->bio ?? "Bio not updated"}}
                </p>
              </dd>
            </div>
          </dl>

          {{-- Experience --}}

            
            <div class="mt-8 flow-root">
              <dt class="text-sm font-medium text-gray-500 mb-2">Work Experience</dt>

              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-3">Employer Name</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Job Title</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">From - To </th>
                       
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                      <!-- Odd row -->
                      @forelse ($talent->experiences as $experience)
                      <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-3">{{$experience->employer_name}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> {{$experience->job_title}} </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$experience->start_date->format('Y')}}-{{$experience->end_date->format('Y')}}</td>
                      
                      </tr>
                      @empty
                      <tr>
                        <td>
                          No Experience yet
                        </td>
                      </tr>
                          
                      @endforelse
                    
          
                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          

          {{-- Education --}}
        </div>


        {{-- Experience --}}


        

      
      </article>
      
</x-app-layout>