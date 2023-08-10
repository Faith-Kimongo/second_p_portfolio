<x-app-layout>
    <!-- Hero section -->
    <div class="relative mt-8">
        <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
                <div class="absolute inset-0 shadow-md">
                    <video autoplay loop muted>
                        <source
                            src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="absolute inset-0 bg-gradient-to-r bg-opacity-70 hover:bg-opacity-80"></div>
                </div>

                <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8 grid lg:grid-cols-1 sm:grid-cols-2">
                    <h6
                        class="text-center text-md font-bold tracking-tight sm:text-5xl lg:text-md lg:text-black text-white">
                        <span class="block">Find the right job for you</span>
                    </h6>
                  {{-- Search form --}}

              
                  <form action="{{ route('job.index') }}" method="GET" class="mx-auto mt-10">

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                      
                      <div class="">
                        {{-- Categories --}}
                        <div class="flex items-center justify-center px-4 py-2  ">
                            <select id="category_id" name="category_id"
                            class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-pink-600 sm:text-sm sm:leading-6">
                            <option value="all">All</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request()->input('category_id') == $category->id ? 'selected' : '' }}>
                              {{ $category->name }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                  
                      <div class="">
                        {{-- Search --}}
                        <div class="flex items-center justify-center px-4 py-2  ">
                          <div class="flex items-center flex-1">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 text-gray-400">
                              <path fill-rule="evenodd"
                                d="M8.5 15a6.5 6.5 0 100-13 6.5 6.5 0 000 13zm6.19-1.31l3.61 3.61a.75.75 0 11-1.06 1.06l-3.61-3.61a8 8 0 111.06-1.06z"
                                clip-rule="evenodd" />
                            </svg> --}}
                            <input type="text" name="search" id="search" value="{{ request()->search }}"
                              class="block w-full py-2 pl-3 pr-10 leading-5 text-gray-900 placeholder-gray-500 bg-white border-gray-300 rounded-md focus:outline-none focus:placeholder-pink-900 sm:text-sm"
                              placeholder="Search by job title...">
                          </div>
                          <button type="submit"
                            class="inline-flex items-center justify-center px-4 py-2 ml-2 font-medium text-white bg-pink-700 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-800 sm:text-sm">
                            Show Jobs
                          </button>
                        </div>
                      </div>
                  
                    </div>
                  
                  </form>

                
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
        <p class="text-center text-base font-semibold text-black text-2xl">Latest Jobs</p>

        <div class="relative m-4">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
            </div>
        </div>

        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($jobs as $job)
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                <div class="lg:col-start-3 lg:row-end-1">
                    <h2 class="sr-only">{{$job->title}}</h2>
                    <div class="truncate rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5">
                      <dl class="flex flex-wrap">
                        <div class="flex-auto pl-6 pt-6">
                          <dd class=" mt-1 text-sm font-semibold leading-6 text-gray-900"> {{ substr($job->title, 0, 30) . (strlen($job->title) > 20 ? '...' : '') }} </dd>
                        </div>
                        <div class="flex-none self-end px-6 pt-4">
                          <dt class="sr-only">Status</dt>
                          <dd class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-600 ring-1 ring-inset ring-green-600/20">New</dd>
                        </div>
                        <div class="mt-6 flex w-full flex-none gap-x-4 border-t border-gray-900/5 px-6 pt-6">
                          <dt class="flex-none">
                            <span class="sr-only">Client</span>
                            <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
                            </svg>
                          </dt>
                          <dd class="text-sm font-medium leading-6 text-gray-900"> {{$job->user->name}} </dd>
                        </div>
                        <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                          <dt class="flex-none">
                            <span class="sr-only">Posted On</span>
                            <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                              <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                            </svg>
                          </dt>
                          <dd class="text-sm leading-6 text-gray-500">
                            <time datetime="2023-01-31"> {{$job->created_at->format('jS, F Y')}} </time>
                          </dd>
                        </div>
                        <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                          <dt class="flex-none">
                            <span class="sr-only">Status</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                              </svg>
                              
                          </dt>
                          <dd class="text-sm leading-6 text-gray-500"> {{$job->location}} </dd>
                        </div>
                      </dl>
                      <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
                        <a href=" {{route('job.show',$job->slug)}} " class="text-sm font-semibold leading-6 text-gray-900">Check this job out <span aria-hidden="true">&rarr;</span></a>
                      </div>
                    </div>
                  </div>
                  
              </li>
            @empty
                
            @endforelse
           
          
          </ul>
       
    </div>

    <div class="text-pink-800 text-center">
        <a href="{{ route('job.index') }}"><button
                class="mb-2 ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Explore
                All Jobs</button></a>
    </div>
    <div class="bg-white">
        <div class="container mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8 md:flex md:shrink-0 sm:shrink-0">
            <div
                class="mx-auto grid grid-cols-2 sm:grid-cols-2 sm:space-x-6 gap-y-12 gap-x-8 px-4 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">

                <div class="sm:flex shadow-sm sm:ml-5">
                    <div class="sm:flex-shrink-0 ">
                        <div class="flow-root ">
                            <img class="rounded-2xl h-32 w-56"
                                src="images/test0.png"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <h3 class="text-lg font-bold text-black">Let the Jobs find you</h3>
                        <p class="mt-2 text-sm text-black truncate md:whitespace-normal md:hover:visible"> Create your free profile and get interview invites and jobs
                            that work for you </p>
                        <a href="{{ route('dashboard') }}"><button
                                class="mt-3 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Get
                                Hired</button>
                        </a>
                    </div>
                </div>

                <div class="sm:flex shadow-sm ">
                        <div class="space-x-6 sm:flex-shrink-0">
                            <div class="flow-root ">
                                <img class="rounded-2xl h-32 w-56"
                                    src="images/test1.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 ">
                            <h3 class="text-md font-bold text-black">Are you a job Seeker</h3>
                            <a href="{{ route('register') }}"><button
                                    class="mt-16 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Register
                                    Now</button></a>
                        </div>

                </div>

                <div class="sm:flex shadow-sm">
                    <div class="sm:flex-shrink-0 ">
                        <div class="flow-root ">
                            <img class="rounded-2xl h-32 w-56"
                                src="images/test2.png"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <h3 class="text-lg font-bold text-black">Get top talent</h3>
                        <p class="mt-2 text-sm text-black truncate md:whitespace-normal"> Choose from a pool of great talent </p>
                        <a href=" {{ route('talents') }} "><button
                                class="mt-4 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Hire
                                Talent</button></a>
                    </div>
                </div>

                <div class="sm:flex shadow-sm">
                    <div class="sm:flex-shrink-0 ">
                        <div class="flow-root ">
                            <img class="rounded-2xl h-32 w-56"
                                src="images/test3.png"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <h3 class="text-md font-bold text-black">Are you an employer</h3>
                        <a href=""><button
                                class="mt-12 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Register
                                Now</button></a>
                    </div>
                </div>

                <div class="sm:flex shadow-sm">
                    <div class="sm:flex-shrink-0 ">
                        <div class="flow-root ">
                            <img class="rounded-2xl h-32 w-56"
                                src="images/test4.png"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <h3 class="text-lg font-bold text-black">MyHustle</h3>
                        <p class="mt-2 text-sm text-black truncate md:whitespace-normal"> Advertise your Merchandise for free </p>
                        <a href=" {{ route('myhustle.index') }} "><button
                                class="mt-4 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Advertise</button></a>
                    </div>
                </div>

                <div class="sm:flex shadow-sm">
                    <div class="sm:flex-shrink-0 ">
                        <div class="flow-root ">
                            <img class="rounded-2xl h-32 w-56"
                                src="images/test5.png"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <h3 class="text-md font-bold text-black">Learn New Skills</h3>
                        <a target="_blank" href="https://learnwithajiry.com/"><button
                                class="mt-12 inline-flex items-center rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-md hover:from-pink-700 hover:to-pink-900">Learn
                                New Skills</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </x-guest-layout>
