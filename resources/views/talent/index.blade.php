<x-app-layout>
    <div class="mt-4 relative mx-auto max-w-7xl px-4">
        <x-common.page-header backurl="{{ route('dashboard') }}" currenturl="{{ request()->url() }}"
            title="{{ 'Find the right Talent' }}" backtitle="{{ 'Dashboard' }}" />
        <form action=" {{ route('talents') }} " method="GET">
            <div class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm">
                <div class="flex items-center flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path fill-rule="evenodd"
                            d="M8.5 15a6.5 6.5 0 100-13 6.5 6.5 0 000 13zm6.19-1.31l3.61 3.61a.75.75 0 11-1.06 1.06l-3.61-3.61a8 8 0 111.06-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                    <input type="text" name="search" id="search" value="{{ request()->search }}"
                        class="block w-full py-2 pl-3 pr-10 leading-5 text-gray-900 placeholder-gray-500 bg-white border-gray-300 rounded-md focus:outline-none focus:placeholder-pink-900  sm:text-sm"
                        placeholder="Search for talents by skills...">
                </div>
                <button type="submit"
                    class="inline-flex items-center justify-center px-4 py-2 ml-2 font-medium text-white bg-pink-700 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-800 sm:text-sm">
                    Search
                </button>
            </div>
        </form>

        {{-- Talents --}}

        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="bg-gray-100 px-2 text-sm text-gray-500">Talents</span>
            </div>
        </div>

        <div class="mb-2">
            {{$talents->links()}}
        </div>

        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($talents as $talent)
                <li class="col-span-1   rounded-lg bg-white shadow">
                    <div class="flex w-full items-center justify-between space-x-6 p-6">

                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <div class="relative">
                                    <img class="h-16 w-16 rounded-full" src="{{ $talent->profile_photo_url }}"
                                        alt="">
                                    <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
                                </div>
                                <h3 class="truncate text-sm font-medium text-gray-900">{{ $talent->name }}</h3>
                                <span
                                    class="inline-block flex-shrink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">Verified</span>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="mt-2 relative flex justify-start">
                                    <span class="bg-white pr-2 text-sm text-gray-500">Key Skills</span>
                                </div>
                            </div>

                            {{-- <p class="mt-1 truncate text-sm text-gray-500">Key Skills --}}
                            <ul role="list" class="mt-2 leading-8">

                                @forelse ($talent->skills as $skill)
                                    <li class="flex items-center">
                                        <svg class="truncate w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $skill->name }}
                                    </li>

                                @empty
                            </ul>
                            <div class="border-l-4 border-yellow-400 bg-yellow-50 p-2">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-yellow-700">
                                            No Skill(s).
                                        </p>
                                    </div>
                                </div>
                            </div>
            @endforelse
            </p>
    </div>
    </div>
    <div class="p-4 sm:col-span-2">
        {{-- <dt class="text-sm font-medium text-gray-500">About</dt> --}}
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-start">
                <span class="bg-white pr-2 text-sm text-gray-500">About</span>
            </div>
        </div>

        <dd class="mt-1 max-w-prose space-y-5 text-sm text-gray-900">
            <p>{{ $talent->bio ?? 'No Bio' }}</p>
        </dd>
    </div>
    <div>
        <div class="-mt-px flex divide-x divide-gray-200">

            <div class="-ml-px flex w-0 flex-1">
                @auth
                    <a href="tel:{{ $talent->mobile_number }}"
                        class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        Call me/Hire Me
                    </a>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                        class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                clip-rule="evenodd" />
                        </svg>
                        Log in to call me
                    </a>
                @endguest

            </div>

            <div class="flex w-0 flex-1">
                <a href="{{ route('talents.show', $talent->id) }}"
                    class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    View My Profile
                    </a>
                </div>

            </div>
        </div>
    </li>
@empty
    @if (request()->has('search'))
        No profile matches your search for {{ request()->input('search') }}
    @else
        No profile found
    @endif
    @endforelse
    </ul>
    <div class="mT-2">
        {{$talents->links()}}
    </div>
    </div>

</x-app-layout>
