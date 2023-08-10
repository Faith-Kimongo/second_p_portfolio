<x-app-layout>
  <div class="py-10">
    <div class="mx-auto max-w-3xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-8 lg:px-8">
      <div class="hidden lg:col-span-3 lg:block xl:col-span-2">
        <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
          <div class="space-y-1 pb-8">
            <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:bg-gray-50" -->
            <a href=" {{route('myhustle.index')}} " class="{{ empty(request()->query()) && request()->is('myhustle') ? 'bg-gray-200' : '' }} text-gray-900 group flex items-center rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
              <svg class="text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>
              <span class="truncate">Home</span>
            </a>

            <form action="{{route('myhustle.index')}}" method="GET">
              <input hidden name="popular" value="popular"/>
            <button type="submit" class="{{request()->has('popular') ? 'bg-gray-200': '' }} text-gray-700 hover:bg-gray-50 group flex items-center rounded-md px-3 py-2 text-sm font-medium">
              <svg class="text-gray-400 group-hover:text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
              </svg>
              <span class="truncate">Popular</span>
            </button>
          </form>

            {{-- <a href="#" class="text-gray-700 hover:bg-gray-50 group flex items-center rounded-md px-3 py-2 text-sm font-medium">
              <svg class="text-gray-400 group-hover:text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
              </svg>
              <span class="truncate">Categories</span>
            </a> --}}

            <form action="{{route('myhustle.index')}}" method="get">
              <input name="trending" value="trending" hidden />
            <button type="submit" class="{{request()->has('trending') ? 'bg-gray-200': '' }} text-gray-700 hover:bg-gray-50 group flex items-center rounded-md px-3 py-2 text-sm font-medium">
              <svg class="text-gray-400 group-hover:text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
              </svg>
              <span class="truncate">Trending</span>
            </button>
          </form>
          </div>
          <div class="pt-10">
            <p class="px-3 text-sm font-medium text-gray-500" id="communities-headline">Categories</p>
            <div class="mt-3 space-y-2" aria-labelledby="communities-headline">
             
             @forelse ($categories as $category)

             <form action="{{route('myhustle.index')}}" method="GET">

              <input hidden name="category_id" value="{{$category->id}}" />
              <button type="submit" class=" {{ request()->input('category_id')==$category->id ? 'bg-gray-200':''   }}  group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                <span class="truncate">{{$category->name}}</span>
              </button>
            </form>
             
             @empty
                 No Categories
             @endforelse

            </div>
          </div>
        </nav>
      </div>
      <main class="lg:col-span-9 xl:col-span-6">
        <div class="px-4 sm:px-0">
          <div class="sm:hidden">
            <label for="question-tabs" class="sr-only">Select a tab</label>
            <select id="question-tabs" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-rose-500">
              <option selected>Recent</option>

              <option>Most Liked</option>

              <option>Most Answers</option>
            </select>
          </div>
          <div class="hidden sm:block">
            <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
              <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
              <a href="" aria-current="page" class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
                <span>Recent</span>
                <span aria-hidden="true" class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5"></span>
              </a>

              <a href="" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
                <span>Most Liked</span>
                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
              </a>

              <a href="" class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
                <span>Most Comments</span>
                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
              </a>
            </nav>
          </div>
        </div>

        <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
          <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
            <div class="ml-4 mt-2">
              <h3 class="text-base font-semibold leading-6 text-gray-900">Hustle Listings</h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
              <a href="{{route('myhustle.create')}}" class="relative inline-flex items-center rounded-md bg-pink-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post My Hustle</a>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <h1 class="sr-only">Recent hustles</h1>
          <ul role="list" class="space-y-4">
            @forelse ($myhustles as $hustle)
            <li class="bg-white px-4 py-6 shadow sm:rounded-lg sm:p-6">
              <a href="{{route('myhustle.show',$hustle->id)}}">
              <article aria-labelledby="question-title-81614">
                <div>
                  <div class="flex space-x-3">
                    <div class="flex-shrink-0">
                      <img class="h-10 w-10 rounded-full" src="{{$hustle->user->profile_photo_url}}" alt="">
                    </div>
                    <div class="min-w-0 flex-1">
                      <p class="text-sm font-medium text-gray-900">
                        <button  class="hover:underline"> {{$hustle->user->name}} </button>
                      </p>
                      <p class="text-sm text-gray-500">
                        <button class="hover:underline">
                          <time datetime="2020-12-09T11:43:00">{{$hustle->created_at->format('F j \a\t g:i A')}}</time>
                        </button>
                      </p>
                    </div>
                  
                    <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                        <div>
                          <button  type="button" class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600" id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open options</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                          </button>
                        </div>
                      </x-slot>

                        <x-slot name="content">
                          <!-- Report Hustle -->
                          <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                      
                            <button class="text-gray-700 flex px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="options-menu-0-item-2">
                              <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M3.5 2.75a.75.75 0 00-1.5 0v14.5a.75.75 0 001.5 0v-4.392l1.657-.348a6.449 6.449 0 014.271.572 7.948 7.948 0 005.965.524l2.078-.64A.75.75 0 0018 12.25v-8.5a.75.75 0 00-.904-.734l-2.38.501a7.25 7.25 0 01-4.186-.363l-.502-.2a8.75 8.75 0 00-5.053-.439l-1.475.31V2.75z" />
                              </svg>
                              <span>Report Hustle</span>
                            </button>
                          </div>
                      </x-slot>
                    </x-dropdown>

                  </div>
                  <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">{{$hustle->title}}</h2>
                </div>
                <div class="mt-2 space-y-4 text-sm text-gray-700">
                  <p>{{$hustle->desc}}</p>
                      <img src="{{ asset('myhustleImages/' . $hustle->image) }}" alt="Side profile of women&#039;s Basic Tee in black." class="hidden lg:block rounded-lg">
                </div>
                <div class="mt-6 flex justify-between space-x-8">
                  <div class="flex space-x-6">
                  {{-- Like button --}}
                  <livewire:like :myhustle='$hustle'></livewire:like>
                    <span class="inline-flex items-center text-sm">
                      <button  class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium text-gray-900"> {{$hustle->comments->count()}} </span>
                        <span class="sr-only">comments</span>
                      </button>
                    </span>
                    <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
                          <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium text-gray-900"> {{$hustle->views}} </span>
                        <span class="sr-only">views</span>
                      </button>
                    </span>
                  </div>
                  <div class="flex text-sm">
                    <span class="inline-flex items-center text-sm">
                      <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M13 4.5a2.5 2.5 0 11.702 1.737L6.97 9.604a2.518 2.518 0 010 .792l6.733 3.367a2.5 2.5 0 11-.671 1.341l-6.733-3.367a2.5 2.5 0 110-3.475l6.733-3.366A2.52 2.52 0 0113 4.5z" />
                        </svg>
                        <span class="font-medium text-gray-900">Share</span>
                      </button>
                    </span>
                  </div>
                </div>
              </article>
            </a>
            </li>
            @empty
            <div class="rounded-md bg-blue-50 p-4">
              <div class="flex">
                <div class="flex-shrink-0">
                  <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd" />
                  </svg>
                </div>
                @if (request()->has('category_id'))
                <div class="ml-3 flex-1 md:flex md:justify-between">
                  <p class="text-sm text-blue-700">
                  
                    😔 No hustles for the selected category</p>
                  <p class="mt-3 text-sm md:mt-0 md:ml-6">
                    <a href="{{route('myhustle.index')}}" class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">
                      See All
                      <span aria-hidden="true"> &rarr;</span>
                    </a>
                  </p>
                </div>
                @else
                <div class="ml-3 flex-1 md:flex md:justify-between">
                  <p class="text-sm text-blue-700">
                  
                    No Hustle is Available yet. Want to create one?</p>
                  <p class="mt-3 text-sm md:mt-0 md:ml-6">
                    <a href="{{route('myhustle.create')}}" class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">
                      Post Hustle
                      <span aria-hidden="true"> &rarr;</span>
                    </a>
                  </p>
                </div>
                @endif
               
              </div>
            </div>
            
            @endforelse
          
          </ul>
        </div>
      </main>
      <aside class="hidden xl:col-span-4 xl:block">
        <div class="sticky top-4 space-y-4">
          <section aria-labelledby="who-to-follow-heading">
            <div class="rounded-lg bg-white shadow">
              <div class="p-6">
                <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">Recent Jobs</h2>
                <div class="mt-6 flow-root">
                  <ul role="list" class="-my-4 divide-y divide-gray-200">
                    @forelse ($jobs as $job)
                    <li class="flex items-center space-x-3 py-4">
                      <div class="flex-shrink-0">
                        {{-- <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
                      </div>
                      <div class="min-w-0 flex-1">
                        <p class="text-sm font-medium text-gray-900">
                          <a href="#"> {{$job->title}} </a>
                        </p>
                        <p class="text-sm text-gray-500">
                          <a href="#"> {{$job->location}} </a>
                        </p>
                      </div>
                      <div class="flex-shrink-0">
                        <button type="button" class="inline-flex items-center gap-x-1.5 text-sm font-semibold leading-6 text-gray-900">
                          <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          
                          </svg>

                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                          </svg>
                          
                          View
                        </button>
                      </div>
                    </li>
                    @empty
                        No Job Posted yet
                    @endforelse
                   
                  </ul>
                </div>
                <div class="mt-6">
                  <a href=" {{route('job.index')}} " class="block w-full rounded-md bg-white px-3 py-2 text-center text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:outline-offset-0">View all</a>
                </div>
              </div>
            </div>
          </section>
          {{-- <section aria-labelledby="trending-heading">
            <div class="rounded-lg bg-white shadow">
              <div class="p-6">
                <h2 id="trending-heading" class="text-base font-medium text-gray-900">Trending</h2>
                <div class="mt-6 flow-root">
                  <ul role="list" class="-my-4 divide-y divide-gray-200">
                    <li class="flex space-x-3 py-4">
                      <div class="flex-shrink-0">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Floyd Miles">
                      </div>
                      <div class="min-w-0 flex-1">
                        <p class="text-sm text-gray-800">What books do you have on your bookshelf just to look smarter than you actually are?</p>
                        <div class="mt-2 flex">
                          <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                              </svg>
                              <span class="font-medium text-gray-900">291</span>
                            </button>
                          </span>
                        </div>
                      </div>
                    </li>

                  </ul>
                </div>
                <div class="mt-6">
                  <a href="#" class="block w-full rounded-md bg-white px-3 py-2 text-center text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:outline-offset-0">View all</a>
                </div>
              </div>
            </div>
          </section> --}}
        </div>
      </aside>

    

</x-app-layout>