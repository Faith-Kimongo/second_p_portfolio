<x-app-layout>
    <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-14 lg:pt-6 lg:pb-28 rounded-2xl">
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-indigo-900 sm:text-4xl">Find the right Job for you</h2>
            </div>
            <div class="mt-4">
                <a href="{{route('job.index')}}" class="font-semibold hover:text-blue-800 text-blue-600">Jobs</a> |
                <a href="{{route('saved-jobs.index')}}" class="font-semibold hover:text-blue-700">Saved Jobs </a> |
                <a href="" class="font-semibold hover:text-blue-700"> Applications </a>
            </div>

            <div class="mt-6 grid grid-cols-5 gap-4 font-medium ">
                <div><button type="button"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Search
                        by Job Title <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button></div>

                <div><button type="button"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Jobs
                        by Location<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button></div>

                <div><button type="button"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Date
                        Published <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button></div>

                <div><button type="button"
                        class="inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Job
                        Level <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button></div>

                <div><button type="button"
                        class="inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Find
                        Jobs </button></div>
            </div>



            <p class="mt-4 font-semibold">Found <a class="text-green-400">{{$jobs->count()}}</a> jobs</p>
            <div class="grid grid-row-1 gap-4 sm:grid-cols-2">
                <div class="shadow-2xl m-2 rounded-2xl p-6">
                    <ul>
                                              

                       
                    
                        @forelse ($jobs as $job)
                        <li class="shadow-md rounded-2xl p-3 bg-gray-200 mt-4">
                            <div>
                                <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                                    <div class="">
                                        <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                                            <!-- Heroicon name: mini/user -->
                                            <img class="h-12 w-12 rounded-full object-cover" src="{{ $job->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                                        </span>
                                    </div>

                                    <div class="flex min-w-0 flex-1 justify-between space-x-4 ">
                                        <div>
                                            <p><a href="#" class="font-medium text-gray-900"> {{$job->title}} </a></p>
                                            <p class="mt-3 text-gray-600"> {{$job->user->name}} </p>
                                            <p class="mt-3 text-gray-600">
                                                @php
                                                $now = Carbon\Carbon::now();
                                                $daysRemaining = $now->diffInDays($job->deadline, false);
                                            @endphp
                                            <p>{{ $daysRemaining }} days remaining to the deadline</p>
                                            </p>
                                        </div>

                                    </div>

                                    <div class="ml-4 mt-4 flex-shrink-0">
                                        <p>$84000/y</p>
                                        <p class="mt-3 text-gray-600"> {{$job->location}} </p>
                                    </div>
                                </div>

                        </li>
                        @empty
                        <li>No job yet</li>
                        @endforelse
                       

                    </ul>
                </div>


{{-- Pinned Job --}}
              @if (isset($pinned_job))
              <div class="shadow-2xl m-4 rounded-2xl p-6">
                <div>
                    <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                        <div class="ml-4 mt-2">
                            <span class="h-20 w-20 rounded-full flex items-center justify-center ">
                                <img class="object-cover" src="{{$pinned_job->user->profile_photo_url}}" />
                            </span>
                        </div>

                        <div class="flex min-w-0 flex-1 justify-between ml-3">
                            <div>
                                <p><a href="#" class="font-medium text-gray-900">{{$pinned_job->title}}</a></p>
                                <p class="mt-3 text-gray-600"> {{$pinned_job->user->name}} </p>
                                <p class="mt-2  text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" clip-rule="evenodd" />
                                    </svg>
                                    {{$pinned_job->location}}
                                  </p>
                            </div>

                        </div>
                        <div class="ml-4 mt-4 flex-shrink-0">
                            <p> {{$pinned_job->remuneration}} </p>
                            <p class="mt-3 text-gray-600">Closing: {{$pinned_job->deadline->format('jS \o\f F Y')}}</p>
                            <p class="mt-3 text-gray-600">3 days remaining</p>
                            <p class="mt-3 text-gray-600">Posted: {{$pinned_job->created_at->diffForHumans()}}</p>
                        </div>

                    </div>

                    <div class="relative flex flex-1 justify-center mt-4">
                        <a href="#"
                            class="mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                            Job</a>
                        <a href="#"
                            class="mt-3 ml-3 inline-flex items-center flex-shrink-0 rounded-md border border-pink-800 px-4 py-2 text-base font-medium text-black shadow-sm hover:from-pink-700 hover:to-pink-900">Save</a>
                    </div>

                </div>
                <p class="font-semibold mt-10">About Company</p>
                <p class="mt-4">
                    {{$pinned_job->user->bio}}
                </p>

                <p class="font-semibold mt-10">Job Description</p>
                <p class="mt-4">
                    {{$pinned_job->desc}}
                    <br><br>
                <p class="font-semibold">Responsibilities:</p>
                <ul class="list-disc">

                    {{$pinned_job->responsibilities}}
                    {{-- <li>Install, repair, and maintain plumbing systems for residential and commercial properties
                    </li>
                    <li>Diagnose and troubleshoot plumbing issues</li>
                    <li>Repair and replace damaged pipes, fittings, and fixtures</li>
                    <li>Test and inspect plumbing systems to ensure proper function and compliance with building
                        codes</li>
                    <li>Advise customers on proper maintenance and repair of plumbing systems</li>
                    <li>Maintain clean and organized work areas</li> --}}
                </ul>
                <br>
                <p class="font-semibold">Requirements:</p>
                <ul class="list-disc">
                    {{$pinned_job->requirements}}
                    {{-- <li>3+ years of experience as a plumber</li>
                    <li>Valid plumbing license</li>
                    <li>Strong communication skills and customer service focus</li>
                    <li>Ability to work independently and as part of a team</li>
                    <li>Physical ability to lift and carry heavy objects, crawl into tight spaces, and work in
                        uncomfortable positions</li> --}}
                </ul>
                </p>
                <div class="sm:col-span-2 sm:flex sm:justify-end">
                    <button type="submit"
                        class="mt-4 ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                        Job</button>
                </div>
            </div>
              @endif
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
