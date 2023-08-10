<x-app-layout>
    <div class="mt-4 relative px-4 pt-8 pb-20 sm:px-6 lg:px-2 lg:pt-6 lg:pb-28 rounded-2xl">
        <div class="relative mx-auto max-w-7xl">

            <x-common.page-header backurl="{{ route('home') }}" currenturl="{{ request()->url() }}"
                title="{{ $job->title . ' Applicants' }}" backtitle="{{ 'Home' }}" />
       
                <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Job Applicants ({{ $applications->count() }})
                    </h3>
                    <div class="mt-3 sm:mt-0 sm:ml-4">
                        <label for="mobile-search-candidate" class="sr-only">Search</label>
                        <label for="desktop-search-candidate" class="sr-only">Search</label>
                        <div class="flex rounded-md shadow-sm">
                            <div class="relative flex-grow focus-within:z-10">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="mobile-search-candidate" id="mobile-search-candidate"
                                    class="block w-full rounded-none rounded-l-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:hidden"
                                    placeholder="Search">
                                <input type="text" name="desktop-search-candidate" id="desktop-search-candidate"
                                    class="hidden w-full rounded-none rounded-l-md border-0 py-1.5 pl-10 text-sm leading-6 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:block"
                                    placeholder="Search candidates">
                            </div>
                            <button type="button"
                                class="relative -ml-px inline-flex items-center gap-x-1.5 rounded-r-md px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                <svg class="-ml-0.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M2 3.75A.75.75 0 012.75 3h11.5a.75.75 0 010 1.5H2.75A.75.75 0 012 3.75zM2 7.5a.75.75 0 01.75-.75h6.365a.75.75 0 010 1.5H2.75A.75.75 0 012 7.5zM14 7a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02l-1.95-2.1v6.59a.75.75 0 01-1.5 0V9.66l-1.95 2.1a.75.75 0 11-1.1-1.02l3.25-3.5A.75.75 0 0114 7zM2 11.25a.75.75 0 01.75-.75H7A.75.75 0 017 12H2.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd" />
                                </svg>
                                Sort
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
        
        
                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                    <ul role="list" class="divide-y divide-gray-200">
        
                        @forelse ($applications as $application)
                            <li>
                                <a href=" {{ route('job.application.show', $application) }} " class="block hover:bg-gray-50">
                                    <div class="flex items-center px-4 py-4 sm:px-6">
                                        <div class="flex min-w-0 flex-1 items-center">
                                            <div class="flex-shrink-0">
                                                <img class="h-12 w-12 rounded-full"
                                                    src="{{ $application->user->profile_photo_url }}" alt="">
                                            </div>
                                            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                <div>
                                                    <p class="truncate text-sm font-medium text-indigo-600">
                                                        {{ $application->user->name }} </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                                            <path
                                                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                                        </svg>
                                                        <span class="truncate">{{ $application->user->email }}</span>
                                                    </p>
                                                </div>
                                                <div class="hidden md:block">
                                                    <div>
                                                        <p class="text-sm text-gray-900">
                                                            Applied on
                                                            <time datetime="2020-01-07">
                                                                {{ $application->created_at->format('M d, Y') }} </time>
                                                        </p>
                                                        <p class="mt-2 flex items-center text-sm text-gray-500">
                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400"
                                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Profile is Complete
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @empty
                            No Applicant yet
                        @endforelse
        
        
        
                    </ul>
                </div>
            </div>

       


    </div>


    </div>




</x-app-layout>
