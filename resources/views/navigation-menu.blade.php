<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="shadow-inner shadow-md">
        <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 py-2.5 px-6 sm:px-3.5 sm:before:flex-1">
            <svg viewBox="0 0 577 310" aria-hidden="true" class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 w-[36.0625rem] -translate-y-1/2 transform-gpu blur-2xl">
              <path id="558b8b01-4d09-4091-8be3-c5da192b7892" fill="url(#4b688345-001e-47fa-aa7a-d561812ecf15)" fill-opacity=".3" d="m142.787 168.697-75.331 62.132L.016 88.702l142.771 79.995 135.671-111.9c-16.495 64.083-23.088 173.257 82.496 97.291C492.935 59.13 494.936-54.366 549.339 30.385c43.523 67.8 24.892 159.548 10.136 196.946l-128.493-95.28-36.628 177.599-251.567-140.953Z" />
              <defs>
                <linearGradient id="4b688345-001e-47fa-aa7a-d561812ecf15" x1="614.778" x2="-42.453" y1="26.617" y2="96.115" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#9089FC" />
                  <stop offset="1" stop-color="#FF80B5" />
                </linearGradient>
              </defs>
            </svg>
            <svg viewBox="0 0 577 310" aria-hidden="true" class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 w-[36.0625rem] -translate-y-1/2 transform-gpu blur-2xl">
              <use href="#558b8b01-4d09-4091-8be3-c5da192b7892" />
            </svg>
            <p class="text-sm leading-6 text-gray-900">
                AJIRY does not charge participants for registration <a href=" {{route('terms.show')}} " class="whitespace-nowrap font-semibold">Learn more&nbsp;<span aria-hidden="true">&rarr;</span></a>
            </p>
            <div class="flex flex-1 justify-end">
              <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
              </button>
            </div>
          </div>
          
        <!-- Primary Navigation Menu -->
        <div class="mx-auto max-w-7xl">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-mark class="block h-10 w-auto" />
                        </a>
                    </div>
                </div>
                <!-- Navigation Links -->
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                   
                    @auth
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @endauth


                    <x-nav-link href="{{ route('job.index') }}" :active="request()->routeIs('job*')">
                        {{ __('Find Jobs') }}
                    </x-nav-link>


                    <x-nav-link href="{{ route('talents') }}" :active="request()->routeIs('talents*')">
                        {{ __('Find Talent') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('myhustle.index') }}" :active="request()->routeIs('myhustle*')">
                            {{ __('MyHustle') }}
                    </x-nav-link>
                                       
                        @guest
                        {{-- Sign and Sign up --}}
                        <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Sign In') }}
                        </x-nav-link>

                        <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            {{ __('Sign Up') }}
                        </x-nav-link>
                        @endguest
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            @if (Auth::check())
                                                {{ Auth::user()->name }}
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                                <button
                                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover"
                                                        src="{{ Auth::user()->profile_photo_url }}"
                                                        alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @endif
                                        </button>
                                    </span>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>


                                {{-- Main profile --}}

                                <x-dropdown-link href="{{ route('myjobs') }}">
                                    {{ __('My Jobs') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('myhustles') }}">
                                    {{ __('My Hustles') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('user-profile') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Settings') }}
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">

            @auth
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>
              

                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('myhustle.index') }}" :active="request()->routeIs('myhustle*')">
                        {{ __('My hustles') }}
                    </x-responsive-nav-link>
                </div>
            @endauth
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('job.index') }}" :active="request()->routeIs('job/*')">
                    {{ __('Find jobs') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('talents') }}" :active="request()->routeIs('talents')">
                    {{ __('Find Talents') }}
                </x-responsive-nav-link>
            </div>
            @guest
              

                {{-- Login --}}
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                </div>

                {{-- Register --}}
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-responsive-nav-link>
                </div>
            @endguest




            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @auth
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif
                    @endauth


                    <div>
                        @if (Auth::check())
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        @endif
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    @auth
                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="{{ route('myjobs') }}" :active="request()->routeIs('myjobs')">
                            {{ __('My Jobs') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link href="{{ route('myhustles') }}" :active="request()->routeIs('myhustle*')">
                            {{ __('My Hustles') }}
                        </x-responsive-nav-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @endauth

                </div>
            </div>
        </div>


</nav>
