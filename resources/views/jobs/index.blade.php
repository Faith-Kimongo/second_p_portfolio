<x-app-layout>
    <div class="mt-2 w-full relative mx-auto max-w-7xl px-4 lg:px-2">
        <x-common.page-header backurl="{{ route('dashboard') }}" currenturl="{{ request()->url() }}"
            title="{{ 'Find jobs for you' }}" backtitle="{{ 'Dashboard' }}" />
        <form action="{{ route('job.index') }}" method="GET">
            <div class="grid grid-cols-1 sm:grid-cols-3">
                <div class="bg-gray-100">
                    <div class="min-w-0 flex-1">
                        <div class="flex items-center  md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                            <div class="w-full">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input id="search" name="search"
                                        class="block w-full rounded-md border-0 bg-gray-50 py-1.5 pl-10 pr-3 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-500 sm:text-sm sm:leading-6"
                                        placeholder="Search by job title..." type="search"
                                        value="{{ request()->search }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex lg:ml-2 xs:mt-4">
                    <select id="category_id" name="category_id"
                        class="block w-full rounded-md border-0 bg-gray-50 py-1.5 pl-10 pr-3 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-500 sm:text-sm sm:leading-6">
                        <option value="all" selected>All</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request()->input('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                </div>

                {{-- show jobs btn --}}
                <div class="flex justify-between">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-4 py-2 ml-2 font-medium text-white bg-pink-800 border border-transparent rounded-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-800 sm:text-sm">
                        Search
                    </button>
                </div>
            </div>
        </form>


        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 overflow-x-auto">
                <div class="flex flex-col h-screen">
                    <!-- Content for first column -->
                    <div class=" rounded-2xl">
                        @php
                            $total_jobs = $total;
                            $plural = Str::plural('job', $total_jobs);
                        @endphp
                        <p class="text-sm mt-2">Found <a class="text-green-900">{{ $total }}
                            </a>{{ $plural }}</p>
                        <ul>
                            @forelse ($jobs as $job)
                                <a href="{{ route('job.show', $job->slug) }}" class="hover:border">
                                    <li
                                        class="shadow-md rounded-2xl p-3 bg-gray-200 mt-4 {{ $job->slug == $pinned_job->slug ? 'border border-2 border-red-500' : '' }} ">
                                        <div>
                                            <div class="flex">
                                                <div class="px-4 py-4 sm:px-6">
                                                    <div class="flex items-center justify-between">
                                                        <p class="text-sm font-medium text-gray-700">
                                                            {{ $job->title }}
                                                        </p>

                                                    </div>
                                                    <div class="mt-2 sm:flex sm:justify-between">
                                                        <div class="sm:flex">
                                                            <p class="flex items-center text-sm text-gray-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                                                </svg>


                                                                {{ $job->category->name }}
                                                            </p>
                                                            <p
                                                                class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                                {{ $job->location }} &nbsp;
                                                            </p>
                                                        </div>


                                                        @php
                                                            $now = Carbon\Carbon::now();
                                                            $daysRemaining = $now->diffInDays($job->deadline, false);
                                                        @endphp

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="relative">
                                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                                    <div class="w-full border-t border-gray-300"></div>
                                                </div>
                                                <div class="relative flex justify-start">
                                                </div>
                                            </div>

                                            <div class="min-w-0 m-2 flex-1">
                                                @if ($daysRemaining > 0)
                                                    <span
                                                        class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">{{ $daysRemaining . ' days to the deadline' }}
                                                    </span>
                                                @else
                                                    <p
                                                        class="inline-flex items-center rounded-full bg-red-200 px-2.5 py-0.5 text-xs font-medium text-gray-800 mt-2">
                                                        Job closed
                                                    </p>
                                                @endif

                                            </div>
                                    </li>
                                </a>



                            @empty
                                @php
                                    $search = request()->input('search');
                                @endphp
                                <x-alert :message="'No job(s) found matching  ' . $search . ', you can filter by job category'" />
                            @endforelse

                        </ul>


                        <div class="mt-3">
                            {{ $jobs->onEachSide(1)->links() }}

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/3 overflow-x-auto">
                <div class="flex flex-col h-screen">
                    <!-- Content for second pinned_job -->
                    @if (isset($pinned_job))
                        <div class="shadow-2xl m-4 rounded-2xl p-6">
                            <div>
                                <section aria-labelledby="profile-overview-title" class="bg-gray-100  rounded-xl p-4">
                                    <div>
                                        <div
                                            class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">

                                            <div class="px-4 py-4 sm:px-6">
                                                <div class="flex items-center justify-between ">
                                                    <p class="text-sm font-medium text-gray-700">
                                                        {{ $pinned_job->title }}
                                                    </p>
                                                </div>
                                                <div class="mt-2 sm:flex sm:justify-between">
                                                    <div class="sm:flex">
                                                        <p class="flex items-center text-sm text-gray-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor"
                                                                class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                                            </svg>
                                                            {{ $pinned_job->category->name }}
                                                        </p>
                                                        <p
                                                            class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            {{ $pinned_job->location }} &nbsp;
                                                        </p>
                                                    </div>


                                                </div>

                                                <div class="text-sm text-gray-500 mt-3">
                                                    <div class="mt-2 sm:flex sm:justify-between">
                                                        <div class="sm:flex space-x-12">
                                                            <p>Published On:
                                                                {{ $pinned_job->created_at->format('jS, F Y') }}</p>
                                                            <p>
                                                                Closes on:
                                                                {{ $pinned_job->deadline->format('jS, F Y') }} </p>
                                                        </div>

                                                        @php
                                                            $now = Carbon\Carbon::now();
                                                            $daysRemaining = $now->diffInDays($pinned_job->deadline, false);
                                                        @endphp

                                                    </div>
                                                    @if ($daysRemaining > 0)
                                                        <p
                                                            class="inline-flex items-center rounded-full bg-green-200 px-2.5 py-0.5 text-xs font-medium text-gray-800 mt-2">
                                                            {{ $daysRemaining }} days remaining
                                                        </p>
                                                    @else
                                                        <p
                                                            class="inline-flex items-center rounded-full bg-red-200 px-2.5 py-0.5 text-xs font-medium text-gray-800 mt-2">
                                                            Job closed
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="relative">
                                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                                <div class="w-full border-t border-gray-300"></div>
                                            </div>
                                            <div class="relative flex justify-start">
                                                <span class="bg-gray-100 pr-2 text-sm text-gray-500">More About the
                                                    Job</span>
                                            </div>
                                        </div>
                                        <p class="mt-1">
                                            {{ $pinned_job->user->bio }}
                                        </p>
                                        <p class="font-semibold mt-4">Job Description</p>
                                        <p class="mt-4">
                                            {!! $pinned_job->description !!}
                                            <br>
                                        <p class="font-semibold">Responsibilities:</p>
                                        <ul class="list-disc mt-4">
                                            {!! $pinned_job->responsibilities !!}
                                        </ul>
                                        <br>
                                        <p class="font-semibold">Requirements:</p>
                                        <ul class="list-disc mt-4">
                                            {!! $pinned_job->requirements !!}
                                        </ul>
                                        </p>
                                        <div class="relative">
                                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                                <div class="w-full border-t border-gray-300"></div>
                                            </div>
                                            <div class="relative flex justify-start">
                                                <span class="bg-gray-100 pr-2 text-sm text-gray-500">Posted By</span>
                                            </div>
                                        </div>
                                        <div class="min-w-0 m-2 flex-1">

                                            <p class="text-xs font-medium text-gray-900">
                                                <a href="#" class="hover:underline">
                                                    {{ $pinned_job->user->name }} </a>
                                            </p>
                                            <p class="text-xs text-gray-500">
                                                <a class="hover:underline">
                                                    <time datetime="2020-12-09T11:43:00">Joined
                                                        {{ $pinned_job->user->created_at->format('M Y') }}</time>
                                                </a>
                                            </p>
                                        </div>
                                </section>
                                <hr>
                            </div>
                            <div class="relative flex flex-1 justify-right">

                                @auth
                                    @if ($pinned_job->isAppliedBy(Auth::user()))
                                        <a disabled href=""
                                            class="mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Already
                                            Applied
                                            Job</a>
                                    @else
                                        <a href="{{ route('job.apply', $pinned_job->slug) }}"
                                            class="mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                                            Job</a>
                                            
                                    @endif
                                @endauth
                                @guest
                                    <a href="{{ route('job.apply', $pinned_job->slug) }}"
                                        class="mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">Apply
                                        Job</a>

                            
                                @endguest

                                @if (session('success'))
                                    <div class="rounded-md bg-green-50 p-4">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-green-800">
                                                    {{ session('success') }}
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @auth
                                    @if (in_array(
                                            $pinned_job->slug,
                                            auth()->user()->savedjobs->ToArray()))
                                        <button
                                            class="mt-3 ml-3 inline-flex items-center flex-shrink-0 rounded-md border border-pink-800 px-4 py-2 text-base font-medium text-black shadow-sm hover:from-pink-700 hover:to-pink-900">Saved</button>
                                    @else
                                        <div x-data="{ inputVal: '{{ $pinned_job->id }}' }">
                                            <button
                                                class="mt-3 ml-3 inline-flex items-center flex-shrink-0 rounded-md border border-pink-800 px-4 py-2 text-base font-medium text-black shadow-sm hover:from-pink-700 hover:to-pink-900"
                                                x-on:click.prevent="submitForm">Save</button>
                                           

                                            <form x-ref="hiddenForm" method="POST"
                                                action="{{ route('saved-jobs.store') }}" style="display:none"
                                                @submit.prevent>
                                                @csrf
                                                <input type="hidden" name="job_id" x-bind:value="inputVal">
                                            </form>
                                        </div>
                                    @endif

                                    <a href="whatsapp://send?text={{ route('job.show', $pinned_job->slug) }}"
                                        class="ml-2 mt-3 inline-flex items-center flex-shrink-0 rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900">
                                  

                                        
                                        {{-- Share --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                          </svg>

                                          <svg class="h-6" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1219.547 1225.016" id="whatsapp">
                                            <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"></path>
                                            <linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#20b038"></stop><stop offset="1" stop-color="#60d66a"></stop></linearGradient>
                                            <path fill="url(#a)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"></path><path fill="#FFF" fill-rule="evenodd" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" clip-rule="evenodd"></path><path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"></path>
                                           </svg>
                                          
                                    </a>
                                @endauth
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitForm() {
            var form = this.$refs.hiddenForm;
            form.submit();
        }
        window.Alpine.data('submitForm', submitForm);
    </script>
</x-app-layout>
