<x-app-layout>
    <div class="mt-4 relative mx-auto max-w-7xl px-4">

        <div class="relative mx-auto max-w-7xl">
            <x-common.page-header backurl="{{ route('home') }}" currenturl="{{ request()->url() }}"
                title="{{ 'Your Hustles' }}" backtitle="{{ 'Home' }}" />

            <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div class="ml-4 mt-2">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Your Hustles</h3>
                    </div>
                    <div class="ml-4 mt-2 flex-shrink-0">
                        <a href=" {{route('myhustle.create')}} " type="button"
                            class="relative inline-flex items-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">Create
                            a new hustle</a>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">

                    @forelse (auth()->user()->myhustles as $myhustle)
                    <li>
                        <a href="#" class="block hover:bg-gray-50">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="truncate text-sm font-medium text-pink-600"> {{$myhustle->title}} </p>
                                   
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                       
                                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 ">
                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{$myhustle->location}}
                                        </p>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p>
                                            Posted
                                            <time datetime="2020-01-07">  {{$myhustle->created_at->diffForHumans()}} </time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @empty

                   <div>
                    <div class="border-l-4 border-yellow-400 bg-yellow-50 p-4">
                        <div class="flex">
                          <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                          </div>
                          <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                              You have not posted any hustle.
                              <a href=" {{route('myhustle.create')}} " class="font-medium text-yellow-700 underline hover:text-yellow-600">Post a hustle to get clients.</a>
                            </p>
                          </div>
                        </div>
                      </div>
                      
                        
                    
                   </div>
                    @endforelse
                   

                   
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
